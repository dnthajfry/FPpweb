<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Navbar Styles */
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

        .navbar input[type="text"] {
        padding: 5px;
        font-size: 14px;
        border: 2px solid #0056b3; /* Border biru tua */
        background-color: #007BFF; /* Warna background sama dengan navbar */
        color: white; /* Teks berwarna putih */
        border-radius: 5px;
        width: 250px;
        outline: none; /* Menghapus outline saat input aktif */
        }

        .navbar input[type="text"]::placeholder {
            color: #d1e7ff; /* Warna placeholder putih kebiruan */
        }

        .navbar input[type="text"]:focus {
            border-color: #003e80; /* Border lebih gelap saat aktif */
            box-shadow: 0 0 5px rgba(0, 56, 128, 0.5); /* Efek glow biru tua */
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

        .navbar .btn-login {
            background-color: #28a745;
        }

        .navbar .btn-login:hover {
            background-color: #1c7a32;
        }

        .navbar .btn-masuk {
            background-color: #ffc107;
            color: black;
        }

        .navbar .btn-masuk:hover {
            background-color: #e0a800;
        }

        /* Main Content */
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group {
            max-width: 500px; /* Batasi lebar container */
            margin: 0 auto; /* Pusatkan container */
            padding: 10px;
        }

        .form-group input {
            width: 100%; /* Pastikan input mengikuti lebar container */
            max-width: 100%; /* Hindari input melewati batas container */
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Pastikan padding termasuk dalam ukuran elemen */
        }

        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-footer {
            text-align: center;
            margin-top: 10px;
        }

        .form-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="left">
            <input type="text" placeholder="Materi apa yang ingin dipelajari?">
            <button class="btn">Home</button>
            <button class="btn">Learning Path</button>
            <button class="btn">Sertifikasi</button>
        </div>
        <div class="right">
            <button class="btn btn-login">Daftar</button>
            <button class="btn btn-masuk">Masuk</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h3>Login</h3>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="form-footer">
            <p><a href="forgot_password.php">Lupa Kata Sandi?</a></p>
            <p>Tidak Memiliki Akun? <a href="register.php">Daftar</a></p>
        </div>
    </div>

</body>
</html>
