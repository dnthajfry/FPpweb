<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2: Belajar Membuat Aplikasi Android untuk Pemula</title>
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

        /* Navbar */
        .navbar {
            background-color: #007BFF;
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

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 45px;
            right: 0;
            width: 250px;
            height: 25vh;
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
            margin: 0px 0px;
            padding: 20px;
            margin-top: 5px;
        }
        .container h1 {
            color: #007BFF;
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

        /* Bottom Bar */
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #007BFF;
            padding: 15px 0;
            display: flex;
            font-weight: bold;
            justify-content: center;
            align-items: center;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
            color: #fff;
            font-size: 16px;
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
            background-color: #007BFF;
            color: #fff;
            padding: 12px 25px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .next-button {
            right: 20px;
            background-color: #007BFF;
            color: #fff;
            padding: 12px 25px;
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
        <li><a href="#langkah1">Langkah 1: Persiapkan Lingkungan Kerja</a></li>
        <li><a href="#langkah2">Langkah 2: Buat Proyek Baru</a></li>
        <li><a href="#langkah3">Langkah 3: Mengenal Struktur Proyek</a></li>
        <li><a href="#langkah4">Langkah 4: Buat Layout Tampilan</a></li>
        <li><a href="#langkah5">Langkah 5: Tambahkan Logika di MainActivity</a></li>
        <li><a href="#langkah6">Langkah 6: Jalankan Aplikasi</a></li>
        <li><a href="#langkah7">Langkah 7: Selamat! Anda Selesai</a></li>
    </ul>
</div>

<!-- Navbar -->
<div class="navbar">
    <a href="../index.php">Home</a>
    <span>Modul 2: Belajar Membuat Aplikasi Android untuk Pemula</span>
</div>

<!-- Tombol Navigasi -->
<button class="back-button" onclick="window.location.href='index.php'">Kembali ke Halaman Utama</button>
<button class="next-button" onclick="window.location.href='modul3.php'">Lanjut ke Modul 3</button>

<!-- Bottom Bar -->
<div class="bottom-bar">
    <span>Modul 2: Membuat Aplikasi Android untuk Pemula</span>
</div>

</body>
</html>

        
    </style>
</head>
<body>
    <div class="container">
        <h1>Belajar Membuat Aplikasi Android untuk Pemula</h1>
        <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01hmb7trzrsyff2pf48b1hgfcw.png" alt="Gambar Pengantar Kotlin" width="1300" height="600" style="margin-bottom: 20px; margin-left: 5px; margin-right: 20px;">
        <p>Selamat datang di modul kedua! Dalam modul ini, Anda akan belajar bagaimana cara membuat aplikasi Android sederhana. Dengan mengikuti langkah-langkah berikut, Anda akan memahami dasar-dasar dalam pengembangan aplikasi Android.</p>

        <div class="step" id="langkah1">
            <h2>Langkah 1: Persiapkan Lingkungan Kerja</h2>
            <p>Untuk memulai, pastikan Anda telah menginstal Android Studio, yang merupakan IDE resmi untuk pengembangan aplikasi Android. Anda dapat mengunduh Android Studio dari situs resmi Google dan mengikuti panduan instalasi.</p>
        </div>

        <div class="step" id="langkah1">
            <h2>Langkah 2: Buat Proyek Baru</h2>
            <p>1. Buka Android Studio dan klik "Start a new Android Studio project".</p>
            <p>2. Pilih "Empty Activity" sebagai template proyek.</p>
            <p>3. Berikan nama proyek, misalnya "MyFirstApp", dan klik "Finish".</p>
        </div>

        <div class="step" id="langkah3">
            <h2>Langkah 3: Mengenal Struktur Proyek</h2>
            <p>Pada Android Studio, Anda akan melihat beberapa folder seperti "app", "res", dan "manifest". Folder ini adalah struktur dasar proyek Android. Pastikan Anda memahami fungsinya:</p>
            <ul>
                <li><strong>Java:</strong> Tempat file kode Java atau Kotlin.</li>
                <li><strong>Res:</strong> Tempat file sumber daya seperti layout, gambar, dan string.</li>
                <li><strong>Manifest:</strong> File konfigurasi aplikasi.</li>
            </ul>
        </div>

        <div class="step" id="langkah4">
            <h2>Langkah 4: Buat Layout Tampilan</h2>
            <p>1. Buka folder <strong>res/layout</strong> dan pilih file <strong>activity_main.xml</strong>.</p>
            <p>2. Tambahkan elemen UI seperti tombol atau teks menggunakan XML. Contoh:</p>
            <pre>
&lt;TextView
    android:layout_width="wrap_content"
    android:layout_height="wrap_content"
    android:text="Hello, World!"
    android:layout_gravity="center" /&gt;
            </pre>
        </div>

        <div class="step">
            <h2>Langkah 5: Tambahkan Logika di MainActivity</h2>
            <p>1. Buka file <strong>MainActivity.java</strong> atau <strong>MainActivity.kt</strong>.</p>
            <p>2. Tambahkan logika untuk interaksi pengguna, misalnya saat tombol ditekan. Contoh:</p>
            <pre>
Button button = findViewById(R.id.myButton);
button.setOnClickListener(new View.OnClickListener() {
    @Override
    public void onClick(View v) {
        Toast.makeText(getApplicationContext(), "Button clicked!", Toast.LENGTH_SHORT).show();
    }
});
            </pre>
        </div>

        <div class="step" id="langkah6">
            <h2>Langkah 6: Jalankan Aplikasi</h2>
            <p>1. Hubungkan perangkat Android Anda atau gunakan emulator bawaan Android Studio.</p>
            <p>2. Klik tombol "Run" di Android Studio untuk menjalankan aplikasi Anda.</p>
        </div>
        <div class="step" id="langkah7">
            
        <p style="margin-bottom: 60px;">
    Selamat! Anda telah menyelesaikan modul ini dan berhasil membuat aplikasi Android pertama Anda. Pastikan untuk terus mencoba dan mengembangkan kemampuan Anda dengan berlatih lebih banyak.
</p>
        </div>

     <!-- Bottom Bar -->
        <div class="bottom-bar">
        <span>Modul 2: Membuat Aplikasi Android untuk Pemula</span>
        </div>
    </div>
    <!-- Button Kembali ke Halaman Utama -->
    <button class="back-button" onclick="window.location.href='modul1.php'">Kembali ke Modul1</button>

<!-- Button Lanjut ke Modul 2 -->
<button class="next-button" onclick="window.location.href='modul3.php'">Lanjut ke Modul 3</button>

</body>
</body>
</html>
