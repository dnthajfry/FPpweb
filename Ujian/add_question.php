<?php
include __DIR__ . '/../config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_text = $db->real_escape_string($_POST['question_text']);
    $correct_answer = $db->real_escape_string($_POST['correct_answer']);
    $answers = $_POST['answers']; 

    $sql = "INSERT INTO questions (question_text, correct_answer) VALUES ('$question_text', '$correct_answer')";
    if ($db->query($sql)) {
        $question_id = $db->insert_id; 

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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Soal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<header class="bg-teal-500 text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">OjoLaliSinau</h1>
        <nav class="flex gap-4">
            <a href="../index.php" class="hover:underline">Home</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
            <a href="Ujian/add_question.php" class="hover:underline text-red-200">Tambah Soal</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['score'])) : ?>
            <a href="Certif/sertif.php" class="hover:underline">Sertifikat</a>
            <?php else : ?>
            <a href="Certif/belumsertif.php" class="hover:underline">Sertifikat</a>
            <?php endif; ?>

            <a href="Ujian/ujianBaru.php" class="hover:underline">Coba Test SOal</a>
        </nav>
        <div>
            <a href="#" class="mr-4">Selamat Datang</a>
        </div>
    </header>

  <div class="min-h-screen flex flex-col items-center justify-center px-4">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
      <h1 class="text-2xl font-semibold text-center mb-6 text-gray-800">Tambah Soal</h1>
  
      <form method="POST" action="">
        <div class="mb-4">
          <textarea 
            name="question_text" 
            id="question_text" 
            placeholder="Tambah Soal" 
            rows="4" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          ></textarea>
        </div>

        <div class="mb-4 space-y-3">
          <input 
            type="text" 
            name="answers[]" 
            placeholder="Opsi Jawaban 1" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          />
          <input 
            type="text" 
            name="answers[]" 
            placeholder="Opsi Jawaban 2" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          />
          <input 
            type="text" 
            name="answers[]" 
            placeholder="Opsi Jawaban 3" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          />
          <input 
            type="text" 
            name="answers[]" 
            placeholder="Opsi Jawaban 4" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          />
        </div>

        <div class="mb-4">
          <input 
            type="text" 
            name="correct_answer" 
            id="correct_answer" 
            placeholder="Jawaban Benar" 
            required 
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-teal-400 outline-none"
          />
        </div>

        <button 
          type="submit" 
          class="w-full py-2 bg-teal-400 text-white font-semibold rounded-lg hover:bg-teal-500 transition duration-300"
        >
          TAMBAH
        </button>
      </form>
    </div>
  </div>
</body>
</html>

