<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | OjoLaliSinau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .main-container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Left Section */
        .left-panel {
            background: linear-gradient(135deg, #006d75, #00bcd4);
            color: white;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .left-panel img {
            width: 250px; /* Sama dengan halaman pendaftaran */
            height: auto;
            margin-bottom: 20px;
        }

        .left-panel h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .left-panel p {
            font-size: 1.25rem;
            text-align: center;
        }

        /* Right Section */
        .right-panel {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-box h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #ff8c00;
            text-align: center;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-submit {
            background-color: #ff8c00;
            color: white;
            border: none;
            padding: 10px 20px;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #e67e00;
        }

        .link-section {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .link-section a {
            color: #ff8c00;
            text-decoration: none;
        }

        .link-section a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <div class="main-container">
        <!-- Left Section -->
        <div class="left-panel">
            <img src="foto/logo.png" alt="Logo">
            <h1>OjoLaliSinau</h1>
            <p>Selamat Datang<br>Silahkan Masuk</p>
        </div>

        <!-- Right Section -->
        <div class="right-panel">
            <div class="form-box">
                <h2>Login</h2>
                <form action="proses-masuk.php" method="POST">
            <!-- Email -->
            <div class="mb-3">
                <label for="Email">Email:</label>
                <input type="email" name="Email" placeholder="Masukkan Email" class="form-control" required>
            </div>
            <div class="mb-3">
    <label for="Password">Password:</label>
    <input 
        id="password" 
        type="password" 
        name="Password" 
        placeholder="Masukkan Password" 
        class="form-control" 
        required 
    />
    <input 
        id="toggle" 
        type="checkbox" 
        class="toggle-password" 
    />
    <label for="toggle" class="show-password">Show Password</label>
</div>

<script>
    // Ambil elemen input password dan checkbox
    const passwordInput = document.getElementById('password');
    const toggleCheckbox = document.getElementById('toggle');

    // Tambahkan event listener untuk toggle checkbox
    toggleCheckbox.addEventListener('change', function () {
        // Jika checkbox dicentang, ubah tipe input menjadi 'text'
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            // Jika tidak dicentang, ubah kembali menjadi 'password'
            passwordInput.type = 'password';
        }
    });
</script>

            <!-- SUBMIT -->
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-primary">Masuk</button>
            </div>
        </form>

            </div>
        </div>
    </div>
</body>

</html>