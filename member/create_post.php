<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Create Post Form</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Create Post</h1>
        <div id="intro">
            <form action="#" method="POST">
                <center>
                <table cellpadding=5px>
                    <tr>
                        <td><label for="post_title">Title:</label></td>
                        <td><input type="text" name="post_title" placeholder="Just write something short..." required><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="description">Description:</label></td>
                        <td><textarea name="description" value="description" placeholder="Write your content here" rows="5" cols="30" required></textarea><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="date_today">Date:</label></td>
                        <td><input type="text" name="date_today" value="<?php echo date('Y-m-d'); ?>" disabled><br><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Create Post" class="submit-btn"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" onclick="window.location.href='community_involvement.php'" value="Back" class="back-btn"></td>
                    </tr>
                </table>
                </center>
            </form>
        </div>
        <?php
            if (isset($_POST['Submit'])) {
                date_default_timezone_set('Asia/Kuala_Lumpur');
                $date_time = date('Y-m-d H:i:s');
                $title = $_POST['post_title'];
                $description = $_POST['description'];
                $user_id = $_SESSION['member_id'];
                $sql = "INSERT INTO `post`(`Title`, `Description`, `DateTime`, `MemberID`) VALUES ('$title', '$description', '$date_time', $user_id)";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        echo "<script>alert('Your post has been created successfully!');
                                window.location.href='community_involvement.php';</script>";
                    } else {
                        echo "Error; ".mysqli_error($conn);
                    }
            }
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>