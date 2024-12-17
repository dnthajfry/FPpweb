<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3: Fundamental Aplikasi Android</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        /* Umum */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 50px;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            padding: 20px;
            box-shadow: 2px 0 4px rgba(0, 0, 0, 0.1);
        }

        /* Kontainer Utama */
        .container {
            margin-left: 270px;
            padding: 20px;
            max-width: 1200px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            line-height: 1.8;
        }

        /* Tombol Navigasi */
        .navigation-btn {
            font-weight: bold;
            cursor: pointer;
            color: #fff;
            background: #007BFF;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .navigation-btn:hover {
            background-color: #0056b3;
        }

        pre {
            background: #e9ecef;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <!-- Sidebar Menu -->
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="modul1.php">Modul 1: Pengantar Kotlin</a></li>
            <li><a href="modul2.php">Modul 2: Membuat Aplikasi Android</a></li>
            <li><a href="modul3.php">Modul 3: Fundamental Aplikasi Android</a></li>
            <li><a href="modul4.php">Modul 4: Struktur Pengembangan Andorid App</a></li>
        </ul>
    </div>

    <!-- Kontainer Utama -->
    <div class="container">
        <h1>Modul 4: Struktur Pengembangan Andorid App</h1>

        <p>Android adalah salah satu sistem operasi paling populer di dunia, yang digunakan pada berbagai perangkat seperti smartphone, tablet, dan perangkat berbasis IoT. Untuk menjadi pengembang yang sukses, pemahaman tentang dasar-dasar pengembangan aplikasi Android adalah hal yang penting.</p>

        <h2>1. Apa Itu Aplikasi Android?</h2>
        <p>Aplikasi Android adalah perangkat lunak yang berjalan pada sistem operasi Android. Pengembang biasanya menggunakan bahasa pemrograman seperti Java atau Kotlin dengan bantuan lingkungan pengembangan seperti Android Studio.</p>

        <h3>Mengapa Harus Belajar Android?</h3>
        <ul>
            <li><b>Popularitas yang Luas:</b> Android adalah OS yang paling banyak digunakan di dunia.</li>
            <li><b>Peluang Karier:</b> Banyak perusahaan membutuhkan pengembang aplikasi Android.</li>
            <li><b>Inovasi Teknologi:</b> Anda bisa menciptakan berbagai solusi inovatif melalui aplikasi Android.</li>
        </ul>

        <h2>2. Konsep Dasar Pengembangan Android</h2>
        <h4>2.1 Aktivitas (Activity)</h4>
        <p>Aktivitas adalah komponen yang merepresentasikan layar dalam aplikasi Android Anda. Setiap aktivitas adalah antarmuka pengguna yang berbeda dalam aplikasi Anda.</p>
        <pre><code>public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}</code></pre>

        <h4>2.2 Layanan (Service)</h4>
        <p>Layanan menjalankan tugas di latar belakang tanpa memerlukan interaksi langsung dengan antarmuka pengguna.</p>

        <h4>2.3 Fragment</h4>
        <p>Fragment memungkinkan Anda membangun tampilan yang fleksibel dan modular dalam aplikasi Android.</p>

        <h4>2.4 Intent</h4>
        <p>Intent adalah mekanisme komunikasi antar aktivitas dalam aplikasi Android.</p>
        <pre><code>Intent intent = new Intent(this, SecondActivity.class);
startActivity(intent);</code></pre>

        <h2>3. Struktur Proyek Aplikasi Android</h2>
        <p>Struktur proyek Android membantu mengatur file dan komponen yang digunakan dalam pengembangan aplikasi.</p>
        <pre><code>MyFirstApp/
│
├── app/
│   ├── src/
│   │   ├── main/
│   │   │   ├── java/
│   │   │   │   └── com.example.myfirstapp/
│   │   │   │       └── MainActivity.java
│   │   │   ├── res/
│   │   │   │   ├── layout/
│   │   │   │   │   └── activity_main.xml
│   │   │   │   └── drawable/
│   │   │   │       └── icon.png
│   │   │   └── AndroidManifest.xml
│   └── build.gradle
</code></pre>
    </div>

    <!-- Navigasi Tombol -->
    <button class="navigation-btn" onclick="window.location.href='modul2.php'">Kembali</button>
    <button class="navigation-btn" onclick="window.location.href='modul4.php'">Lanjut</button>
</body>

</html>
