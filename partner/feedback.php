<?php
include 'connectDB.php';
$eventid = $_GET['eventid'];
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
            width: 100%;
            align-items: center;
            justify-content: center;
            text-align: left;
            height: 600px;
            padding: 10px 100px;
            display: absolute;
            
        }
        
        input[type=text], select{
            width: 350px;
            height: 50px;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 10px;
            box-sizing: border-box;
        }


        input[type=submit] {
            padding: 7px 15px;
            border: 2px solid grey;
            background-color: #333;
            color: white;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            padding: 7px 15px;
            border: 2px solid grey;
            background-color: #fff;
            color: black;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
        }
        .rangeslider, input[type=range] {
            border: 2px solid black;
            width: 400px;
            cursor: pointer;
        }

        input[type=range]:hover {
            color: black;
            margin: 2px;
            cursor: pointer;
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

    </style>
</head>
<body>
    <div id="header">
        <h1>Provide Feedback</h1>
    </div>
    <center>
    <button onclick="window.location.href='(1.6)provide_feedback.php'" class="btn1">Back</button>
    </center>
    <div id="table">
        <form action="" method="post">
            
            <b>Event Name :</b> 
            <?php echo $eventid; ?>
            <br><br>

            <b>Date :</b> 
            <?php echo $today = date("Y-m-d"); ?>
            <br><br>

            <b>Feedback Description : </b>
            <br>
            <textarea name="description" id="" cols="50"  rows="10" wrap="hard" maxlength="255" required placeholder="Description"></textarea>
            <font color="red" size="2px">*maximum word limit: 255 letters</font>
            <br><br>

            <b>Rating : </b>
            <output id="num">0</output>/10
            <br>
            <input type="range" value="0" max="10" oninput="num.value = this.value" name="rating">
            <br><br>

            <b>Type of Event Feedback : </b>
            <br>
            <label for="complement">
                <input type="radio" name="type" id="complement" value="Complement">
                Complement
            </label>
            <label for="suggestion">
                <input type="radio" name="type" id="suggestion" value="Suggestion">
                Suggestion
            </label>
            <br><br>

            <b>Status of Event : </b>
            <br>
            <label for="status">
                <select id="status" name="status" class="form-control">
                    <option value="Room for Improvement">Room for Improvement</option>
                    <option value="Success">Success</option>
                </select>
            </label>
            <br><br>



            <input type="submit" value="SUBMIT" name="submitbtn">
            </form>

            <?php
            if(isset($_POST['submitbtn'])){
                $PID = $_SESSION['partner_id'];
                $description = $_POST['description'];
                $rating = $_POST['rating'];
                $type = $_POST['type'];
                $status = $_POST['status'];

                

            
                $feedback = "INSERT INTO `partner_feedback`(`Date`, `Description`, `Rating`, `Type`, `Status`, `PartnerID`, `EventID`) VALUES ('$today','$description','$rating','$type','$status','$PID','$eventid')";

                if (mysqli_query($connection,$feedback)) {
                    echo "<br><h1>Successful Feedback Submittion</h1>";
                    echo "<br><br><br><br><br>";
                   header("Refresh: 1; url=(1.6)provide_feedback.php");

                } else {
                    echo "<script type='text/javaScript'>";
                    echo "alert ('Error in submittion')";
                   echo "</script>";
                }
            }
            ?>

        
    </div>
    <br><br><br><br><br>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
