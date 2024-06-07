<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Event/Workshop Details</title>
</head>
<body>
    <?php
    include 'header.php';
    echo '<br>';
    echo '<div id="content">';
    include 'topnav.php';
    $event_id = $_GET['event_id'];
    $query = "SELECT * FROM events WHERE EventID = $event_id";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    echo "<div id='intro'>";
    echo "<h1>".$row['Title']."</h1>";
    echo "<p>".$row['Description']."</p>";
    echo "<p>Date: ".$row['Start_Date']."</p>";
    $closed_crew_date = new DateTime($row['Start_Date']);
    $closed_crew_date -> modify('-30 days');
    echo "<p>Crew registration closes by: ".$closed_crew_date->format('Y-m-d')."</p>";
    $closed_register_date = new DateTime($row['Start_Date']);
    $closed_register_date -> modify('-14 days');
    echo "<p>Join registration closes by: ".$closed_register_date->format('Y-m-d')."</p>";
    echo "<a href='event_workshops.php'><button class='back-btn'>Back</button></a>";
    $user_id = $_SESSION['member_id'];
    $query1 = "SELECT * FROM `events_crew_application_form` WHERE EventID = $event_id && MemberID = $user_id";
    $query2 = "SELECT * FROM `join` WHERE EventID = $event_id && MemberID = $user_id";
    $query3 = "SELECT * FROM `feedback_rating` WHERE EventID = $event_id && MemberID = $user_id";
    if (date("Y-m-d") <= $closed_crew_date->format('Y-m-d') && (mysqli_num_rows(mysqli_query($conn, $query1)) == 0)) {
        echo "<br><br>";
        echo "<a href='join_crew_form.php?event_id=".$row['EventID']."'><button class='btn2'>Join Event as Crew</button></a>";
    }
    if ((date("Y-m-d") <= $closed_register_date->format('Y-m-d')) && (mysqli_num_rows(mysqli_query($conn, $query2)) == 0)) {
        echo "<br><br>";
        echo "<a href='join_event_form.php?event_id=".$row['EventID']."'><button class='btn2'>Join Event</button></a>";
    }
    if ((date("Y-m-d") > $row['Start_Date']) && (mysqli_num_rows(mysqli_query($conn, $query2)) > 0) && (mysqli_num_rows(mysqli_query($conn, $query3)) == 0)) {
        echo "<br><br>";
        echo "<a href='post_event_feedback_form.php?event_id=".$row['EventID']."'><button class='btn2'>Submit feedback</button></a>";
    }
    echo '<br><br>';
    echo '</div>';
    echo '<h1>Suggested events and workshops</h1>';
    include 'event_workshop_card.php';
    echo '</div>';
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>