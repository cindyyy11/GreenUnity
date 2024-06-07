<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Edit Quiz Form</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <?php
        include 'db_conn.php';
        $quiz_id = $_GET['quiz_id'];
        $sql1 = "SELECT * FROM quiz WHERE QuizID = $quiz_id";
        $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        $row1 = mysqli_fetch_array($result1);
        $quiz_title = $row1['Title'];
        echo "<h1>Edit Quiz: ".$quiz_title."</h1>";
    ?>
    <div id='intro'>
    <center>
    <table cellpadding=5px>
    <?php
    $no = 0;
    $sql = "SELECT * FROM question WHERE QuizID = $quiz_id";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_assoc($result)) {
        $no++;
        echo "<tr>";
        echo "<td><h3>Question ".$no."</h3></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Question: </td>";
        echo "<td>".$row['Title']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Answer: </td>";
        echo "<td>".$row['Answer']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Choice A: </td>";
        echo "<td>".$row['Choice_A']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Choice B: </td>";
        echo "<td>".$row['Choice_B']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Choice C: </td>";
        echo "<td>".$row['Choice_C']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Choice D: </td>";
        echo "<td>".$row['Choice_D']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td><button onclick='window.location.href=\"edit_question.php?question_id=".$row['QuestionID']."&quiz_id=".$quiz_id."\"' class='btn2'>Edit</button></td>";
        echo "</tr>";
    }
    ?>
    <tr>
    <td></td>
    <td><input type="button" onclick="window.location.href='manage_quiz.php'" value="Back" class="back-btn"></td>
    </tr>
    </table>
    </center>
    </div>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>