<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Project Details</title>
</head>
<body>
        <?php
            include 'header.php';
            echo '<br>';
            echo '<div id="content">';
            include 'topnav.php';
            $project_id = $_GET['project_id'];
            $query = "SELECT * FROM projects WHERE ProjectID = $project_id";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $row = mysqli_fetch_assoc($result);
            echo "<h1>".$row['Title']."</h1>";
            echo "<div id='intro'>";
            echo "<p>".$row['Description']."</p>";
            echo "<p>Start Date: ".$row['Start_Date']."</p>";
            $closed_crew_date = new DateTime($row['Start_Date']);
            $closed_crew_date -> modify('-120 days');
            echo "<p>Crew registration closes by: ".$closed_crew_date->format('Y-m-d')."</p>";
            $closed_participate_date = new DateTime($row['Start_Date']);
            $closed_participate_date -> modify('-80 days');
            echo "<p>Participate registration closes by: ".$closed_participate_date->format('Y-m-d')."</p>";
            echo "<a href='conservation_projects.php'><button class='back-btn'>Back</button></a>";
            $user_id = $_SESSION['member_id'];
            $query1 = "SELECT * FROM `project_crew_application_form` WHERE ProjectID = $project_id && MemberID = $user_id";
            $query2 = "SELECT * FROM `participation` WHERE ProjectID = $project_id && MemberID = $user_id";
            if (date("Y-m-d") <= $closed_crew_date->format('Y-m-d')) {
                echo "<br><br>";
                echo "<a href='participate_crew_form.php?project_id=".$row['ProjectID']."'><button class='btn2'>Join Project as Crew</button></a>";
            }
            if (date("Y-m-d") <= $closed_participate_date->format('Y-m-d')) {
                echo "<br><br>";
                echo "<a href='participate_project_form.php?project_id=".$row['ProjectID']."'><button class='btn2'>Participate Project</button></a>";
            }
            echo "</div>";
            echo '<br><br>';
            echo '<h1>Similar projects</h1>';
            include 'projects_card.php';
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>