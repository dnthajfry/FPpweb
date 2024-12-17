
<?php 
    if (isset($_SESSION['score'])) : ?>
        <a href="sertif.php" class="hover:underline">Sertifikat</a>
<?php else : ?>
        <a href="belumsertif.php" class="hover:underline">Sertifikat</a>
<?php endif; 
?>
