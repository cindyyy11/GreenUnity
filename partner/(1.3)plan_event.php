<?php
include 'connectDB.php';
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
    <title>Plan Event</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="(1.1)apply_partnership.css">
    <style>
        
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
        <h1>PLAN EVENT</h1>
    </div>
    <center>
    <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </center>
    <br>
    <div id="content">
        <form action="" method="post">
            
            <b>Company Name :</b> 
            <?php echo $_SESSION['name']; ?>
            <br><br>
            
            <b>Proposed Event Title</b>
            <br>
            <input type="text" name="title" id="" required placeholder="Title" maxlength="100">
            <br>
            <font color="red" size="2px">*maximum word limit: 100 letters</font>
            <br><br>


            <b>Event Plan Description</b>
            <p>
                <B>CONSIDER</B> these points when describing the event: 
                <i>
                <ol type="number">
                    <li>Short description of Event Proposed</li>
                    <li>How does this event impact the society</li>
                </ol>
                </i>
                Submit this in <b>less than 1000 characters</b>
            </p>
            <textarea name="description" id="" cols="50"  rows="10" wrap="hard" maxlength="1000" required placeholder="Description"></textarea>

            <br><br>

            <input type="submit" value="SUBMIT" name="submitbtn">
            </form>

            <?php
            if(isset($_POST['submitbtn'])){
                $PID = $_SESSION['partner_id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $today = date("Y-m-d");

            
                $plan_event = "INSERT INTO `plan_event`(`PartnerID`, `Title`, `Description`, `Submitted_Date`, `Status`) VALUES ('$PID','$title','$description','$today','Pending')";

                if (mysqli_query($connection,$plan_event)) {
                    echo "<script type='text/javaScript'>";
                    echo "alert ('Successful event plan submission, please wait 3 to 5 working days for us to get back to you.')";
                   echo "</script>";

                } else {
                    echo "<script type='text/javaScript'>";
                    echo "alert ('Error in submittion')";
                   echo "</script>";
                }
            }
            ?>

        
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>