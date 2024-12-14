<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $learningPathId = $_POST['learning_path_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (empty($learningPathId) || empty($title) || empty($contentUrl)) {
        die("Semua kolom harus diisi!");
    }   
    $insertQuery = $db->prepare("
        INSERT INTO Courses (learning_path_id, title, content) 
        VALUES (?, ?, ?)
    ");
    $success = $insertQuery->execute([$learningPathId, $title, $content]);

    if ($success) {
        header("Location: tambah_course.php?success=1"); 
    } else {
        echo "Gagal menambahkan modul. Silakan coba lagi.";
    }
} else {
    echo "Metode tidak didukung.";
}
?>
