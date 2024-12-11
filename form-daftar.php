<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran User | EduWeb OjoLaliSinau</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            background: url('image/school.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .container h4,
        .list-group-item a {
            color: white;
        }

        .form-container {
            margin: 80px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            max-width: 500px;
        }

        .form-container form {
            text-align: left;
        }

        label {
            font-weight: bold;
        }
        .toggle-password {
            display: none;
        }

        #toggle:checked + .show-password + #password {
            -webkit-text-security: none; 
        }

        #toggle:not(:checked) + .show-password + #password {
            -webkit-text-security: disc; 
        }

        .show-password {
            cursor: pointer;
            color: blue;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <header class="text-center py-5 bg-dark text-white" style="margin-top: 65px;">
        <h3>Formulir Pendaftaran User</h3>
    </header>

    <div class="form-container">
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

                <!-- Input password -->
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
                
                <!-- Checkbox untuk show/hide password -->
                <input
                    id="toggle"
                    type="checkbox"
                    class="toggle-password"
                />
                
                <label for="toggle" class="show-password">Show Password</label>
                </div>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const image = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        image.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function () {
                    imagePreview.src = reader.result;
                    imagePreview.hidden = false;
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
