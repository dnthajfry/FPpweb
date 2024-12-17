<?php
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
    <title>Learning Path</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #add8e6; /* Light Blue */
            padding: 10px 20px;
        }

        .navbar .left,
        .navbar .right {
            display: flex;
            align-items: center;
        }

        .navbar .left a,
        .navbar .right span {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        .navbar .left a:hover {
            color: #007BFF;
        }

        .navbar .right span {
            font-size: 16px;
            color: #555;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        /* Title Section */
        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title h1 {
            font-size: 28px;
            color: #007BFF;
        }

        .title p {
            font-size: 16px;
            color: #555;
        }

        /* Learning Path Layout */
        .learning-path {
            display: flex;
            gap: 20px;
        }

        /* Left Column */
        .steps {
            flex: 1;
            border-right: 2px solid #ddd;
            padding-right: 20px;
        }

        .steps .path-step {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .steps .path-step h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .steps .path-step p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        /* Right Column */
        .descriptions {
            flex: 1;
            padding-left: 20px;
        }

        .descriptions .info-section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fdfdfd;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .descriptions .info-section h3 {
            color: #007BFF;
            margin-bottom: 10px;
        }

        .descriptions .info-section p {
            color: #555;
            margin: 0;
        }
    </style>
</head>
<body>
    <header class="bg-teal-500 text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">OjoLaliSinau</h1>
        <nav class="flex gap-4">
            <a href="index.php" class="hover:underline">Home</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
            <a href="Ujian/add_question.php" class="hover:underline text-red-200">Tambah Soal</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['score'])) : ?>
            <a href="Certif/sertif.php" class="hover:underline">Sertifikat</a>
            <?php else : ?>
            <a href="Certif/belumsertif.php" class="hover:underline">Sertifikat</a>
            <?php endif; ?>

            <a href="Ujian/ujianBaru.php" class="hover:underline">Test</a>
        </nav>
        <div>
            <a href="#" class="mr-4">Selamat Datang<strong><?php echo htmlspecialchars($nama); ?></strong></span></a>
        </div>
    </header>


    <section>
    <div class="container">
        <section class="max-w-5xl mx-auto p-4">
            <div class="title">
            <h1>Dasar Pemrograman</h1>
            <p class="title">Kurikulum dirancang dengan mendasarkan pengajaran dari hal mendasar dalam coding.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="Modul/modulStrukDat.php" class="bg-white rounded-lg shadow-md p-4 flex hover:bg-gray-100 transition">
            <img src="Modul/StrukturData.png" alt="Modul 1" class="w-32 h-32 rounded-lg mr-4">
            <div>
                <h4 class="text-lg font-semibold mb-2">Class Struktur Data</h4>
                <p class="text-sm text-gray-600 mb-2">Pengajar pilihan dari RPL 2023</p>
                <p class="text-sm text-gray-500">with Mas Tata dan Mas Aldin</p>
            </div>
        </a>

        <a href="Modul/modulDatabaseSystem.php" class="bg-white rounded-lg shadow-md p-4 flex hover:bg-gray-100 transition">
            <img src="Modul/DatabaseSys.png" alt="Modul 2" class="w-32 h-32 rounded-lg mr-4">
            <div>
                <h4 class="text-lg font-semibold mb-2">Class Basis Data</h4>
                <p class="text-sm text-gray-600 mb-2">Pengajar pilihan dari RPL 2023</p>
                <p class="text-sm text-gray-500">with Mas Tata dan Mas Ammar</p>
            </div>
        </a>
    </div>
</section>

    <section>
    <div class="container">
        <div class="title">
            <h1>Android Developer</h1>
            <p>Kurikulum dirancang dengan persetujuan dari Tim Google Android untuk mempersiapkan developer Android standar Global.</p>
        </div>

        <div class="learning-path">
            <div class="steps">
                <div class="path-step">
                    <a href="Modul/modulAndroid1.php" class="bg-white rounded-lg shadow-md p-4 flex hover:bg-gray-100 transition">Modul 1: Memulai Pemrograman dengan Kotlin</a>
                    <p>Durasi: `30 Menit`</p>
                    <p>Tingkat: Dasar</p>
                    <p>3 Modul, 68,825 Siswa Terdaftar</p>
                </div>

                <div class="path-step" >
                    <a href="Modul/modulAndroid2.php" class="bg-white rounded-lg shadow-md p-4 flex hover:bg-gray-100 transition">Modul 2: Belajar Membuat Aplikasi Android untuk Pemula</a>
                    <p>Durasi: 1 Jam</p>
                    <p>Tingkat: Pemula</p>
                    <p>3 Modul, 125,008 Siswa Terdaftar</p>
                </div>

                <div class="path-step" >
                    <a href="Modul/modulAndroid3.php" class="bg-white rounded-lg shadow-md p-4 flex hover:bg-gray-100 transition">Modul 3: Belajar Fundamental Aplikasi Android</a>
                    <p>Durasi: 1 Jam</p>
                    <p>Tingkat: Menengah</p>
                    <p>3 Modul, 43,217 Siswa Terdaftar</p>
                </div>
            </div>

            <div class="descriptions">
                <div class="info-section">
                    <h3>Langkah Pertama</h3>
                    <p>Langkah pertama untuk menjadi seorang Android Developer dengan mempelajari bahasa yang direkomendasikan oleh Google.</p>
                </div>

                <div class="info-section">
                    <h3>Membuat Aplikasi Sendiri</h3>
                    <p>Buat aplikasi pertama dengan memahami dasar-dasar membuat tampilan dan logika aplikasi.</p>
                </div>

                <div class="info-section">
                    <h3>Membangun Fundamental</h3>
                    <p>Perdalam keahlianmu di dunia pemrograman Android dengan mempelajari cara membuat aplikasi yang dapat mengirim data dari server ke database.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>