<?php

include("config.php");

if(isset($_POST['daftar'])){

    $foto = $_FILES['image']['name']; 
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $ktm = $_FILES['image']['name'];;
    $institusi = $_POST['Institusi'];
    $umur = $_POST['Umur'];
    $role = $_POST['Role'];

    $date_photo = date('dmYHis').$foto;
    $tmp = $_FILES['image']['tmp_name'];

    $path = "image/".$date_photo;

    if (!move_uploaded_file($tmp, $path)) {
        die("Gagal upload foto");
    } 

    $sql = "INSERT INTO user_management (nama, email, password, ktm, institusi, umur, role, foto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssssss', $nama, $email, $password, $ktm, $institusi, $umur, $role, $foto);
    $query = mysqli_stmt_execute($stmt);

    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
