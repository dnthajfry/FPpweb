<?php

if (basename($_SERVER['PHP_SELF']) === 'exam.php') {
    $course_id = $_GET['course_id'];
    $sqlExam = "SELECT * FROM Exams WHERE course_id = $course_id";
    $resultExam = $conn->query($sqlExam);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exam</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container my-5">
        <h1>Exam</h1>
        <form action="certif.php" method="POST">
            <?php while ($question = $resultExam->fetch_assoc()) { ?>
                <div class="mb-4">
                    <h5><?php echo htmlspecialchars($question['question']); ?></h5>
                    <input type="radio" name="options_<?php echo $question['id'] ?>" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
    </html>

<?php
}