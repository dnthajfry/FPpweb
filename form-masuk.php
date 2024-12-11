<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login | EduWeb OjoLaliSinau</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            color: white;
        }

        .form-container {
            margin: 100px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            max-width: 400px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h3 class="text-center">Login</h3>
        <form action="proses-masuk.php" method="POST">
            <!-- Email -->
            <div class="mb-3">
                <label for="Email">Email:</label>
                <input type="email" name="Email" placeholder="Masukkan Email" class="form-control" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="Password">Password:</label>
                <input type="password" name="Password" placeholder="Masukkan Password" class="form-control" required>
            </div>
            <!-- Tombol Login -->
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
