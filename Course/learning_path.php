<?php
include 'config.php'; 
$learningPathId = $_GET['id']; 

$pathQuery = $db->prepare("SELECT * FROM LearningPaths WHERE id = ?");
$pathQuery->execute([$learningPathId]);
$path = $pathQuery->fetch();

$courseQuery = $db->prepare("SELECT * FROM Courses WHERE learning_path_id = ?");
$courseQuery->execute([$learningPathId]);
$courses = $courseQuery->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $path['title'] ?></title>
</head>
<body>
    <h1><?= $path['title'] ?></h1>
    <p><?= $path['description'] ?></p>
    <h2>Modul:</h2>
    <ul>
        <?php foreach ($courses as $course): ?>
            <li><a href="modul.php?id=<?= $course['id'] ?>"><?= $course['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
