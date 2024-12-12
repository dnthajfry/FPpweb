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
</head>
<body>

    <div class="navbar">
        <div class="left">
            <a href="index.php">Ojo Lali Sinau</a>

            <a href="index.php">Home</a>
            <a href="learning.php" class="btn">Learning Path</a>
            <a href="sertifikasi.php" class="btn">Sertifikasi</a>
        </div>
        

        <div class="navbar-right">
        
        <?php if (isset($_SESSION['user_id'])): ?>
            Selamat Datang, <strong class="text-black"><?php echo htmlspecialchars($nama); ?></strong>
            <a href="logout.php" class="btn navbar-right">Logout</a>
        <?php else: ?>
            <a href="form-masuk.php" class="btn navbar-right">Masuk</a>
            <a href="form-daftar.php" class="btn navbar-right">Daftar</a>
        <?php endif; ?>    
    
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="left-content">
                <div class="slogan">
                    <h1>Selamat Datang di Platform Belajar Kami</h1>
                    <p>Jelajahi materi terbaik untuk meningkatkan keterampilan Anda dan raih kesuksesan bersama kami.</p>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Materi apa yang ingin dipelajari?" />
                    <button>Cari</button>
                </div>
            </div>

            <!-- Right Content -->
            <div class="right-content">
                <img src="image/gambar1.jpg" alt="Gambar 1">
                <img src="image/gambar2.jpg" alt="Gambar 2">
            </div>
        </div>
    </div>

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