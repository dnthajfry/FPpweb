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
        .step {
            margin-bottom: 20px;
        }
        .step h2 {
            font-size: 20px;
            color: #333;
        }
        .step p {
            margin: 5px 0;
        }
</head>
<body>
    <div class="container">
        <h1>Modul 2: Belajar Membuat Aplikasi Android untuk Pemula</h1>

        <p>Selamat datang di modul kedua! Dalam modul ini, Anda akan belajar bagaimana cara membuat aplikasi Android sederhana. Dengan mengikuti langkah-langkah berikut, Anda akan memahami dasar-dasar dalam pengembangan aplikasi Android.</p>

        <div class="step">
            <h2>Langkah 1: Persiapkan Lingkungan Kerja</h2>
            <p>Untuk memulai, pastikan Anda telah menginstal Android Studio, yang merupakan IDE resmi untuk pengembangan aplikasi Android. Anda dapat mengunduh Android Studio dari situs resmi Google dan mengikuti panduan instalasi.</p>
        </div>

        <div class="step">
            <h2>Langkah 2: Buat Proyek Baru</h2>
            <p>1. Buka Android Studio dan klik "Start a new Android Studio project".</p>
            <p>2. Pilih "Empty Activity" sebagai template proyek.</p>
            <p>3. Berikan nama proyek, misalnya "MyFirstApp", dan klik "Finish".</p>
        </div>

        <div class="step">
            <h2>Langkah 3: Mengenal Struktur Proyek</h2>
            <p>Pada Android Studio, Anda akan melihat beberapa folder seperti "app", "res", dan "manifest". Folder ini adalah struktur dasar proyek Android. Pastikan Anda memahami fungsinya:</p>
            <ul>
                <li><strong>Java:</strong> Tempat file kode Java atau Kotlin.</li>
                <li><strong>Res:</strong> Tempat file sumber daya seperti layout, gambar, dan string.</li>
                <li><strong>Manifest:</strong> File konfigurasi aplikasi.</li>
            </ul>
        </div>

        <div class="step">
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

        <div class="step">
            <h2>Langkah 6: Jalankan Aplikasi</h2>
            <p>1. Hubungkan perangkat Android Anda atau gunakan emulator bawaan Android Studio.</p>
            <p>2. Klik tombol "Run" di Android Studio untuk menjalankan aplikasi Anda.</p>
        </div>

        <p>Selamat! Anda telah menyelesaikan modul ini dan berhasil membuat aplikasi Android pertama Anda. Pastikan untuk terus mencoba dan mengembangkan kemampuan Anda dengan berlatih lebih banyak.</p>

    <div class="buttons">
        <button class="next-button" onclick="window.location.href='modul2.php'">Lanjut ke Modul 2</button>
        <button class="back-button" onclick="window.location.href='index.php'">Kembali ke Halaman Utama</button>
    </div>
</body>
</html>
    