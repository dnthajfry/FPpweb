<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul: Sistem Database</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            margin-right: 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #0056b3;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 45px;
            right: 0;
            width: 250px;
            height: 100vh;
            background-color: #f8f9fa;
            border-left: 1px solid #ddd;
            overflow-y: auto;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 18px;
            margin-top: 0px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        /* Kontainer utama */
        .container {
            max-width: 1350px;
            margin: 0px auto;
            padding: 20px;
            margin-top: 5px;
        }

        .container h1 {
            color: #007bff;
            font-size: 28px;
        }

        .step {
            margin-bottom: 20px;
        }

        .step h2 {
            font-size: 20px;
            color: #333;
        }

        .step p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
            margin-right: 200px;
            margin-left: 20px;
        }

        pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }

        /* Tombol */
        .back-button,
        .next-button {
            position: fixed;
            bottom: 10px;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button {
            left: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 12px 25px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .next-button {
            right: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 12px 25px;
        }

        .next-button:hover {
            background-color: #0056b3;
        }
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #007bff;
            padding: 15px 0;
            display: flex;
            font-weight: bold;
            justify-content: center;
            align-items: center;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
            color: #fff;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Daftar Modul</h2>
        <ul>
            <li><a href="#intro">1. Pengantar Sistem Database</a></li>
            <li><a href="#relational">2. Model Relasional</a></li>
            <li><a href="#sql">3. SQL (Structured Query Language)</a></li>
            <li><a href="#normalization">4. Normalisasi Database</a></li>
            <li><a href="#optimization">5. Optimisasi Query</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#">Home</a>
        <span>Modul: Sistem Database</span>
    </div>

    <!-- Kontainer Utama -->
    <div class="container">
        <h1>Modul: Sistem Database</h1>

        <div class="step" id="intro">
            <h2>1. Pengantar Sistem Database</h2>
            <p>Sistem database adalah kumpulan data yang saling berhubungan dan perangkat lunak yang digunakan untuk mengelola data tersebut. Database digunakan untuk menyimpan, mengorganisasi, dan mengambil data secara efisien.</p>
        </div>

        <div class="step" id="relational">
            <h2>2. Model Relasional</h2>
            <p>Model relasional adalah salah satu model database yang menggunakan tabel untuk merepresentasikan data dan hubungan antar data. Elemen utama model relasional adalah entitas, atribut, dan relasi.</p>
            <pre><code>// Contoh Tabel Relasional: Mahasiswa
| NIM  | Nama         | Prodi        |
|------|--------------|--------------|
| 123  | Budi Santoso | Informatika  |
| 456  | Siti Aminah  | Teknik Sipil |
</code></pre>
        </div>

        <div class="step" id="sql">
            <h2>3. SQL (Structured Query Language)</h2>
            <p>SQL adalah bahasa standar untuk mengelola dan memanipulasi database relasional. Contoh perintah SQL:</p>
            <pre><code>// Membuat Tabel
CREATE TABLE mahasiswa (
    NIM INT PRIMARY KEY,
    Nama VARCHAR(100),
    Prodi VARCHAR(50)
);

// Menambahkan Data
INSERT INTO mahasiswa (NIM, Nama, Prodi)
VALUES (123, 'Budi Santoso', 'Informatika');

// Mengambil Data
SELECT * FROM mahasiswa;
</code></pre>
        </div>

        <div class="step" id="normalization">
            <h2>4. Normalisasi Database</h2>
            <p>Normalisasi adalah proses pengorganisasian tabel database untuk mengurangi redundansi dan meningkatkan integritas data. Contoh tingkat normalisasi:</p>
            <pre><code>// Contoh Normalisasi Tingkat 1 (1NF)
| NIM  | Nama         | Prodi        | Mata Kuliah  |
|------|--------------|--------------|--------------|
| 123  | Budi Santoso | Informatika  | Basis Data   |
| 123  | Budi Santoso | Informatika  | Pemrograman  |
</code></pre>
        </div>

        <div class="step" id="optimization">
            <h2>5. Optimisasi Query</h2>
            <p>Optimisasi query adalah proses mempercepat eksekusi query pada database dengan menggunakan indeks, denormalisasi, atau strategi lainnya. Contoh penggunaan indeks:</p>
            <pre><code>// Membuat Indeks
CREATE INDEX idx_nama ON mahasiswa(Nama);

// Query dengan Indeks Lebih Cepat
SELECT * FROM mahasiswa WHERE Nama = 'Budi Santoso';
</code></pre>
        </div>
    </div>

    <div class="bottom-bar">
        <span>Modul Database Systems</span>
        </div>
    </div>
    <button class="back-button" onclick="window.location.href='../index.php'">Home</button>
    <button class="next-button" onclick="window.location.href='../Ujian/ujianBaru.php'">Kerjakan Test</button>

</body>
</html>
