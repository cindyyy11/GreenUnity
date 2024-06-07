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
            <a href="(1.4)manage_event.php">
                <button>Events</button>
            </a>
            <button id="selectedbtn">Submitted Plans</button>
            <br><br>
        </div>    

        
        <div id="table">
            <?php
            include 'connectDB.php';

            $PID = $_SESSION['partner_id'];

            echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
            echo "<tr bgcolor='#c7c2b6'>";
            echo "<th>Title</th>";
            echo "<th>Description</th>";
            echo "<th>Submitted Date</th>";
            echo "<th style='width:10%'>Event Plan Status</th>";
            echo "</tr>";

            $submitted_query = 
            "SELECT * FROM `plan_event` WHERE `PartnerID` = '$PID';";

            $results=mysqli_query($connection,$submitted_query);

            while ($row = mysqli_fetch_assoc($results)) {
                $title = $row['Title'];
                $description = $row['Description'];
                $submitted_date = $row ['Submitted_Date'];
                $status = $row['Status'];


                echo "<td>$title</td>";
                echo "<td>$description</td>";
                echo "<td>$submitted_date</td>";

                    if ($status == "Accepted"){
                        echo "<th><font color='#598268'>$status</font></th></tr>";
                    } elseif ($status == "Pending") {
                        echo "<th><font color='#496ead'>$status</font></th></tr>";
                    } else {
                        echo "<th><font color='red'>$status</font></th></tr>";
                    }
                }
                
            echo"</tr>";
            echo"</table>";
            ?>
        </div>
    </div>

    <div class="search"></div>

    <div id="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-tiktok"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>&copy; <?php echo date("Y"); ?> GreenUnity. All rights reserved.</p>
    </div>
    
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

    <?php
    mysqli_close($connection)
    ?>
</body>
</html>
