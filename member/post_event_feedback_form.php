<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Feedback and Rating</title>
</head>
<body>
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
            echo "<h1>Feedback and Rating</h1>";
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
                            <td><label for="event_id">Event ID:</label></td>
                            <td><input type="text" name="event_id" value="<?php echo $event_id; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="event_name">Event Name:</label></td>
                            <td><input type="text" name="event_name" value="<?php echo $event_name; ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="date_today">Date:</label></td>
                            <td><input type="text" name="date_today" value="<?php echo date('Y-m-d'); ?>" disabled></td>
                        </tr>
                        <tr>
                            <td><label for="feedback">Feedback:</label><br></td>
                            <td><textarea name="feedback" value="description" placeholder="Write your feedback here" rows="5" cols="30" required></textarea><br><br></td>
                        </tr>
                        <tr>
                            <td><label for="rating">Rating:</label></td>
                            <td><input type="number" name="rating" value="rate" placeholder="1 to 10" min="1" max="10" required></td>
                        </tr>
                        <tr>
                            <td><label for="type">Type:</label></td>
                            <td><textarea name="feedback_type" value="type" placeholder="Suggestion/Complaint/Compliment...." rows="3" cols="30" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit Feedback" class="submit-btn"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" onclick="window.location.href='event_details.php?event_id=<?php echo $event_id; ?>';" value="Back" class="back-btn"></td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
        <?php
            if (isset($_POST['Submit'])) {
                $date = date('Y-m-d');
                $feedback = $_POST['feedback'];
                $rating = (int)$_POST['rating'];
                $type = $_POST['feedback_type'];
                $status = "Success";
                $user_id = $_SESSION['member_id'];
                $event_id = $_GET['event_id'];
            
                $checking = "SELECT * FROM `feedback_rating` WHERE EventID = $event_id && MemberID = $user_id";
                $result = mysqli_query($conn, $checking);
                if (mysqli_num_rows($result) > 0) {
                    echo "<script>alert('You have already submitted the feedback!');
                            window.location.href='event_workshops.php';</script>";
                } else {
                    $sql = "INSERT INTO `feedback_rating`(`Date`, `Description`, `Rating`, `Type`, `Status`, `MemberID`, `EventID`) VALUES ('$date', '$feedback', $rating, '$type', '$status', $user_id, $event_id)";
                    $result2 = mysqli_query($conn, $sql);
                    if ($result2) {
                        echo "<script>alert('Your feedback is submitted successfully, thank you!');
                                window.location.href='event_workshops.php';</script>";
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