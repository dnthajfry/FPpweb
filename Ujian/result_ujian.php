<?php
include __DIR__ . '/../config.php';

session_start();

if (!isset($_SESSION['answers']) || empty($_SESSION['answers'])) {
    header("Location: ujianMode.php");
    exit;
}

$totalQuestions = $_SESSION['total_questions'];
$score = 0;
$questionDetails = [];


foreach ($_SESSION['answers'] as $question_id => $user_answer) {
    $clean_id = str_replace("question_", "", $question_id);
    
    $stmt = $db->prepare("SELECT q.question_text, q.correct_answer FROM questions q WHERE q.id = ?");
    $stmt->bind_param("i", $clean_id);
    $stmt->execute();
    $question_result = $stmt->get_result();
    $question_data = $question_result->fetch_assoc();
    
    $stmt = $db->prepare("SELECT answer_text FROM answers WHERE question_id = ?");
    $stmt->bind_param("i", $clean_id);
    $stmt->execute();
    $answers_result = $stmt->get_result();
    $all_answers = [];
    while ($answer = $answers_result->fetch_assoc()) {
        $all_answers[] = $answer['answer_text'];
    }
    
    $is_correct = ($user_answer === $question_data['correct_answer']);
    if ($is_correct) {
        $score++;
    }
    
    $questionDetails[] = [
        'question_text' => $question_data['question_text'],
        'user_answer' => $user_answer,
        'correct_answer' => $question_data['correct_answer'],
        'is_correct' => $is_correct,
        'all_answers' => $all_answers
    ];
}


$percentage = ($score / $totalQuestions) * 100;
$_SESSION['score'] = [
    'total' => $totalQuestions,
    'correct' => $score,
    'percentage' => $percentage
];
$_SESSION['Nilai'] = $percentage
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .correct-answer {
            color: #198754;
            font-weight: bold;
        }
        .wrong-answer {
            color: #dc3545;
        }
        .question-card {
            border-left: 5px solid;
        }
        .correct-card {
            border-left-color: #198754;
        }
        .wrong-card {
            border-left-color: #dc3545;
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
    </div>
</nav>

<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-body text-center">
            <h2 class="card-title mb-4">Hasil Ujian Anda</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="border rounded p-3 mb-3">
                        <h3 class="h4">Skor Total</h3>
                        <p class="h2 mb-0"><?php echo $score; ?> / <?php echo $totalQuestions; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded p-3 mb-3">
                        <h3 class="h4">Persentase</h3>
                        <p class="h2 mb-0"><?php echo number_format($percentage, 1); ?>%</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <?php if ($percentage >= 70): ?>
                    <div class="alert alert-success" role="alert">
                        Selamat! Anda telah lulus ujian!
                    </div>
                    <a href="../Certif/sertif.php" class="btn btn-success btn-lg">Download Sertifikat</a>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                        Maaf, nilai Anda belum mencapai batas kelulusan minimum (70%).
                    </div>
                    <a href="ulangi_test.php" class="btn btn-danger btn-lg">Ulangi Ujian</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <h3 class="mb-4">Detail Jawaban</h3>
    <?php foreach ($questionDetails as $index => $detail): ?>
        <div class="card mb-3 question-card <?php echo $detail['is_correct'] ? 'correct-card' : 'wrong-card'; ?>">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Pertanyaan <?php echo $index + 1; ?></strong>
                <span class="badge <?php echo $detail['is_correct'] ? 'bg-success' : 'bg-danger'; ?>">
                    <?php echo $detail['is_correct'] ? 'Benar' : 'Salah'; ?>
                </span>
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo htmlspecialchars($detail['question_text']); ?></p>
                
                <div class="mt-3">
                    <p>
                        <strong>Jawaban Anda:</strong> 
                        <span class="<?php echo $detail['is_correct'] ? 'correct-answer' : 'wrong-answer'; ?>">
                            <?php echo htmlspecialchars($detail['user_answer']); ?>
                        </span>
                    </p>
                    
                    <?php if (!$detail['is_correct']): ?>
                        <p>
                            <strong>Jawaban Benar:</strong> 
                            <span class="correct-answer">
                                <?php echo htmlspecialchars($detail['correct_answer']); ?>
                            </span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="text-center mt-4 mb-5">
        <a href="../index.php" class="btn btn-primary btn-lg">Kembali ke Home</a>
    </div>
</div>

</body>
</html>