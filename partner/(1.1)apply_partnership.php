<?php
include 'file_upload.php';
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
    <title>Partnership Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="(1.1)apply_partnership.css">
</head>
<body>
    <div id="header">
        <h1>APPLY FOR PARTNERSHIP</h1><br><br>

    </div>
    <div id="content">
        <center>
    <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </center>
    <br>
        <form action="" method="post" enctype="multipart/form-data">
            
            <b>Company Name :</b> 
            <?php echo $_SESSION['name'];
            $PID = $_SESSION['partner_id'];
            ?>
            <br><br>

            <input type="hidden" name="PID" value='<?php echo $PID?>'>
            

            <b>Proposed Partnership Title</b>
            <br>
            <input type="text" name="title" id="" required placeholder="Title" maxlength="100" size=50>
            <br>
            <font color="red" size="2px">*maximum word limit: 100 letters</font>
            <br><br>

            <b>Partnership Proposal</b>
            <p>
                This proposal <B>MUST</B> include several main points: 
                <i>
                <ol type="number">
                    <li>Short Introduction</li>
                    <li>Description of Partnership Proposed</li>
                    <li>Reasons this partnership should occur</li>
                    <li>Signature and Chop of Company for proof of consent</li>
                </ol>
                </i>
                Submit this proposal in <b>PDF format.</b>
            </p>
            <input type="file" name="proposal" required> 
            <br><br>

            <input type="submit" value="SUBMIT" name="submitbtn">
            <br><br><br><br><br><br>
        </form>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>