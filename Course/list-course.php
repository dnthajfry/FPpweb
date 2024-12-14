

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1>Daftar Materi</h1>
        <div class="mb-3">
            <a href="tambah_course.php" class="btn btn-success">Tambah Materi</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Learning Path</th>
                    <th>Title</th>
                    <th>Content URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($course = $resultCourses->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($course['id']); ?></td>
                        <td>
                            <?php
                            $lp_id = $course['learning_path_id'];
                            $sqlLearningPath = $conn->query("SELECT title FROM LearningPaths WHERE id = $lp_id");
                            $learningPath = $sqlLearningPath->fetch_assoc();
                            echo htmlspecialchars($learningPath['title']);
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($course['title']); ?></td>
                        <td><a href="<?php echo htmlspecialchars($course['content_url']); ?>" target=\"_blank\">Download</a></td>
                        <td>
                            <a href="exam.php?course_id=<?php echo $course['id']; ?>" class="btn btn-primary btn-sm">Take Exam</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$conn->close();
?>