<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Leaderboard</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
    <h1>Leaderboard</h1>
        <center>
            <table cellpadding=20px style="border-collapse: collapse;">
                <col width='100'>
                <col width='150'>
                <col width='100'>
                <col width='300'>
                <tr>
                    <td><a href='education_projects.php'><button class="back-btn">Back</button></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Ranking</th>
                    <th>Member</th>
                    <th>Result</th>
                    <th>Answered Date</th>
                </tr>
                <?php
                    include 'db_conn.php';
                    $quiz_id = $_GET['quiz_id'];
                    $sql = "SELECT * FROM play WHERE QuizID = '$quiz_id' GROUP BY Result, MemberID ORDER BY Result DESC, AnsweredDate ASC";
                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    $rank = 0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $rank++;
                        echo "<tr>";
                        echo "<td style='text-align: center; border-top: 1px solid black; '>".$rank."</td>";
                        $member_id = $row['MemberID'];
                        $member = "SELECT * FROM member WHERE MemberID = $member_id";
                        $sql_name = mysqli_query($conn, $member) or die(mysqli_error($conn));
                        $row_name = mysqli_fetch_assoc($sql_name);
                        echo "<td style='text-align: center; border-top: 1px solid black; '>".$row_name['Name']."</td>";
                        echo "<td style='text-align: center; border-top: 1px solid black; '>".$row['Result']."</td>";
                        echo "<td style='text-align: center; border-top: 1px solid black; '>".$row['AnsweredDate']."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </center>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>