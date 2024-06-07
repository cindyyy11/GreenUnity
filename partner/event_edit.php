<?php
include "connectDB.php";
include 'header.php';
echo "<br>";
include 'topnav.php';
$eventid = $_GET['eventid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Edit Event</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input[type=submit] {
            padding: 7px 15px;
            border: 2px solid grey;
            background-color: #fff;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            padding: 7px 15px;
            border: 2px solid grey;
            background-color: #333;
            color: white;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .search{
            width: 90%;
            padding: 20px;
            height: 60px;
            display: inline-block;
            text-align: left;
        }

        #wrap{
            width: 500px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            height: 150px;
            display: absolute;

        }
        #wrap_table{
            width: 350px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 320px;
            background-color: #333333;
            color: white;
            padding:  40px  50px;
            display: absolute;
            border-radius: 50px;
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
            <h1>Event Edit</h1>
        </div>
        <button onclick="window.location.href='(1.4)manage_event.php'" class="btn1">Back</a>
    </div>
        <br>
    <div id="wrap_table">
    <?php
        $event = "SELECT * FROM `events` WHERE `EventID` = '$eventid'";

        $results = mysqli_query($connection,$event);
        if (mysqli_num_rows($results) == 1) {
            $row = mysqli_fetch_assoc($results);
        ?>

        <form action="" method="post">
            <b>Event ID : </b><?php echo $eventid ;?> 
            <br><br>

            <b>Title : </b><?php echo $row['Title']; ?>
            <br><br>

            <b>Description : </b><?php echo $row['Description'] ?>
            <br><br>

            <b>Start Date : </b><input type="date" name="date" value = "<?php echo $row['Start_Date'] ?>" required>
            <br><br>

            <b>Duration : </b><input type="text" name="duration" value = "<?php echo $row['Duration'] ?>" required maxlength="2">
            <br><br>

            <input type="submit" value=" UPDATE " name="btnupdate">
        </form>
    <?php
    
        }

            if (isset($_POST['btnupdate'])) {
                $date = $_POST['date'];
                $duration = $_POST['duration'];

                if (preg_match('/^[1-9][0-9]*$/',$_POST['duration'])) {
                
                    $updatequery = "UPDATE `events` SET `Start_Date`='$date',`Duration`='$duration' WHERE `EventID` = '$eventid'";

                    if (mysqli_query($connection,$updatequery)) {
                        echo "<br>Successfully Updated Event";
                        header("Refresh: 3; url=(1.4)manage_event.php");

                    } else {
                        echo "<script type='text/javaScript'>";
                        echo "alert ('Error in update')";
                        echo "</script>";
                    }
                } else {
                    echo "<script type='text/javaScript'>";
                    echo "alert ('Input Error, please ensure that the duration is in integer format.')";
                    echo "</script>";
                }
            }
            mysqli_close($connection)

    ?>
    </div>

    <div class="search"></div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>