    <?php

$sqlCourses = "SELECT * FROM Courses";
$resultCourses = $conn->query($sqlCourses);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Path</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h1 class="mb-4">Daftar Courses</h1>
    <div class="list-group">
        <?php while ($course = $resultCourses->fetch_assoc()) { ?>
            <div class="list-group-item">
                <h5><?php echo htmlspecialchars($course['title']); ?></h5>
                <p><?php echo htmlspecialchars($course['description']); ?></p>
                <a href="download.php?id=<?php echo $course['id']; ?>" class="btn btn-primary">Download Materi</a>
                <a href="exam.php?course_id=<?php echo $course['id']; ?>" class="btn btn-success">Mulai Ujian</a>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
