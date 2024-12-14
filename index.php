<?php
session_start();

// Get user name from session
if (isset($_SESSION['user_name'])) {
    $nama = $_SESSION['user_name'];
} else {
    $nama = "Tamu";
}

// Fetch materials from database
//$sql = "SELECT * FROM materials";
//$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ojo Lali Sinau</title>
<<<<<<< modulnew
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
=======
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
        }

        .navbar .left,
        .navbar .right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        .navbar .btn {
            padding: 8px 12px;
            font-size: 14px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .navbar .btn:hover {
            background-color: #0056b3;
        }

        .navbar-right {
            font-size: 16px;
        }

        /* Body Styling */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
        }

        .left-content {
            flex: 1;
        }

        
        .right-content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Align top by default */
            align-items: center; /* Menengahkan elemen */
            gap: 20px;
        }

        .slogan {
            margin-bottom: 20px;
        }

        .slogan h1 {
            font-size: 36px;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .slogan p {
            font-size: 18px;
            color: #555;
        }

        .search-box {
            margin-top: 20px;
        }

        .search-box input {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 2px solid #0056b3;
            width: 80%;
        }

        .search-box button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-box button:hover {
            background-color: #0056b3;
        }

        .right-content img {
            width: 250px; /* Set the same width for both images */
            height: 350px; /* Set the same height for both images */
            object-fit: cover; /* Keep the aspect ratio of the image */
            border-radius: 10px; /* Optional: Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add shadow */
            flex-wrap: wrap;
        }

        .right-content img:first-child {
            margin-top: 50px; /* Lower the left image */
        }

        .buttons {
            display:flex ;
            margin-top: 600px;
        }

        .buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        .learning-path {
            background-color: #28a745; 
        }

        .learning-path:hover {
            background-color: #1e7e34;
        }

        .certification {
            background-color: #ffc107;  
        }

        .certification:hover {
            background-color: #e0a800;
        }

        /* Materi */
        .materi {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .materi .materi-item {
            background-color: #fff;
            padding: 20px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer; /* Tambahkan cursor pointer */
        }

        .materi .materi-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .materi .materi-item h2 {
            font-size: 18px;
            margin-top: 10px;
        }

        .materi .materi-item p {
            font-size: 14px;
            color: #666;
        }
        .materi-item:hover {
            transform: scale(1.03);
            background-color: #f0f0f0;
             cursor: pointer;
}
    </style>
>>>>>>> modul
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

<<<<<<< modulnew
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
=======
            <!-- Right Content -->
            <div class="right-content">
                <img src="image/gambar1.jpg" alt="Gambar 1">
                <img src="image/gambar2.jpg" alt="Gambar 2">
>>>>>>> modul
            </div>
        </div>
    </div>

<<<<<<< modulnew
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>© 2024 Ojo Lali Sinau. Semua Hak Dilindungi. <a href="#" class="text-primary">Kebijakan Privasi</a> | <a href="#" class="text-primary">Syarat dan Ketentuan</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
    <!-- Materi -->
    <div class="materi">
        <button class="materi-item" onclick="location.href='materi1.php'">
            <img src="https://via.placeholder.com/200x150" alt="Materi 1">
            <h2>Materi 1</h2>
            <p>Deskripsi materi 1</p>
        </button>
        <button class="materi-item" onclick="location.href='materi2.php'">
            <img src="https://via.placeholder.com/200x150" alt="Materi 2">
            <h2>Materi 2</h2>
            <p>Deskripsi materi 2</p>
        </button>
        <button class="materi-item" onclick="location.href='materi3.php'">
            <img src="https://via.placeholder.com/200x150" alt="Materi 3">
            <h2>Materi 3</h2>
            <p>Deskripsi materi 3</p>
        </button>
    </div>
</body>
</html>
>>>>>>> modul
