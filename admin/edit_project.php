<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Edit Project</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
        $project_id = $_GET['project_id'];
        $sql = "SELECT * FROM projects WHERE ProjectID = $project_id";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        $project_id = $row['ProjectID'];
        $title = $row['Title'];
        $description = $row['Description'];
        $start_date = $row['Start_Date'];
    ?>  
    <h1>Edit Project: <?php echo $title; ?></h1>
    <center>
    <form action="#" method="POST">
        <input type="hidden" name="project_id" value="<?php echo $project_id; ?>" required><br><br>
        <label for="title">Project Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required><br><br>
        <label for="description">Description:</label>
        <textarea name="description" required><?php echo $description; ?></textarea><br><br>
        <label for="start_date">Start Date:</label>
        <input type="text" name="start_date" value="<?php echo $start_date; ?>" required><br><br>
        <input type="submit" name="Edit" value="Edit" class="submit-btn">
    </form>
    <br><br>
    <button onclick='window.location.href="view_events_projects.php"' class='back-btn'>Back</button>
    </center>
</body>
</html>

<?php
    if(isset($_POST['Edit'])) {

        $sql = "UPDATE `projects`
            SET `Title` = '".$_POST["title"]."',
                `Description` = '".$_POST["description"]."',
                `Start_Date` = '".$_POST["start_date"]."'
            WHERE ProjectID = ".$project_id."";

            if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Project updated successfully!");
                    window.location.href="view_events_projects.php";
                    </script>';
            } else {
            echo 'Error ; ' . mysqli_error($conn); 
            }
    }
?>