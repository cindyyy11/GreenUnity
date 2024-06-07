<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Result</title>
</head>
<body>
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
            include 'db_conn.php';
            $member_id = $_SESSION['member_id'];
            $quiz_id = $_GET['quiz_id'];
            $sql_quiz = "SELECT * FROM quiz WHERE QuizID = '$quiz_id'";
            $result_quiz = mysqli_query($conn, $sql_quiz) or die(mysqli_error($conn));
            $row_quiz = mysqli_fetch_array($result_quiz);
            $answer = $_POST['choose'];
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $date_time = date('Y-m-d H:i:s');
            $result = 0;
            foreach($answer as $no => $ans)
            {
                $sql_answer = "SELECT * FROM question WHERE QuestionID = '$no' AND QuizID = '$quiz_id'";
                $result_answer = mysqli_query($conn, $sql_answer) or die(mysqli_error($conn));
                $row_answer = mysqli_fetch_assoc($result_answer);
                if($ans == $row_answer['Answer'])
                {
                    $result++;
                }
            }
            $query = "SELECT * FROM question WHERE QuizID = '$quiz_id'";
            $no_question = mysqli_num_rows(mysqli_query($conn, $query));

            $mysql = "INSERT INTO play
                            (Result, AnsweredDate, MemberID, QuizID)
                    VALUES ('$result', '$date_time','$member_id', '$quiz_id')";
            $result_quiz1 = mysqli_query($conn, $mysql) or die(mysqli_error($conn));
        ?>
        <h1>Result</h1>
        <div id="intro">
            <a href='education_projects.php'><button class="back-btn">Back</button></a>
            <p><center>Quiz : <?php echo $row_quiz['Title']; ?>
            </center></p>
            <?php
                echo "<center>Score : ".$result."/".$no_question."</center>";
            ?>
        </div>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>