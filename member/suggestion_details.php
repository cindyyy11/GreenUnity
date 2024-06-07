<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Suggestion Details</title>
</head>
<body>
    <?php 
        include 'header.php'; 
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
        $form_id = $_GET['form_id'];
        $query = "SELECT * FROM crowdsourcing_form WHERE Crowdsourcing_FormID = $form_id";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($result);
        echo "<h1>".$row['Title']."</h1>";
        echo "<div id='intro'>";
        echo "<p>Description: ".$row['Description']."</p>";
        echo "<p>Overview: ".$row['Overview']."</p>";
        echo "<p>Type: ".$row['Type']."</p>";
        echo "<p>Submission details: ".$row['Submission_Details']."</p>";
        echo "<a href='conservation_projects.php'><button class='back-btn'>Back</button></a>";
        echo "<br><br>";
        $votes = "SELECT * FROM vote WHERE Crowdsourcing_FormID = $form_id";
        $votes_result = mysqli_query($conn, $votes) or die(mysqli_error($conn));
        echo "<p>Number of votes: ".mysqli_num_rows($votes_result)."</p>";
        $user_id = $_SESSION['member_id'];
        $query1 = "SELECT * FROM `vote` WHERE Crowdsourcing_FormID = $form_id && MemberID = $user_id";
        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
        if (mysqli_num_rows($result1) == 0) {
            echo "<a href='vote_form.php?form_id=".$row['Crowdsourcing_FormID']."'><button class='btn2'>Vote</button></a>";
        }
        echo '<br><br>';
        echo '</div>';
        echo '<h1>Related suggestions</h1>';
        include 'form_card.php';
    ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>