
<?php
include __DIR__ . '/../config.php';

session_start();

if (!isset($_SESSION['total_questions'])) {
    $total_count = $db->query("SELECT COUNT(*) AS total FROM questions");
    $_SESSION['total_questions'] = $total_count->fetch_assoc()['total'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['final_submit'])) {
    foreach ($_POST as $question_id => $user_answer) {
        if (strpos($question_id, 'question_') === 0) {
            $_SESSION['answers'][$question_id] = $user_answer;
        }
    }
    
    $correct_count = 0;
    foreach ($_SESSION['answers'] as $question_id => $user_answer) {
        $clean_id = str_replace('question_', '', $question_id);
        $stmt = $db->prepare("SELECT correct_answer FROM questions WHERE id = ?");
        $stmt->bind_param("i", $clean_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $correct = $result->fetch_assoc();
        
        if ($correct && $user_answer === $correct['correct_answer']) {
            $correct_count++;
        }
    }
    $_SESSION['correct_answers'] = $correct_count;
    
    header("Location: result_ujian.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['next'])) {
    $page = $_POST['current_page'];
    
    foreach ($_POST as $question_id => $user_answer) {
        if (strpos($question_id, 'question_') === 0) {
            $_SESSION['answers'][$question_id] = $user_answer;
        }
    }
    
    // Redirect to next page
    header("Location: ?page=" . ($page + 1));
    exit;
}

// Pagination setup
$questions_per_page = 1;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $questions_per_page;

// Get current page question
$stmt = $db->prepare("SELECT * FROM questions LIMIT ?, ?");
$stmt->bind_param("ii", $offset, $questions_per_page);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ojo Lali Sinau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Kartu Pertanyaan */
        .card-question {
            background-color: #1E1E2F;
            color: white;
            border-radius: 10px;
            padding: 25px;
        }
        /* Pilihan Jawaban */
        .option-card {
            background-color: #151521;
            border: 2px solid transparent;
            color: #B6B6B6;
            border-radius: 10px;
            padding: 10px 15px;
            transition: all 0.3s;
            cursor: pointer;
        }
        .option-card:hover, .option-card.selected {
            border-color: #49BBBD;
            background-color: #49BBBD;
            color: white;
        }
        /* Progress Bar */
        .progress-bar {
            background-color: #49BBBD;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #49BBBD;">
    <div class="container py-3">
        <a class="navbar-brand me-3" href="index.php">Ojo Lali Sinau</a>
        <div class="navbar-nav">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="../learning.php">Learning Path</a>
        </div>
        <div class="ms-auto d-flex">
            <?php if (isset($_SESSION['user_id'])): ?>
                <span class="navbar-brand me-2">Selamat Mengerjakan</span>
                <a class="btn btn-outline-light" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="btn btn-outline-light me-2" href="form-masuk.php">Masuk</a>
                <a class="btn btn-outline-light" href="form-daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Soal <?php echo $page; ?> dari <?php echo $_SESSION['total_questions']; ?></h3>
        <div class="progress" style="width: 200px;">
            <div class="progress-bar" role="progressbar"
                style="width: <?php echo ($page / $_SESSION['total_questions']) * 100; ?>%;"
                aria-valuenow="<?php echo $page; ?>"
                aria-valuemin="0"
                aria-valuemax="<?php echo $_SESSION['total_questions']; ?>">
                <?php echo $page; ?>/<?php echo $_SESSION['total_questions']; ?>
            </div>
        </div>
    </div>

    <form method="POST" id="quizForm">
        <input type="hidden" name="current_page" value="<?php echo $page; ?>">

        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card-question mb-4">
                <h5 class="mb-3">Pertanyaan <?php echo $page; ?>: <?php echo htmlspecialchars($row['question_text']); ?></h5>
                <?php
                $stmt = $db->prepare("SELECT * FROM answers WHERE question_id = ?");
                $stmt->bind_param("i", $row['id']);
                $stmt->execute();
                $answers = $stmt->get_result();

                while ($answer = $answers->fetch_assoc()): ?>
                    <label class="option-card d-block mb-2">
                        <input type="radio" name="question_<?php echo $row['id']; ?>"
                               value="<?php echo htmlspecialchars($answer['answer_text']); ?>"
                               style="display:none;"
                               id="answer_<?php echo $answer['id']; ?>"
                               <?php if (isset($_SESSION['answers']["question_{$row['id']}"]) && 
                                   $_SESSION['answers']["question_{$row['id']}"] === $answer['answer_text']) echo 'checked'; ?>
                               required>
                        <?php echo htmlspecialchars($answer['answer_text']); ?>
                    </label>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>" class="btn btn-secondary">Previous</a>
            <?php else: ?>
                <div></div>
            <?php endif; ?>
            
            <?php if ($page >= $_SESSION['total_questions']): ?>
                <button type="submit" name="final_submit" class="btn btn-primary" style="background-color: #49BBBD;">Submit Ujian</button>
            <?php else: ?>
                <button type="submit" name="next" class="btn btn-primary" style="background-color: #49BBBD;">Next</button>
            <?php endif; ?>
        </div>
    </form>
</div>

<script>
    document.querySelectorAll('.option-card').forEach(option => {
        option.addEventListener('click', function () {
            document.querySelectorAll('.option-card').forEach(el => el.classList.remove('selected'));
            this.classList.add('selected');
        });
    });
</script>
</body>
</html>
