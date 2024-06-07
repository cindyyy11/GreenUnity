<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Event/Project Suggestion</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <div id="intro">
    <h1>Event/Project Crowdsourcing Submission Form</h1>
    <form action="#" method="POST">
        <center>
        <table cellpadding=5px>
            <tr>
                <td><label for="title">Event/Project Title:</label></td>
                <td><input type="text" name="title" placeholder="less than 30 alphabets" required><br><br></td>
            </tr>
            <tr>
                <td><label for="description">Description:</label></td>
                <td><textarea name="description" placeholder="Goals, Purpose, Aim, Objectives" cols="30" rows="8" required></textarea><br><br></td>
            </tr>
            <tr>
                <td><label for="overview">Overview:</label></td>
                <td><textarea name="overview" placeholder="What kind of activities?" cols="30" rows="8" required></textarea><br><br></td>
            </tr>
            <tr>
                <td><label for="type">Type:</label></td>
                <td><input type="text" name="type" placeholder="funding/content creation/..." required><br><br></td>
            </tr>
            <tr>
                <td><label for="submission_details">Submission Details:</label></td>
                <td><textarea name="submission_details" value="submission_details"></textarea><br><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit Form" class="submit-btn"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" onclick="window.location.href='conservation_projects.php';" value="Back" class="back-btn"></td>
            </tr>
        </table>
        </center>
    </form>
    </div>
<?php
    if (isset($_POST['Submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $overview = $_POST['overview'];
        $type = $_POST['type'];
        $submission_details = $_POST['submission_details'];
        $user_id = $_SESSION['member_id'];
        $checking = "SELECT * FROM `crowdsourcing_form` WHERE Title = '$title' && MemberID = $user_id";
        $result1 = mysqli_query($conn, $checking);
        if (mysqli_num_rows($result1) > 0) {
            echo "<script>alert('You have already submitted the suggestion! You can only submit once for the suggestion. Thank you!');
                    window.location.href='conservation_projects.php';</script>";
        } else {
            $sql = "INSERT INTO `crowdsourcing_form` (`Title`, `Description`, `Overview`, `Type`, `Submission_Details`, `MemberID`) VALUES ('$title', '$description', '$overview', '$type', '$submission_details', $user_id)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('You have submitted the suggestion! Thank you!');
                        window.location.href='conservation_projects.php';</script>";
            } else {
                echo "Error; ".mysqli_error($conn);
            }
        }
    }
?>
</div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>