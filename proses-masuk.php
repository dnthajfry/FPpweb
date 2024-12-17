<?php
session_start();
include("config.php");

if (isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password']; 

    $sql = "SELECT * FROM user_management WHERE Email = '$email'";
    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);

        if ($password === $user['Password']) {
      
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['Nama'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
            exit();
        } else {
            header("Location: form-masuk.php?error=password");
            exit();
        }
    } else {
        header("Location: form-masuk.php?error=email");
        exit();
    }
} else {
    die("Akses tidak diizinkan!");
}
?>
