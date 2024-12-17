<?php
session_start();
if (isset($_SESSION['user_name'])) {
    $nama = $_SESSION['user_name'];
} else {
    $nama = "Tamu";
}

function displayTestimonial($testimonial) {
    if (!$testimonial) {
        return '<p>Belum ada testimoni saat ini.</p>';
    }

    $name = htmlspecialchars($testimonial['nama']);
    $message = htmlspecialchars($testimonial['pesan']);
    
    return <<<HTML
    <div class="d-flex">
        <img src="https://i.pravatar.cc/80" alt="User Image" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
        <div>
            <p class="mb-1"><i>"$message"</i></p>
            <h6 class="mb-0">$name</h6>
        </div>
    </div>
    HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ojo Lali Sinau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #49BBBD;">
    <div class="container py-3">
        <a class="navbar-brand me-3" href="index.php">Ojo Lali Sinau</a>
        <div class="navbar-nav">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="learning.php">Learning Path</a>
            <?php if (isset($_SESSION['score'])) : ?>
            <a class="nav-link" href="Certif/sertif.php">Sertifikat</a>
            <?php else : ?>
            <a class="nav-link" href="Certif/belumsertif.php">Sertifikat</a>
            <?php endif; ?>
        </div>
        <div class="ms-auto d-flex">
            <?php if (isset($_SESSION['user_id'])): ?>
                <span class="navbar-text me-2">Selamat Datang, <strong><?php echo htmlspecialchars($nama); ?></strong></span>
                <a class="btn btn-outline-light" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="btn btn-outline-light me-2" href="form-masuk.php">Masuk</a>
                <a class="btn btn-outline-light" href="form-daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</nav>


    <div class="container-fluid py-5" 
    style="background-image: url('image/header-pic.png'); 
           background-size: cover; 
           background-position: center; 
           width: 100vw; 
           height: 120vh;
           overflow: hidden;">        
           <div class="row">
            <div class="col-md-6">
                <h1 class="display-4 px-5 text-primary">Selamat Datang di Platform Belajar Kami</h1>
                <p class="lead px-5">Jelajahi materi terbaik untuk meningkatkan keterampilan Anda dan raih kesuksesan bersama kami.</p>
                <button class="btn btn-success btn-lg mx-5">Gabung dengan kami</button>
            </div>
            <div class="col-md-6 text-center">
                <img src="image/gambar1.jpg" alt="Hero Image" class="img-fluid rounded" style="max-width: 100%; max-height: 60vh;">
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Keberhasilan Kami</h2>
            <p class="text-muted mb-5">Kami telah membantu ribuan siswa mencapai tujuan mereka.</p>
            <div class="row g-4">
                <div class="col-md-3">
                    <h3 class="text-primary">15K+</h3>
                    <p>Students</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">75%</h3>
                    <p>Total Success</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">35</h3>
                    <p>Main Questions</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-primary">26</h3>
                    <p>Chief Experts</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="image/icon1.png" alt="Feature 1" class="card-img-top mx-auto mt-4" style="width: 80px;">
                    <div class="card-body">
                        <h3 class="card-title">Modul Praktis</h3>
                        <p class="card-text">Pelajari coding dengan cara menyenangkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="image/icon2.png" alt="Feature 2" class="card-img-top mx-auto mt-4" style="width: 80px;">
                    <div class="card-body">
                        <h3 class="card-title">Sertifikasi</h3>
                        <p class="card-text">Dapatkan sertifikasi resmi setelah menyelesaikan kelas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="image/icon3.png" alt="Feature 3" class="card-img-top mx-auto mt-4" style="width: 80px;">
                    <div class="card-body">
                        <h3 class="card-title">Proggraming Case test</h3>
                        <p class="card-text">Menjawab soal pilihan ganda tentang pemrograman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container text-center">
            <h2 class="text-primary">Testimonial</h2>
            <p class="lead mb-5">"Ojo Lali Sinau telah membantu lebih dari 100 ribu siswa mencapai tujuan mereka."</p>
            <div class="d-flex justify-content-center align-items-center">
                <img src="https://i.pravatar.cc/40" alt="Testimonial Image" class="rounded-circle me-4" style="width: 120px; height: 120px; object-fit: cover;">
                <div class="bg-white p-4 shadow-sm rounded">
                    <p class="mb-1">"Platform ini sangat membantu saya memahami konsep coding dengan cara yang mudah dipahami."</p>
                    <h4 class="mb-0">Xandra</h4>
                </div>
            </div>
        </div>
    </div>

   
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="mb-4">Assessments, <span class="text-success">Quizzes</span>, Tests</h2>
            <p class="text-muted">Kelas menyediakan perangkat untuk membantu Anda mengelola kelas dengan cepat seperti daftar kelas, kehadiran, dan lainnya. Dengan alat daftar, Anda dapat merekam hasil tes dan kuis dalam satu waktu.</p>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-3">
                <div class="d-flex align-items-center">
                    <img src="image/icon3.png" alt="Quiz" class="rounded" style="width: 120px; height: 80px; object-fit: cover;">
                    <div class="ms-3">
                        <p class="mb-1">Benar atau Salah?</p>
                        <span class="text-success">Jawaban mu benar selamat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <h2 class="mb-3">Modul proggramming pilihan</h2>
                <h3 class="text-primary mb-4">Tools for Educators</h3>
                <p class="text-muted">Modul Pemrograman dengan bahasa yang mudah dipahami dan contoh code beserta penjelasan teori dan kodenya</p>
            </div>
            <div class="col-md-7">
                <div class="card border-0 shadow-sm p-4">
                <div class="d-flex align-items-center">
                    <img src="image/icon1.png" alt="Quiz" class="rounded" style="width: 120px; height: 80px; object-fit: cover;">
                    <div class="ms-3">
                        <p class="mb-1">Temukan Modul Coding Pilihan terbaik mu</p>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="image/icon2.png" alt="User" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="ms-3">
                        <h5 class="mb-0">Sertifikasi</h5>
                        <small class="text-muted">2 participants</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
    <h2>Sertifikasi <span class="text-primary">Online</span></h2>
    <p class="text-muted">Anda bisa mendapat sertifikasi coding pertama anda</p>
    <?php if (isset($_SESSION['score'])) : ?>
        <a href="Certif/sertif.php" class="btn btn-outline-primary hover:underline">Lihat Sertifikat</a>
    <?php else : ?>
        <a href="Certif/belumsertif.php" class="btn btn-outline-primary hover:underline">Lihat Sertifikat</a>
    <?php endif; ?>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Testimoni Lainnya</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="lead">Ojo Lali Sinau telah mendapat lebih dari 100 ribu ulasan positif dari pengguna kami di seluruh dunia.</p>
                <a href="testimonial.php" class="btn btn-outline-primary rounded-pill">
                    Tulis pengalaman Anda <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4">
                <?php echo displayTestimonial($topTestimonial); ?>
            </div>
            </div>
        </div>
    </div>
</div>



    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>© 2024 Ojo Lali Sinau. Semua Hak Dilindungi. <a href="#" class="text-primary">Kebijakan Privasi</a> | <a href="#" class="text-primary">Syarat dan Ketentuan</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>