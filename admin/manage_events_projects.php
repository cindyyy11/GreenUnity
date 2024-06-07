<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="style.css">
    <title>Manage Events and Projects</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <center>
    <h1>Manage Events and Projects</h1>
    <br>
    <h2>Create an Event/a Project</h2>
    <button onclick="window.location.href='create_events_projects.php'" class="btn1">Create Event/Project</button><br><br>
    <h2>Edit Events and Projects</h2>
    <button onclick="window.location.href='view_events_projects.php'" class="btn1">Edit events and projects</button>
    </center>
    </div>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>