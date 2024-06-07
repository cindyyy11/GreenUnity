<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Quizzes</title>
    <link rel="icon" href="images/GreenUnity logo.png">
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    include 'db_conn.php';
    ?>
    <center>
    <h1>Manage Quiz</h1>
    <p>Edit your previous quizzes or create a new quiz here!</p>
    <br>
    <h2>Create Quiz</h2>
    <button onclick="window.location.href='create_quiz.php'" class="btn1">Create Quiz</button>
    <br><br><br>
    <h2>Edit Quiz</h2>
    <div id="manage_quiz">
        <table cellpadding=5px>
            <col width="300px">
            <col width="100px">
        <?php
            $sql = "SELECT * FROM quiz WHERE AdminID = '$admin_id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><h3>" . $row['Title'] . "</h3></td>";
                    echo "<td><button onclick='window.location.href=\"edit_quiz.php?quiz_id=" . $row['QuizID'] . "\"' class='btn1'>Edit</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<p>No quizzes found.</p>";
            }
        ?>
        </table>
    </div>
    </center>
    </div>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>