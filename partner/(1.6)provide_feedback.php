<?php
include 'header.php';
echo "<br>";
include 'topnav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Provide Feedback</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #table{
            width: 80%;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 400px;
            padding: 0px 100px;
            display: absolute;
            overflow: auto;
            
        }
        
        #img {
            width: 40px;
            height: 40px;
        }

        .btn1 {
            background-color: #333333;
            color: #ffffff;
            width: 130px;
            margin: 1px;
            height: 50px;
            border-radius: 10px;
            cursor: pointer;
            display: inline-block;
            border:2px solid grey;
        }

        .btn1:hover {
            background-color: #fff;
            color: black;
            border: 2px solid grey;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div id="header">
        <h1>Provide Feedback</h1>
    </div>
    <center>
    <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </center>
    <br>
    <div id="table">
            <?php
            include 'connectDB.php';

            $PID = $_SESSION['partner_id'];

            echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
            echo "<tr bgcolor='#c7c2b6'>";
            echo "<th>Event ID</th>";
            echo "<th>Title</th>";
            echo "<th>Description</th>";
            echo "<th style='width:10%'>Start Date</th>";
            echo "<th>Duration of Event</th>";
            echo "<th>Status</th>";
            echo "<th>Edit</th>";
            echo "</tr>";

            $event_query = 
            "SELECT partner_event.`Partner_EventID`,
            partner_event.`PartnerID`,
            partner_event.`EventID`,
            partner_event.`Status`,
            events.`Title`,
            events.`Description`,
            events.`Start_Date`,
            events.`Duration`
            FROM `partner_event` 
            
            INNER JOIN `events` ON partner_event.`EventID` = events.`EventID`
            
            WHERE partner_event.`PartnerID` = '$PID';";

            $results=mysqli_query($connection,$event_query);

            while ($row = mysqli_fetch_assoc($results)) {
                $eventid = $row['EventID'];
                $title = $row['Title'];
                $description = $row['Description'];
                $start_date = $row ['Start_Date'];
                $duration = $row['Duration'];
                $status = $row['Status'];


                echo "<tr><td>$eventid</td>";
                echo "<td>$title</td>";
                echo "<td>$description</td>";
                echo "<td>$start_date</td>";
                echo "<td>$duration</td>";

                if ($status == "Ongoing"){
                    echo "<th><font color='#598268'>$status</font></th>";
                    echo "<td></td>";

                } else {
                    echo "<th><font color='#496ead'>$status</font></th>";

                    echo "<td>";
                    ?>

                    <a href="feedback.php?eventid=<?php echo $row['EventID']; ?>">

                    <?php
                    echo "<img src='data:image/png;base64,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' id='img' alt=''>";
                    echo "</a>";
                    echo "</td>";
                }  
                echo"</tr>";        
            
            }
            
            echo"</table>";
            ?>
        </div>
    </div>
    <br><br><br><br>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>