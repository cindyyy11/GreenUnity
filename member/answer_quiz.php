<?php
include 'header.php';
echo "<br>";
echo "<div id='content'>";
include 'topnav.php';
include 'db_conn.php';
$quiz_id = $_GET['quiz_id'];

$sql_quiz = "SELECT * FROM quiz WHERE QuizID = '$quiz_id'";
$result_quiz = mysqli_query($conn, $sql_quiz) or die(mysqli_error($conn));
$row_quiz = mysqli_fetch_array($result_quiz);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Answer Quiz</title>
</head>
<body>
        <form action="check_quiz.php?quiz_id=<?php echo $quiz_id; ?>" method="POST">
            <h1>Title: <?php echo $row_quiz['Title']; ?></h1>
            <?php
            $no = 0;

            $sql = "SELECT * FROM question WHERE QuizID = '$quiz_id'";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            while ($row = mysqli_fetch_assoc($result))
            {
                $no++;
                if (empty($row['Choice_C']))
                { $choiceC = ""; }
                else
                {
                $choiceC = '<input type="radio" name="choose['.$row['QuestionID'].']"
                                    value="'.$row['Choice_C'].'">';
                }
                if (empty($row['Choice_D']))
                { $choiceD = ""; }
                else
                {
                $choiceD = '<input type="radio" name="choose['.$row['QuestionID'].']"
                                    value="'.$row['Choice_D'].'">';
                }
            ?>

            <center><table cellpadding=5px>
            <tr>
            <td style="width: 20px;"></td>
            <td style="width: 15px;"></td>
            <td></td>
            <td style="width: 20px;"></td>
            </tr>
            <tr>
            <td></td>
            <td colspan="2" width="900"><?php echo $no.". ".$row["Title"]; ?>
                </td>
            <td></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="radio" name="choose[<?php echo $row['QuestionID'];?>]"
                        value="<?php echo $row['Choice_A']; ?>" required>
                <?php echo $row['Choice_A']; ?>
                <br>
                <input type="radio" name="choose[<?php echo $row['QuestionID'];?>]"
                        value="<?php echo $row['Choice_B']; ?>">
                <?php echo $row['Choice_B']; ?>
                <br><?php echo $choiceC; ?> <?php echo $row['Choice_C']; ?>
                <br><?php echo $choiceD; ?> <?php echo $row['Choice_D']; ?></td>
            <td></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <?php  
                } 
                if ($no == 0) {
                    echo "<center>No question found</center>";
                } 
            ?>
            <tr>
            <td></td>
            <td></td>
            <td align="center"><input type="submit" name="Submit" 
                                    value="Check Answer" class="submit-btn"></td>
            <td></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </table>
        </form>
        </center>
        <center>
        <a href='education_projects.php'><button class="back-btn">Back</button></a>
        </center>
    </div>
</body>
<footer>
    <?php 
    include 'footer.php'; 
    ?>
</footer>
</html>