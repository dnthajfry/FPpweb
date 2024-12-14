<?php
include __DIR__ . '/../config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_text = $db->real_escape_string($_POST['question_text']);
    $correct_answer = $db->real_escape_string($_POST['correct_answer']);
    $answers = $_POST['answers']; 

    $sql = "INSERT INTO questions (question_text, correct_answer) VALUES ('$question_text', '$correct_answer')";
    if ($db->query($sql)) {
        $question_id = $db->insert_id; 

        // Masukkan pilihan jawaban ke tabel `answers`
        foreach ($answers as $answer) {
            $answer_text = $db->real_escape_string($answer);
            $db->query("INSERT INTO answers (question_id, answer_text) VALUES ($question_id, '$answer_text')");
        }

        echo "Soal berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan soal: " . $db->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Soal</title>
</head>
<body>
    <h1>Tambah Soal</h1>
    <form method="POST" action="">
        <div>
            <label for="question_text">Pertanyaan:</label><br>
            <textarea name="question_text" id="question_text" rows="4" cols="50" required></textarea>
        </div>
        <br>
        <div>
            <label for="answers[]">Pilihan Jawaban:</label><br>
            <input type="text" name="answers[]" placeholder="Jawaban 1" required><br>
            <input type="text" name="answers[]" placeholder="Jawaban 2" required><br>
            <input type="text" name="answers[]" placeholder="Jawaban 3" required><br>
            <input type="text" name="answers[]" placeholder="Jawaban 4" required><br>
        </div>
        <br>
        <div>
            <label for="correct_answer">Jawaban Benar:</label><br>
            <input type="text" name="correct_answer" id="correct_answer" placeholder="Jawaban benar harus sesuai dengan salah satu pilihan" required>
        </div>
        <br>
        <button type="submit">Tambah Soal</button>
    </form>
</body>
</html>
