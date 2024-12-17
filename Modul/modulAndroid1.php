<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 1: Pengantar Kotlin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        .navbar {
            background-color: #007BFF; /* Light Blue */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            margin-right: 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #007BFF;
        }

        .container {
    max-width: 1528px;
    margin: 0px 0px;
    background-color: #fff; 
    margin-top: 50px; /* Menambahkan jarak antara navbar dan konten */
    padding-bottom: 80px; /* Memberikan ruang di bawah konten agar tidak tertutup bottom bar */
}

.container h1 {
    font-size: 28px;
    color: #007BFF;
    margin-bottom: 20px;
    text-align: left;  /* Mengatur judul untuk rata kiri */
    margin-top: 5px; /* Menambahkan jarak antara navbar dan judul */
    margin-left: 20px;
}   

        .container p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
            margin-right: 200px;
            margin-left: 20px;

        }

        .highlight {
            color: #007BFF;
            font-weight: bold;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #333;
        }

        /* Bottom Bar */
        .bottom-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #007BFF;
    padding: 15px 0;
    display: flex;
    justify-content: center; /* Teks berada di tengah */
    align-items: center;
    box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
}

.bottom-bar span {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
}

.bottom-bar button {
    background-color: #fff;
    color: #007BFF;
    padding: 12px 25px;
    border: none;
    border-radius: 50px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
}

.bottom-bar button:hover {
    background-color: #0056b3;
    color: #fff;
}

.bottom-bar button:focus {
    outline: none;
}

        .sidebar {
            position: fixed;
            top: 45px; /* Sidebar di bawah navbar */
            right: 0;
            width: 250px;
            height: 25vh; /* Sidebar lebih pendek */
            background-color: #f8f9fa;
            border-left: 1px solid #ddd;
            overflow-y: auto;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);

            outline: 2px solid #D3D3D3; /* Warna dan ketebalan */
            outline-offset: -2px; /* Agar outline lebih rapat ke sidebar */
        }

        .sidebar h2 {
            font-size: 18px;
            margin-top: 0;
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
        
        

        .back-button, .next-button {
            position: fixed;
            bottom: 3px;
            padding: 15px 25px;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button {
            left: 20px;
            background-color: #007BFF;
            color: #fff;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .next-button {
            right: 20px;
            background-color: #007BFF;
            color: #fff;
        }

        .next-button:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Daftar Modul</h2>
        <ul>
            <li><a href="#">>Kata Pemgantar</a></li>
            <li><a href="#">>Pengenalan Kotlin</a></li>
            <li><a href="#">>Penggunan Kotlin</a></li>
            <li><a href="#">>Mengapa Belajar Kotlin</a></li>
            <li><a href="#">>Perusahaan Pengguna Kotlin</a></li>
            <li><a href="#">>Isi Course</a></li>
            <li><a href="#">>Kata Penutup</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="../index.php">Home</a>
        <span>Modul 1: Pengantar Kotlin</span>
    </div>

    <!-- Content -->
    <div class="container">
        <h1>Pengantar Kotlin</h1>
        <img src="https://cdn.plainconcepts.com/wp-content/uploads/2022/03/Kotlin.jpg" alt="Gambar Pengantar Kotlin" width="1300" height="600" style="margin-bottom: 20px; margin-left: 20px; margin-right: 20px;">
        <p>
            Selamat datang di dunia <span class="highlight">pemrograman dengan Kotlin</span>! Dalam modul ini, Anda akan memulai perjalanan Anda dalam mempelajari salah satu bahasa pemrograman yang paling revolusioner di dunia teknologi.
        </p>
        <p>
            Kotlin adalah bahasa pemrograman modern yang dirancang oleh <span class="highlight">JetBrains</span>, dirilis secara resmi pada tahun 2016. Bahasa ini telah mendapatkan pengakuan luas dari pengembang di seluruh dunia karena keunggulan utamanya, seperti sintaksis yang <span class="highlight">ringkas dan intuitif</span>, fitur keamanan canggih, dan kompatibilitas penuh dengan <span class="highlight">Java</span>.
        </p>
        <p>
            Sebagai bahasa pemrograman serbaguna, Kotlin tidak hanya digunakan untuk <span class="highlight">pengembangan aplikasi Android</span>, tetapi juga untuk <span class="highlight">web development</span>, <span class="highlight">data science</span>, dan bahkan pengembangan aplikasi sisi server. Pada tahun 2019, Google secara resmi menyatakan bahwa Kotlin adalah bahasa utama untuk pengembangan aplikasi Android, menggantikan Java sebagai rekomendasi utamanya.
        </p>
        <p>
            Mengapa belajar Kotlin? Berikut adalah beberapa alasan:
        </p>
        <ul>
            <li><span class="highlight">Efisiensi:</span> Sintaksisnya yang ringkas memungkinkan pengembang menulis lebih sedikit kode tanpa mengurangi fungsionalitas.</li>
            <li><span class="highlight">Keamanan:</span> Kotlin memiliki fitur null safety bawaan yang mengurangi risiko bug NullPointerException.</li>
            <li><span class="highlight">Kompatibilitas:</span> Kotlin dapat digunakan bersama-sama dengan Java, memungkinkan migrasi proyek secara bertahap.</li>
        </ul>
        <p>
            Banyak perusahaan besar telah mengadopsi Kotlin dalam pengembangan aplikasi mereka. Berikut adalah beberapa contohnya:
        </p>
        <ul>
            <li><span class="highlight">Netflix:</span> Menggunakan Kotlin untuk meningkatkan performa aplikasi mereka.</li>
            <li><span class="highlight">Duolingo:</span> Mengintegrasikan Kotlin untuk menciptakan pengalaman belajar bahasa yang lebih interaktif.</li>
            <li><span class="highlight">Pinterest:</span> Memanfaatkan Kotlin untuk pengembangan aplikasi yang andal dan efisien.</li>
        </ul>
        <p>
            Sepanjang modul ini, Anda akan:
        </p>
        <ul>
            <li>Mengenal sintaks dasar Kotlin</li>
            <li>Mempelajari cara membuat program pertama Anda</li>
            <li>Memahami konsep-konsep fundamental yang akan menjadi fondasi bagi pembelajaran lanjutan</li>
        </ul>
        <p>
            Siapkan diri Anda untuk memulai petualangan seru di dunia pemrograman. Dengan pemahaman yang solid dari dasar-dasar Kotlin, Anda akan membuka pintu menuju berbagai peluang karier di dunia teknologi.
        </p>
    </div>

     <!-- Bottom Bar -->
     <div class="bottom-bar">
        <span>Modul 1: Pengantar Kotlin</span>
    </div>

    <!-- Button Kembali ke Halaman Utama -->
    <button class="back-button" onclick="window.location.href='../index.php'">Kembali ke Halaman Utama</button>

<!-- Button Lanjut ke Modul 2 -->
<button class="next-button" onclick="window.location.href='modulAndroid2.php'">Lanjut ke Modul 2</button>

</body>
</body>
</html>
