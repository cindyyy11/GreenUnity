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
    <title>Oversee Project</title>
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
            height: 300px;
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
    <div id="wrap">
        <div id="header">
            <h1>Oversee Project</h1>
        </div>
        <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </div>
    <br>
    <div id="table">
        <?php
        include 'connectDB.php';

        $PID = $_SESSION['partner_id'];
        
        echo "<center>";
        echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
        echo "<tr bgcolor='#c7c2b6'>";
        echo "<th>Project ID</th>";
        echo "<th>Title</th>";
        echo "<th>Description</th>";
        echo "<th style='width:10%'>Start Date</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo "</center>";

        $project_query = 
        "SELECT partnership.`PartnershipID`,
        partnership.`PartnerID`,
        partnership.`ProjectID`,
        partnership.`Status`,
        projects.`Title`,
        projects.`Description`,
        projects.`Start_Date`
        FROM `partnership` 
        
        INNER JOIN `projects` ON partnership.`ProjectID` = projects.`ProjectID`
        
        WHERE partnership.`PartnerID` = '$PID';";

        $results=mysqli_query($connection,$project_query);

        while ($row = mysqli_fetch_assoc($results)) {
            $projectid = $row['ProjectID'];
            $title = $row['Title'];
            $description = $row['Description'];
            $start_date = $row ['Start_Date'];
            $status = $row['Status'];


            echo "<tr><td>$projectid</td>";
            echo "<td>$title</td>";
            echo "<td>$description</td>";
            echo "<td>$start_date</td>";

            if ($status == "Ongoing"){
                echo "<th><font color='#598268'>$status</font></th>";
            } else {
                echo "<th><font color='#496ead'>$status</font></th>";
            }
            echo"</tr>";
        }               
        
        echo"</table>";
        ?>
    </div>

    <div class="search"></div>
    <?php
    mysqli_close($connection)
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
