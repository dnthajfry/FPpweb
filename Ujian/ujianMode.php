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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ojo Lali Sinau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <span class="navbar-brand me-2">Selamat Mengerjakan</strong></span>
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
        <h1>Ujian tes</h1>
        <div class="progress" style="width: 200px;">
            <div class="progress-bar" role="progressbar" 
                style="width: <?php echo ($page / $_SESSION['total_questions']) * 100; ?>%"
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
            <div class="card p-3 mb-4 shadow-sm">
                <h5 class="mb-3">
                    Pertanyaan <?php echo $page; ?>: 
                    <?php echo htmlspecialchars($row['question_text']); ?>
                </h5>
                <?php
                $stmt = $db->prepare("SELECT * FROM answers WHERE question_id = ?");
                $stmt->bind_param("i", $row['id']);
                $stmt->execute();
                $answers = $stmt->get_result();
                
                while ($answer = $answers->fetch_assoc()): ?>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" 
                            name="question_<?php echo $row['id']; ?>" 
                            value="<?php echo htmlspecialchars($answer['answer_text']); ?>"
                            id="answer_<?php echo $answer['id']; ?>"
                            <?php if (isset($_SESSION['answers']["question_{$row['id']}"]) && 
                                $_SESSION['answers']["question_{$row['id']}"] === $answer['answer_text']) echo 'checked'; ?>
                            required>
                        <label class="form-check-label" for="answer_<?php echo $answer['id']; ?>">
                            <?php echo htmlspecialchars($answer['answer_text']); ?>
                        </label>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>

        <div class="d-flex justify-content-between align-items-center">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>" class="btn btn-primary">Previous</a>
            <?php else: ?>
                <div></div>
            <?php endif; ?>
            
            <?php if ($page >= $_SESSION['total_questions']): ?>
                <button type="submit" name="final_submit" class="btn btn-success">Submit Ujian</button>
            <?php else: ?>
                <button type="submit" name="next" class="btn btn-primary">Next</button>
            <?php endif; ?>
        </div>
    </form>
</div>

<script>
document.getElementById('quizForm').addEventListener('submit', function(e) {
    if (!document.querySelector('input[type="radio"]:checked')) {
        e.preventDefault();
        alert('Silakan pilih jawaban terlebih dahulu!');
    }
});
</script>

</body>
</html>