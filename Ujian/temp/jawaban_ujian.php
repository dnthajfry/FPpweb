<?php
include __DIR__ . '/../config.php';

session_start();

$score = 0;
$totalQuestions = 0;

// Perhitungan skor dari jawaban si user
foreach ($_POST as $question_id => $user_answer) {
    $question_id = str_replace("question_", "", $question_id);
    $result = $db->query("SELECT correct_answer FROM questions WHERE id=$question_id");
    $correct_answer = $result->fetch_assoc()['correct_answer'];

    if ($user_answer === $correct_answer) {
        $score++;
    }

    $totalQuestions++;
}

$percentage = ($score / $totalQuestions) * 100;
$_SESSION['score'] = $percentage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h2>Hasil Ujian</h2>
    <p>Skor Anda: <strong><?php echo $score; ?></strong> dari <strong><?php echo $totalQuestions; ?></strong></p>
    <p>Persentase: <strong><?php echo number_format($percentage, 2); ?>%</strong></p>

    <?php if ($percentage >= 70): ?>
        <a href="../Certif/sertif.php" class="btn btn-success">Sertifikat</a>
    <?php else: ?>
        <a href="ulangi_test.php" class="btn btn-danger">Nilai masih remidi, silahkan Ulangi Tes</a>
    <?php endif; ?>

    <a href="../index.php" class="btn btn-primary mt-3">Kembali ke Home</a>
</div>
</body>
</html>
