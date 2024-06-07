<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>View Events and Projects</title>
</head>
<body>
    <div id="content">
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
        ?>
        <h1>In-charging Events and Project</h1>
        <center>
            <a href='manage_events_projects.php'><button class="back-btn">Back</button></a>
            <h2>Events</h2>
        
        <?php
            function limit_text($Content, $limit) {
                if (str_word_count($Content, 0) > $limit) {
                    $words = str_word_count($Content, 2);
                    $pos = array_keys($words);
                    $Content = substr($Content, 0, $pos[$limit]) . '...';
                }
                echo $Content;
            }
            $admin_id = $_SESSION['admin_id'];
            $sql = "SELECT * FROM manage_event WHERE AdminID = $admin_id";
            $result = mysqli_query($conn, $sql);
            echo "<div id='content'>";
            echo '<section id="post-list" class="container mt-5">';
            if (mysqli_num_rows($result) > 0)
                {
                    echo "<div class='row'>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $sql2 = "SELECT * FROM events WHERE EventID = ".$row['EventID'];
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $description = $row2['Description'];
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row2['Title']."</h3>";
                        echo "<p class='card-text'>".limit_text($description, 10)."</p>";
                        echo "<a href='edit_event.php?event_id=".$row2['EventID']."' class='btn btn-primary'>Edit</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No event found</p>";
                }
            echo '</section>';
            echo "</div>";
        ?>
            <h2>Projects</h2>
        <?php
            $sql = "SELECT * FROM manage_project WHERE AdminID = $admin_id";
            $result = mysqli_query($conn, $sql);
            echo "<div id='content'>";
            echo '<section id="post-list" class="container mt-5">';
            if (mysqli_num_rows($result) > 0)
                {
                    echo "<div class='row'>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $sql2 = "SELECT * FROM projects WHERE ProjectID = ".$row['ProjectID'];
                        $result2 = mysqli_query($conn, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        $description = $row2['Description'];
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row2['Title']."</h3>";
                        echo "<p class='card-text'>".limit_text($description, 10)."</p>";
                        echo "<a href='edit_project.php?project_id=".$row2['ProjectID']."' class='btn btn-primary'>Edit</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No project found</p>";
                }
            echo '</section>';
            echo "</div>";
        ?>
        </center>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>