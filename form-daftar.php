<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran User | EduWeb OjoLaliSinau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .main-container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

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
            width: 250px;
            margin-bottom: 30px;
        }

        .left-panel h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .left-panel p {
            font-size: 1.5rem;
        }

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

        .form-control,
        .form-select {
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

        .already-have-account {
            text-align: center;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .already-have-account a {
            color: #ff8c00;
            text-decoration: none;
        }

        .already-have-account a:hover {
            text-decoration: underline;
        }

        .image-preview {
            display: none;
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Left Panel -->
        <div class="left-panel">
            <img src="foto/logo.png" alt="Logo">
            <h1>OjoLaliSinau</h1>
            <p>Daftar Dahulu yaa</p>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <div class="form-box">
            <h2>Daftar</h2>
                <div class="already-have-account">
                    <a href="form-masuk.php">Already have an account?</a>
                </div>

               

                <form action="proses-daftar.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <!-- Foto -->
                <div class='mb-3'>
                    <label for="image">Foto:</label>
                    <img id="image-preview" src="" alt="Image Preview" width="200" height="200" hidden><br>
                    <input type="file" id="image" name="image" accept="image/*" class="form-control" required>
                </div>

                <!-- Nama -->
                <div class="mb-3">
                    <label for="Nama">Nama:</label>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" class="form-control" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="Email">Email:</label>
                    <input type="email" name="Email" placeholder="Email" class="form-control" required>
                </div>

                <div class="mb-3">
    <input
        id="password"
        type="password"
        name="Password"
        placeholder="Password"
        class="form-2"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
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


                <!-- KTM -->
                <div class="mb-3">
                <label for="image">KTM:</label>
                    <img id="image-preview" src="" alt="Image Preview" width="200" height="200" hidden><br>
                    <input type="file" id="image" name="image" accept="image/*" class="form-control" required>
                </div>

                <!-- Institusi -->
                <div class="mb-3">
                    <label for="Institusi">Institusi:</label>
                    <input type="text" name="Institusi" placeholder="Nama Institusi" class="form-control">
                </div>

                <!-- Umur -->
                <div class="mb-3">
                    <label for="Umur">Umur:</label>
                    <input type="number" name="Umur" placeholder="Umur" class="form-control" min="0">
                </div>

                <!-- Role -->
                <div class="mb-3">
                    <label for="Role">Role:</label>
                    <select name="Role" class="form-select" required>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Tombol Daftar -->
                <div class="mb-3 text-center">
                    <input type="submit" value="daftar" name="daftar" class="btn btn-primary">
                </div>
            </fieldset>
        </form>
            </div>
        </div>
    </div>

    <script>
        const image = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        image.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function () {
                    imagePreview.src = reader.result;
                    imagePreview.hidden = block;
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>