<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3: Belajar Fundamental Aplikasi Android</title>
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
            color: #0056b3;
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
            outline: 2px solid #D3D3D3;
            outline-offset: -2px;
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
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Daftar Modul</h2>
        <ul>
            <li><a href="#poin1">1. Apa Itu Aplikasi Android?</a></li>
            <li><a href="#poin2">2. Konsep Dasar Pengembangan Android</a></li>
            <li><a href="#poin3">3. Struktur Proyek Aplikasi Android</a></li>
            <li><a href="#poin4">4. AndroidManifest.xml</a></li>
            <li><a href="#poin5">5. Pemilihan Bahasa Pemrograman</a></li>
            <li><a href="#poin6">6. Pengujian Aplikasi</a></li>
            <li><a href="#poin7">7. Optimisasi Aplikasi</a></li>
            <li><a href="#penutupan">8.Penutup</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <a href="../index.php">Home</a>
        <span>Modul 3: Belajar Fundamental Aplikasi Android</span>
    </div>

    <!-- Kontainer Utama -->
    <div class="container">
        <h1>Modul 3: Fundamental Aplikasi Android</h1>
        <img src="https://bairesdev.mo.cloudinary.net/blog/2024/04/how-to-become-an-android-developer.jpg?tx=w_1920,q_auto" alt="Gambar Pengantar Kotlin" width="1300" height="600" style="margin-bottom: 20px; margin-left: 5px; margin-right: 20px;">

        <p>
            Android adalah salah satu sistem operasi paling populer di dunia, yang digunakan pada berbagai perangkat seperti
            smartphone, tablet, dan perangkat berbasis IoT. Untuk menjadi pengembang yang sukses, pemahaman tentang dasar-dasar
            pengembangan aplikasi Android adalah hal yang penting.
        </p>
        <div class="step" id="poin1">
        <h2>1. Apa Itu Aplikasi Android?</h2>
        <p>
            Aplikasi Android adalah perangkat lunak yang berjalan pada sistem operasi Android. Pengembang biasanya menggunakan
            bahasa pemrograman seperti Java atau Kotlin dengan bantuan lingkungan pengembangan seperti Android Studio.
        </p>
        </div>

        <h3>Mengapa Harus Belajar Android?</h3>
        <ul>
            <li><b>Popularitas yang Luas:</b> Android adalah OS yang paling banyak digunakan di dunia.</li>
            <li><b>Peluang Karier:</b> Banyak perusahaan membutuhkan pengembang aplikasi Android.</li>
            <li><b>Inovasi Teknologi:</b> Anda bisa menciptakan berbagai solusi inovatif melalui aplikasi Android.</li>
        </ul>
        <div class="step" id="poin2">
        <h2>2. Konsep Dasar Pengembangan Android </h2>
        </div>
        <h3>2.1 Aktivitas (Activity)</h3>
        <p>
            Aktivitas adalah komponen yang merepresentasikan layar dalam aplikasi Android Anda. Setiap aktivitas adalah antarmuka
            pengguna yang berbeda dalam aplikasi Anda.
        </p>
        <pre><code>public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}</code></pre>

        <h3>2.2 Layanan (Service)</h3>
        <p>
            Layanan memungkinkan Anda menjalankan tugas di latar belakang tanpa melibatkan antarmuka pengguna, seperti:
        </p>
        <ul>
            <li>Mengunduh file besar dalam latar belakang.</li>
            <li>Memutar musik atau video sambil berjalan di latar belakang.</li>
        </ul>

        <h3>2.3 Fragment</h3>
        <p>
            Fragment memungkinkan Anda membuat tampilan fleksibel yang dapat digunakan kembali tanpa perlu memuat aktivitas baru.
        </p>

        <h3>2.4 Intent</h3>
        <p>
            Intent adalah mekanisme komunikasi antar aktivitas dalam aplikasi Android Anda.
        </p>
        <pre><code>Intent intent = new Intent(this, SecondActivity.class);
startActivity(intent);</code></pre>

        <h3>2.5 Tata Letak (Layouts)</h3>
        <p>
            Tata letak adalah elemen penting dalam membangun antarmuka pengguna yang memudahkan interaksi pengguna dengan
            aplikasi.
        </p>

        <h4>Jenis Layout yang Umum Digunakan</h4>
        <ul>
            <li><b>LinearLayout:</b> Tata letak elemen secara vertikal atau horizontal.</li>
            <li><b>RelativeLayout:</b> Tata letak elemen dengan hubungan relatif satu sama lain.</li>
            <li><b>ConstraintLayout:</b> Layout yang fleksibel dan hemat sumber daya.</li>
        </ul>
        <div class="step" id="poin3">
    <h2>3. Struktur Proyek Aplikasi Android</h2>
    <p>
        Struktur proyek Android adalah kerangka penyusunan file dan folder dalam sebuah proyek Android. Ini membantu pengembang mengorganisir sumber daya, kode, dan aset dengan rapi untuk memudahkan pengembangan dan pemeliharaan aplikasi.
    </p>
    
    <h3>3.1 Komponen Utama dalam Struktur Proyek</h3>
    <ul>
        <li><b>app/:</b> Berisi kode sumber utama, file konfigurasi, dan aset aplikasi.</li>
        <li><b>res/:</b> Menyimpan sumber daya seperti gambar, string, tata letak, dan lainnya.</li>
        <li><b>AndroidManifest.xml:</b> File konfigurasi penting yang mendefinisikan izin, aktivitas, dan komponen aplikasi.</li>
        <li><b>gradle/:</b> Berisi file konfigurasi untuk membangun proyek dengan Gradle.</li>
    </ul>
    
    <h3>3.2 Contoh Struktur Direktori</h3>
    <pre><code>
app/
  ├── src/
  │   ├── main/
  │   │   ├── java/
  │   │   │   └── com.example.myapp/
  │   │   │       └── MainActivity.java
  │   │   ├── res/
  │   │   │   ├── layout/
  │   │   │   │   └── activity_main.xml
  │   │   │   └── drawable/
  │   │   │       └── icon.png
  │   │   └── AndroidManifest.xml
  └── build.gradle
    </code></pre>
    
    <p>
        Penjelasan struktur:
        <ul>
            <li><b>src/main/java/:</b> Tempat kode sumber Java/Kotlin utama disimpan.</li>
            <li><b>src/main/res/:</b> Tempat penyimpanan tata letak, gambar, dan sumber daya lain.</li>
            <li><b>gradle/:</b> Mengontrol manajemen dependensi dan pengaturan proyek Android.</li>
        </ul>
    </p>
</div>
        <div class="step" id="poin4">
        <h2>4. AndroidManifest.xml</h2>
        <p>File AndroidManifest.xml adalah file konfigurasi penting dalam aplikasi Android yang mendefinisikan berbagai komponen aplikasi dan izin yang diperlukan.</p>
        <pre><code>
&lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.example.myfirstapp"&gt;

    &lt;application
        android:allowBackup="true"
        android:icon="@mipmap/ic_launcher"
        android:label="@string/app_name"
        android:theme="@style/Theme.MyFirstApp"&gt;

        &lt;activity android:name=".MainActivity"&gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.MAIN" /&gt;
                &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;

    &lt;/application&gt;

&lt;/manifest&gt;
</code></pre>
        <p>Penjelasan kode:</p>
        <ul>
            <li><b>package:</b> Menyebutkan nama paket aplikasi.</li>
            <li><b>application:</b> Bagian ini mengonfigurasi aplikasi, seperti ikon dan tema.</li>
            <li><b>activity:</b> Mendefinisikan aktivitas utama yang diluncurkan saat aplikasi dijalankan.</li>
            <li><b>intent-filter:</b> Menyatakan bahwa aktivitas ini adalah titik masuk aplikasi yang diluncurkan pertama kali.</li>
        </ul>
        <div>
        <div class="step" id="poin5">
        <!-- Bagian 5: Pemilihan Bahasa Pemrograman -->
        <h2>5. Pemilihan Bahasa Pemrograman</h2>
        <p>Pemilihan bahasa pemrograman adalah langkah penting dalam pengembangan aplikasi Android. Dua bahasa utama yang digunakan adalah Java dan Kotlin.</p>
        
        <h3>5.1 Java vs Kotlin</h3>
        <ul>
            <li><b>Java:</b> Bahasa pemrograman yang lebih tua namun masih banyak digunakan untuk pengembangan aplikasi Android.</li>
            <li><b>Kotlin:</b> Bahasa pemrograman yang lebih baru dan direkomendasikan oleh Google. Kotlin memiliki sintaksis yang lebih ringkas dan lebih aman dibandingkan Java.</li>
        </ul>

        <h3>5.2 Kelebihan Kotlin</h3>
        <ul>
            <li><b>Lebih Ringkas:</b> Sintaks Kotlin lebih sederhana dan lebih sedikit kode berulang.</li>
            <li><b>Interoperabilitas dengan Java:</b> Kotlin dapat bekerja dengan kode Java yang sudah ada tanpa masalah.</li>
            <li><b>Keamanan NullPointerException:</b> Kotlin mengurangi risiko kesalahan null pointer dengan sistem tipe yang lebih aman.</li>
        </ul>

        <h3>5.3 Kelebihan Java</h3>
        <ul>
            <li><b>Komunitas Besar:</b> Java memiliki banyak dokumentasi dan forum, memudahkan pemecahan masalah.</li>
            <li><b>Stabilitas:</b> Java sangat stabil dan digunakan secara luas di berbagai jenis aplikasi, tidak hanya Android.</li>
        </ul>

        <p>Keduanya memiliki kelebihan masing-masing, namun Kotlin sekarang lebih disarankan karena memiliki fitur yang lebih modern dan efisien.</p>
        </div>
        <!-- Bagian 6: Optimisasi Aplikasi -->
        <div class="step" id="poin6">
        <h2>6. Pemilihan Bahasa Pemrograman</h2>
        <p>
            Dalam pengembangan aplikasi Android, pemilihan bahasa pemrograman adalah salah satu aspek penting yang harus
            dipertimbangkan. Saat ini, dua bahasa pemrograman yang paling sering digunakan adalah Java dan Kotlin.
        </p>
        
        <h3>6.1 Java vs Kotlin</h3>
        <ul>
            <li><b>Java:</b> Bahasa pemrograman yang telah lama digunakan untuk pengembangan aplikasi Android dan masih banyak
                digunakan hingga sekarang.</li>
            <li><b>Kotlin:</b> Bahasa pemrograman modern yang direkomendasikan oleh Google dan memiliki sintaks yang lebih
                sederhana dan ramah bagi pengembang.</li>
        </ul>

        <h3>6.2 Perbandingan Fitur</h3>
        <ul>
            <li><b>Java:</b> Memiliki komunitas yang besar dan banyak sumber daya pendukung.</li>
            <li><b>Kotlin:</b> Mengurangi boilerplate code dan memiliki fitur modern yang membuat pengembangan lebih cepat.</li>
        </ul>
        </div>
        <!-- Bagian 7: Optimisasi Aplikasi -->
        <div class="step" id="poin7">
        <h2>7. Optimisasi Aplikasi</h2>
        <p>
            Optimisasi bertujuan agar aplikasi berjalan dengan cepat dan efisien sambil menghemat sumber daya perangkat seperti
            CPU dan RAM.
        </p>

        <h3>7.1 Teknik-Teknik Optimisasi</h3>
        <ul>
            <li><b>Penggunaan Cache:</b> Menyimpan data yang sering digunakan di cache untuk mengurangi pemanggilan dari server
                atau database.</li>
            <li><b>Pengurangan Penggunaan Memori:</b> Optimalkan kode agar tidak membebani memori yang berlebih.</li>
            <li><b>Penggunaan Thread yang Tepat:</b> Jalankan tugas latar belakang dengan `Thread` atau `AsyncTask` agar tidak
                mengganggu UI utama.</li>
        </ul>

        <h3>7.2 Contoh Praktis Optimisasi</h3>
        <p>
            Contoh penerapan optimisasi adalah dengan memuat data secara lazy loading atau hanya ketika dibutuhkan,
            mengoptimalkan kode database, serta melakukan profiling aplikasi untuk melihat bagian mana yang perlu ditingkatkan.
        </p>
        </div>
        <div class="step" id="penutupan">
        <h2>Penutupan</h2>
    <p>
        Demikianlah materi Modul 3 tentang "Fundamental Aplikasi Android" ini disusun sebagai panduan awal dalam memahami dasar-dasar pengembangan aplikasi Android. Kami berharap materi ini dapat memberikan pemahaman yang jelas dan bermanfaat bagi Anda yang sedang belajar dan mengeksplorasi dunia pengembangan aplikasi.
    </p>
    <p>
        Teruslah berlatih dan mengembangkan kreativitas Anda dalam membangun aplikasi Android yang inovatif dan berguna. Jika Anda memiliki pertanyaan atau masukan terkait materi ini, jangan ragu untuk berdiskusi dan menggali lebih banyak informasi melalui berbagai sumber yang tersedia.
    </p>
    <p style="margin-bottom: 60px;">
        Selamat belajar dan semoga sukses selalu dalam perjalanan Anda menjadi pengembang aplikasi Android yang handal!
    </p>
        </div>
    </div>

    <div class="bottom-bar">
        <span>Modul 3: Belajar Fundamental Aplikasi Android</span>
        </div>
    <!-- Tombol Navigasi -->
    <button class="back-button" onclick="window.location.href='modul2.php'">Kembali ke Modul 2</button>
    <button class="next-button" onclick="window.location.href='../index.php">Kembali ke Halaman Utama</button>

</body>
</html>
