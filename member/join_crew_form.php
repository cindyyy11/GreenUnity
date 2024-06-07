<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Join event as crew</title>
</head>
<body>
    <?php 
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
    <h1>Event Crew Application Form</h1>
        <?php
            $event_id = $_GET['event_id'];
            $query1 = "SELECT Title FROM `events` WHERE EventID = $event_id";
            $result1 = mysqli_query($conn, $query1);
            if (mysqli_num_rows($result1) > 0) {
                $row = mysqli_fetch_array($result1);
                $event_name = $row['Title'];
            }
        ?>
        <div id="intro">
            <form action="#" method="POST">
                <center>
                    <table cellpadding=5px>
                        <tr>
                            <td>Event ID:</td>
                            <td><input type="text" name="event_id" value="<?php echo $event_id; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Event Name:</td>
                            <td><input type="text" name="event_name" value="<?php echo $event_name; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="position">Position:</label></td>
                            <td><input type="text" name="position" placeholder="Secretary/..." required><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="availability">Availability:</label></td>
                            <td><input type="text" name="availability" placeholder="Part-time/Full-time/Contract" required><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="commit_level">Commitment Level:</label></td>
                            <td><input type="number" name="commit_level" placeholder="1 to 10" min="1" max="10" required><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="preference">Work preferences:</label></td>
                            <td><input type="text" name="work_preferences" placeholder="Remote/on-site/Contract/..." required><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="reason_apply">Reasons of application:</label></td>
                            <td><textarea name="reason_apply" value="reason_apply" placeholder="Tell us why you apply as event crew" cols="30" rows="10"></textarea><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="skills">Skills:</label></td>
                            <td><textarea name="skills" value="skills" placeholder="Tell us what skills you have" cols="30" rows="10"></textarea><br><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit Form" class="submit-btn"></td>
                        </tr>
                    </table>
                    <br><br>
                    <input type="button" onclick="window.location.href='event_details.php?event_id=<?php echo $event_id; ?>';" value="Back" class="back-btn">
                </center>
            </form>
        </div>
    </div>
    <?php
        if (isset($_POST['Submit'])) {
            $position = $_POST['position'];
            $availability = $_POST['availability'];
            $commit_level = $_POST['commit_level'];
            $work_preferences = $_POST['work_preferences'];
            $reason_apply = $_POST['reason_apply'];
            $skills = $_POST['skills'];
            $event_id = $_GET['event_id'];
            $user_id = $_SESSION['member_id'];
            $query2 = "SELECT AdminID FROM `manage_event` WHERE EventID = $event_id";
            $result2 = mysqli_query($conn, $query2);
            if (mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_array($result2);
                $admin_id = $row['AdminID'];
            }
            $checking = "SELECT * FROM `events_crew_application_form` WHERE EventID = $event_id && MemberID = $user_id";
            $result1 = mysqli_query($conn, $checking);
            if (mysqli_num_rows($result1) > 0) {
                echo "<script>alert('You have already joined the event as crew! You can only send the submission once. Thank you!');
                        window.location.href='event_workshops.php';</script>";
            } else {
                $sql = "INSERT INTO `events_crew_application_form` (`Position`, `Availability`, `Commitment_Level`, `Work_Preferences`, `Reason_of_Application`, `Skills`, `MemberID`, `EventID`, `AdminID`) VALUES ('$position', '$availability', $commit_level, '$work_preferences', '$reason_apply', '$skills', $user_id, $event_id, $admin_id)";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('You have joined the event as crew! Thank you!');
                            window.location.href='event_workshops.php';</script>";
                } else {
                    echo "Error; ".mysqli_error($conn);
                }
            }
        }
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>