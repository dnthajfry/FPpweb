<?php
include 'config.php';

$courseId = $_GET['id'];

$courseQuery = $db->prepare("SELECT * FROM Courses WHERE id = ?");
$courseQuery->execute([$courseId]);
$course = $courseQuery->fetch();

//  exam details
$examQuery = $db->prepare("SELECT * FROM Ujian WHERE course_id = ?");
$examQuery->execute([$courseId]);
$exam = $examQuery->fetch();

// Fetch next and previous modules
$nextQuery = $db->prepare("SELECT id FROM Courses WHERE id > ? ORDER BY id ASC LIMIT 1");
$nextQuery->execute([$courseId]);
$nextModule = $nextQuery->fetch();

$prevQuery = $db->prepare("SELECT id FROM Courses WHERE id < ? ORDER BY id DESC LIMIT 1");
$prevQuery->execute([$courseId]);
$prevModule = $prevQuery->fetch();

// Calculate progress
$totalModulesQuery = $db->query("SELECT COUNT(*) AS total FROM Courses");
$totalModules = $totalModulesQuery->fetch()['total'];

$currentPositionQuery = $db->prepare("SELECT COUNT(*) AS position FROM Courses WHERE id <= ?");
$currentPositionQuery->execute([$courseId]);
$currentPosition = $currentPositionQuery->fetch()['position'];

$progressPercentage = ($currentPosition / $totalModules) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title'] ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0 20px;
        }
        h1 {
            margin-top: 20px;
        }
        iframe {
            border: none;
            margin-bottom: 20px;
        }
        .progress-bar {
            background: #f3f3f3;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin: 20px 0;
        }
        .progress {
            height: 20px;
            background: #4caf50;
        }
        nav a {
            text-decoration: none;
            margin: 0 10px;
            color: #007bff;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><?= $course['title'] ?></h1>
    <iframe src="<?= $course['content_url'] ?>" width="100%" height="500px"></iframe>

    <?php if ($exam): ?>
        <p><a href="exam.php?id=<?= $exam['id'] ?>">Kerjakan Ujian</a></p>
    <?php endif; ?>

    <div class="progress-bar">
        <div class="progress" style="width: <?= $progressPercentage ?>%;"></div>
    </div>

    <nav>
        <?php if ($prevModule): ?>
            <a href="course.php?id=<?= $prevModule['id'] ?>">Previous Module</a>
        <?php endif; ?>
        <?php if ($nextModule): ?>
            <a href="course.php?id=<?= $nextModule['id'] ?>">Next Module</a>
        <?php endif; ?>
    </nav>
</body>
</html>
