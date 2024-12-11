
<?php
if (basename($_SERVER['PHP_SELF']) === 'add_course.php') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content_url = $_POST['content_url'];
        $learning_path_id = $_POST['learning_path_id'];

        $sqlInsert = "INSERT INTO Courses (learning_path_id, title, content_url, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->bind_param('iss', $learning_path_id, $title, $content_url);

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $sqlLearningPaths = "SELECT * FROM LearningPaths";
    $resultLearningPaths = $conn->query($sqlLearningPaths);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Course</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container my-5">
        <h1>Add New Course</h1>
        <form action="tambah_course.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content_url" class="form-label">Content URL</label>
                <input type="text" name="content_url" class="form-control" id="content_url" required>
            </div>
            <div class="mb-3">
                <label for="learning_path_id" class="form-label">Learning Path</label>
                <select name="learning_path_id" class="form-select" id="learning_path_id" required>
                    <option value="">Select a Learning Path</option>
                    <?php while ($lp = $resultLearningPaths->fetch_assoc()) { ?>
                        <option value="<?php echo $lp['id']; ?>"><?php echo htmlspecialchars($lp['title']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
    </div>
    </body>
    </html>
    <?php
}
?>
