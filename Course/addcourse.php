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


<form method="POST" action="process-tambah-course.php">
    <label>Learning Path</label>
    <select name="learning_path_id">
        <?php
        $learningPaths = $db->query("SELECT * FROM LearningPaths")->fetchAll();
        foreach ($learningPaths as $path): ?>
            <option value="<?= $path['id'] ?>"><?= $path['title'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Title</label>
    <input type="text" name="title" required><br>
    <label>Content URL</label>
    <input type="text" name="content_url" required><br>
    <button type="submit">Tambah</button>
</form>
