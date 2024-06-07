<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Edit Question</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
        $question_id = $_GET['question_id'];
        $quiz_id = $_GET['quiz_id'];
        $sql = "SELECT * FROM question WHERE QuestionID = $question_id AND QuizID = $quiz_id";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        $question = $row['Title'];
        $answer = $row['Answer'];
        $choice_A = $row['Choice_A'];
        $choice_B = $row['Choice_B'];
        $choice_C = $row['Choice_C'];
        $choice_D = $row['Choice_D'];
    ?>  
    <h1>Edit Question</h1>
    <center>
    <form action="#" method="POST">
        <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" required><br><br>
        <label for="question">Question:</label>
        <textarea name="question" required><?php echo $question; ?></textarea><br><br>
        <label for="answer">Answer:</label>
        <input type="text" name="answer" value="<?php echo $answer; ?>" required><br><br>
        <label for="choice_A">Choice A:</label>
        <input type="text" name="choice_A" value="<?php echo $choice_A; ?>" required><br><br>
        <label for="choice_B">Choice B:</label>
        <input type="text" name="choice_B" value="<?php echo $choice_B; ?>" required><br><br>
        <label for="choice_C">Choice C:</label>
        <input type="text" name="choice_C" value="<?php echo $choice_C; ?>" required><br><br>
        <label for="choice_D">Choice D:</label>
        <input type="text" name="choice_D" value="<?php echo $choice_D; ?>" required><br><br>
        <input type="submit" name="Edit" value="Edit" class="submit-btn">
    </form>
    <br><br>
    <button onclick='window.location.href="edit_quiz.php?quiz_id=<?php echo $quiz_id; ?>"' class='back-btn'>Back</button>
    </center>
</body>
</html>

<?php
    if(isset($_POST['Edit'])) {

        $sql = "UPDATE `question`
            SET `Title` = '".$_POST["question"]."',
                `Answer` = '".$_POST["answer"]."',
                `Choice_A` = '".$_POST["choice_A"]."',
                `Choice_B` = '".$_POST["choice_B"]."',
                `Choice_C` = '".$_POST["choice_C"]."',
                `Choice_D` = '".$_POST["choice_D"]."'
            WHERE QuestionID = ".$question_id." AND QuizID = ".$quiz_id."";

            if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Quiz updated successfully!");
                    window.location.href="manage_quiz.php";
                    </script>';
            } else {
            echo 'Error ; ' . mysqli_error($conn); 
            }
    }
?>