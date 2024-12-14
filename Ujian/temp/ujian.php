<?php
include __DIR__ . '/../config.php';


$result = $db->query("SELECT * FROM questions");

session_start();

if (isset($_SESSION['user_name'])) {
    $nama = $_SESSION['user_name'];
} else {
    $nama = "Tamu";
}

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
                <span class="navbar-text me-2">Selamat Datang, <strong><?php echo htmlspecialchars($nama); ?></strong></span>
                <a class="btn btn-outline-light" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="btn btn-outline-light me-2" href="form-masuk.php">Masuk</a>
                <a class="btn btn-outline-light" href="form-daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<body>
    <div class="container mt-5 mb-5">
    <h1>Ujian tes</h1>
    <form method="POST" action="jawaban_ujian.php">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card p-3 mb-4 shadow-sm">
            <h5 class="mb-3"><?php echo htmlspecialchars($row['question_text']); ?></h5>
                <?php
                $answers = $db->query("SELECT * FROM answers WHERE question_id=" . $row['id']);
                while ($answer = $answers->fetch_assoc()): ?>
                    <label>
                        <input type="radio" name="question_<?php echo $row['id']; ?>" value="<?php echo $answer['answer_text']; ?>">
                        <?php echo $answer['answer_text']; ?>
                    </label><br>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
