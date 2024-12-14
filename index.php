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
            <a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
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
                        <h3 class="card-title">Platform Diskusi</h3>
                        <p class="card-text">Berdiskusi langsung dengan mentor dan rekan.</p>
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
                <img src="image/testimonial.jpg" alt="Testimonial Image" class="rounded-circle me-4" style="width: 120px; height: 120px; object-fit: cover;">
                <div class="bg-white p-4 shadow-sm rounded">
                    <p class="mb-1">"Platform ini sangat membantu saya memahami konsep coding dengan cara yang mudah dipahami."</p>
                    <h4 class="mb-0">Gloria Rose</h4>
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