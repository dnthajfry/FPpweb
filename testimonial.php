<?php
session_start();
include("config.php");

// Function untuk mengambil testimonial teratas
function getTopTestimonial() {
    global $db; // Pastikan variabel $db terhubung ke koneksi MySQL
    $sql = "SELECT * FROM testimonials ORDER BY rating DESC, created_at DESC LIMIT 1";
    $query = mysqli_query($db, $sql);

    if ($query) {
        return mysqli_fetch_assoc($query);
    }

    return null;
}

// Function untuk menambah testimonial
function addTestimonial($name, $message, $rating) {
    global $db;
    $name = mysqli_real_escape_string($db, $name);
    $message = mysqli_real_escape_string($db, $message);
    $rating = (int)$rating;

    $sql = "INSERT INTO testimonials (name, message, rating) VALUES ('$name', '$message', '$rating')";
    $query = mysqli_query($db, $sql);

    return $query;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $name = htmlspecialchars($_SESSION['user_name']); // Ambil dari session
    $message = htmlspecialchars($_POST['message']);
    $rating = (int)$_POST['rating'];

    if (addTestimonial($name, $message, $rating)) {
        $_SESSION['success'] = "Testimonial berhasil ditambahkan!";
    } else {
        $_SESSION['error'] = "Gagal menambahkan testimonial.";
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Function untuk menampilkan testimonial
function displayTestimonial() {
    $testimonial = getTopTestimonial();

    if ($testimonial) {
        $stars = str_repeat('★', $testimonial['rating']);
        ?>
        <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
                <img src="https://i.pravatar.cc/40" alt="Testimonial Image" class="rounded-circle me-4" style="width: 120px; height: 120px; object-fit: cover;">
                <div class="ms-3">
                    <h5 class="mb-0"><?= htmlspecialchars($testimonial['name']) ?></h5>
                    <div class="text-warning"><?= $stars ?></div>
                </div>
            </div>
            <p class="text-muted">"<?= htmlspecialchars($testimonial['message']) ?>"</p>
        </div>
        <?php
    }
}

// Function untuk menampilkan form testimonial
function displayTestimonialForm() {
    if (isset($_SESSION['user_id'])) {
        ?>
        <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#testimonialModal">
            Tulis pengalaman Anda <i class="fas fa-arrow-right ms-2"></i>
        </button>

        <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testimonialModalLabel">Tambah Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" name="message" required rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <select class="form-control" id="rating" name="rating" required>
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="1">⭐</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Testimonial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <button class="btn btn-outline-primary rounded-pill" onclick="window.location.href='form-masuk.php'">
            Login untuk menulis testimoni <i class="fas fa-arrow-right ms-2"></i>
        </button>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Page</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Testimonial Terbaik</h1>
        
        <!-- Bagian untuk menampilkan testimonial -->
        <?php displayTestimonial(); ?>
        
        <hr class="my-4">
        
        <!-- Bagian untuk menampilkan form -->
        <?php displayTestimonialForm(); ?>
    </div>

    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
