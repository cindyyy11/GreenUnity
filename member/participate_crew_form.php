<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Participate project as crew</title>
</head>
<body>
    <?php 
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Project Crew Application Form</h1>
        <?php
            $project_id = $_GET['project_id'];
            $query1 = "SELECT Title FROM `projects` WHERE ProjectID = $project_id";
            $result1 = mysqli_query($conn, $query1);
            if (mysqli_num_rows($result1) > 0) {
                $row = mysqli_fetch_array($result1);
                $project_name = $row['Title'];
            }
        ?>
        <div id="intro">
            <form action="#" method="POST">
                <center>
                    <table cellpadding=5px>
                        <tr>
                            <td><label for="project_id">Project ID:</label></td>
                            <td><input type="text" name="project_id" value="<?php echo $project_id; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="project_name">Project Name:</label></td>
                            <td><input type="text" name="project_name" value="<?php echo $project_name; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="position">Position:</label></td>
                            <td><input type="text" name="position" placeholder="Secretary/..." required></td>
                        </tr>
                        <tr>
                            <td><label for="availability">Availability:</label></td>
                            <td><input type="text" name="availability" placeholder="Part-time/Full-time/Contract" required></td>
                        </tr>
                        <tr>
                            <td><label for="commit_level">Commitment Level:</label></td>
                            <td><input type="number" name="commit_level" placeholder="1 to 10" min="1" max="10" required></td>
                        </tr>
                        <tr>
                            <td><label for="preference">Work preferences:</label></td>
                            <td><input type="text" name="work_preferences" placeholder="Remote/on-site/Contract/..." required></td>
                        </tr>
                        <tr>
                            <td><label for="reason_apply">Reasons of application:</label></td>
                            <td><textarea name="reason_apply" value="reason_apply" placeholder="Tell us why you apply as project crew" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="skills">Skills:</label></td>
                            <td><textarea name="skills" value="skills" placeholder="Tell us what skills you have" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit Form" class="submit-btn"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" onclick="window.location.href='project_details.php?project_id=<?php echo $project_id; ?>';" value="Back" class="back-btn"></td>
                        </tr>
                    </table>
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
            $project_id = $_GET['project_id'];
            $user_id = $_SESSION['member_id'];
            $query2 = "SELECT AdminID FROM `manage_project` WHERE ProjectID = $project_id";
            $result2 = mysqli_query($conn, $query2);
            if (mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_array($result2);
                $admin_id = $row['AdminID'];
            }
            $checking = "SELECT * FROM `project_crew_application_form` WHERE ProjectID = $project_id && MemberID = $user_id";
            $result1 = mysqli_query($conn, $checking);
            if (mysqli_num_rows($result1) > 0) {
                echo "<script>alert('You have already participated the project as crew! You can only send the submission once. Thank you!');
                        window.location.href='conservation_projects.php';</script>";
            } else {
                $sql = "INSERT INTO `project_crew_application_form` (`Position`, `Availability`, `Commitment_Level`, `Work_Preferences`, `Reason_of_Application`, `Skills`, `MemberID`, `ProjectID`, `AdminID`) VALUES ('$position', '$availability', $commit_level, '$work_preferences', '$reason_apply', '$skills', $user_id, $project_id, $admin_id)";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('You have participated the project as crew! Thank you!');
                            window.location.href='conservation_projects.php';</script>";
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