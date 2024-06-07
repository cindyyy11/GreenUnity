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
    <title>Manage Event</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #wrap{
            width: 500px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            height: 150px;
            display: absolute;

        }

        #table{
            width: 95%;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 230px;
            padding: 10px 25px;
            display: block;
            overflow: auto;
            
        }

        #wrap_table{
            width: 1000px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 400px;
            background-color: #333333;
            padding:  0  10px;
            display: absolute;
            border-radius: 50px;
            text-align: center;
        }

        .search{
            width: 90%;
            padding: 20px;
            height: 60px;
            display: inline-block;
            text-align: left;
        }

        button{
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

        button:hover {
            background-color: #fff;
            color: black;
            border: 2px solid grey;
            font-weight: bold;
        }
    
        #selectedbtn {
            background-color: #fff;
            color: black;
            border: 2px solid grey;
            font-weight: bold;
            cursor: default;
        }

        #img {
            height: 30px;
            width: 35px;

        }

    </style>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>Manage Event</h1>
        </div>
        <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </div>
        <br>
    <div id="wrap_table">
        <div class="search">
            <button id="selectedbtn">Events</button>

            <a href="(1.4.1)submitted_event.php">
                <button>Submitted Plans</button>
            </a>
            <br><br>
        </div>    

        
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
                } else {
                    echo "<th><font color='#496ead'>$status</font></th>";
                }
                echo "<td>";
                ?>

                <a href="event_edit.php?eventid=<?php echo $row['EventID']; ?>">

                <?php

                echo '<img src="data:image/png;base64,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" id="img" alt="">';
                echo "</a>";
                echo "</td></tr>";
                }
                
            echo"</tr>";
            echo"</table>";
            ?>
        </div>
    </div>

    <div class="search"></div>
    <br><br>
    <?php
    mysqli_close($connection)
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
