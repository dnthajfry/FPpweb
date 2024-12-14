
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Kelulusan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header class="bg-teal-500 text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">OjoLaliSinau</h1>
        <nav class="flex gap-4">
            <a href="../index.php" class="hover:underline">Home</a>
            <a href="../learning.php" class="hover:underline">Learning Path</a>
            <a href="../Ujian/ujian.php" class="hover:underline">Sertifikasi</a>
        </nav>
        <div>
            <a href="#" class="mr-4">Selamat Datang</a>
            <a href="form-masuk.php" class="font-bold">Masuk</a>
        </div>
    </header>

    <section class="max-w-5xl mx-auto my-10 p-4 bg-white rounded-lg shadow-md">
        <div class="text-center">
            <img src="Sertifikat.png" alt="Sertifikat" class="mx-auto mb-6 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-gray-800 mb-5">
                Selamat anda lulus dan berhasil mendapat sertifikat
            </h2>
            <a href="generate_sertif.php" class="bg-teal-500 text-white px-4 py-2 rounded-lg font-bold">
                Lihat Sertifikat
            </a>

            <p class="text-gray-600 text-lg leading-relaxed">
                OjOjoLaliSinau adalah platform edukasi Coding yang memungkinkan pengajar membuat modul pembelajaran Coding online, menyuguhkan materi, kuis, dan ujian; memantau nilai; dan memberikan feedback kepada siswa dalam satu tempat.
            </p>

           
            <div class="flex justify-center gap-3 mt-4">
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Android</span>
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Mobile</span>
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Coding</span>
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Kotlin</span>
            </div>

            <div class="flex items-center justify-center mt-6">
                <img src="https://i.pravatar.cc/40" alt="Lina" class="w-10 h-10 rounded-full mr-2">
                <div class="text-sm">
                    <p class="text-gray-800 font-bold">Augista Denta Fadhli</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto p-4">
        <h3 class="text-xl font-bold mb-4">Rekomendasi Modul Belajar</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-4 flex">
                <img src="https://via.placeholder.com/150" alt="Modul 1" class="w-32 h-32 rounded-lg mr-4">
                <div>
                    <h4 class="text-lg font-semibold mb-2">Class Struktur Data</h4>
                    <p class="text-sm text-gray-600 mb-2">Pengajar pilihan dari RPL 2023</p>
                    <p class="text-sm text-gray-500">with Mas Tata dan Mas Aldin</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-4 flex">
                <img src="https://via.placeholder.com/150" alt="Modul 2" class="w-32 h-32 rounded-lg mr-4">
                <div>
                <h4 class="text-lg font-semibold mb-2">Class Basis Data</h4>
                    <p class="text-sm text-gray-600 mb-2">Pengajar pilihan dari RPL 2023</p>
                    <p class="text-sm text-gray-500">with Mas Tata dan Mas Ammar</p>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-2xl font-bold mb-4">OjoLaliSinau</h3>
            <p class="text-gray-400 mb-4">Virtual Class dengan Zoom</p>
            <div>
                <input type="email" placeholder="Your Email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-700">
                <button class="bg-teal-500 px-4 py-2 rounded-r-lg text-white font-bold">Subscribe</button>
            </div>
            <p class="text-gray-500 text-sm mt-4">&copy; 2024 OjoLaliSinau, All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
