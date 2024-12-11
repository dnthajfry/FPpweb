


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi</title>
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
            background-color: #add8e6; /* Light blue */
            padding: 10px 20px;
            color: white;
        }

        .navbar-left {
            display: flex;
            gap: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #007BFF;
        }

        /* Body Styling */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            display: flex;
            gap: 20px;
        }

        .left-content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .right-content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .right-content img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .right-content button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .right-content button:hover {
            background-color: #0056b3;
        }

        h1, h2, h3 {
            margin-bottom: 10px;
            color: #007BFF;
        }

        p {
            margin-bottom: 10px;
        }

        .user-info {
            margin-bottom: 20px;
        }

        .user-info h3 {
            margin-bottom: 5px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .skill-badge {
            background-color: #007BFF;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <a href="#">Nama Website</a>
            <a href="home.php">Home</a>
            <a href="learning.php">Learning Path</a>
            <a href="sertifikasi.php">Sertifikasi</a>
        </div>
        <div class="navbar-right">
            <span>Selamat Datang, <strong><?php echo htmlspecialchars($user['name']); ?></strong></span>
        </div>
    </div>

    <!-- Body -->
    <div class="container">
        <!-- Left Content -->
        <div class="left-content">
            <h2>Data Sertifikasi</h2>
            <div class="user-info">
                <h3>Nama:</h3>
                <p><?php echo htmlspecialchars($user['name']); ?></p>

                <h3>Mata Pelajaran:</h3>
                <p><?php echo htmlspecialchars($certification['course_name']); ?></p>

                <h3>Durasi:</h3>
                <p><?php echo htmlspecialchars($certification['duration']); ?> Jam</p>

                <h3>Nilai:</h3>
                <p><?php echo htmlspecialchars($certification['grade']); ?>%</p>
            </div>
            <h3>Skill yang Didapatkan:</h3>
            <div class="skills">
                <?php
                $skills = explode(',', $certification['skills']); // Asumsikan data skill dipisahkan dengan koma
                foreach ($skills as $skill) {
                    echo '<span class="skill-badge">' . htmlspecialchars($skill) . '</span>';
                }
                ?>
            </div>
        </div>

        <!-- Right Content -->
        <div class="right-content">
            <h2>Sertifikat</h2>
            <img src="uploads/<?php echo htmlspecialchars($certification['certificate_image']); ?>" alt="Sertifikat">
            <form action="download.php" method="POST">
                <button type="submit" name="download" value="<?php echo htmlspecialchars($certification['certificate_pdf']); ?>">Download Sertifikat (PDF)</button>
            </form>
        </div>
    </div>
</body>
</html>
