<?php
session_start();

// Hapus jawaban yang sudah ada di sesi
unset($_SESSION['answers']); // Menghapus jawaban yang sudah disimpan di sesi
unset($_SESSION['score']); //menghapus session skor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: ujianBaru.php?page=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangi Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md">
        <h1 class="text-2xl font-bold text-red-500 mb-4">Skor Anda Tidak Mencukupi</h1>
        <p class="text-gray-700 mb-6">
            Maaf, skor Anda belum mencapai batas kelulusan. Silakan ulangi test untuk mendapatkan sertifikat.
        </p>
        <form method="POST" action="">
            <button type="submit" class="bg-teal-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-teal-600">
                Ulangi Test
            </button>
        </form>
    </div>

</body>
</html>
