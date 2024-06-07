<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Edit Post Form</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <h1>Edit Post</h1>
    <br><br>
    <?php
    include 'db_conn.php';
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM post WHERE PostID = $post_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div id='intro'>
    <form action='#' method='POST'>
    <center>
    <table cellpadding=5px>
    <tr>
    <input type='hidden' name='post_id' value='<?php echo $row['PostID']?>'></td>
    <td><label for='title'>Title: </label></td>
    <td><input type='text' name='title' value='<?php echo $row['Title']?>'></td>
    </tr>
    <tr>
    <td><label for='description'>Description: </label></td>
    <td><textarea name='description'><?php echo $row['Description']?></textarea></td>
    </tr>
    <tr>
    <td></td>
    <td><input type='submit' name='Edit' value='Edit' class="submit-btn"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="button" onclick="window.location.href='view_own_posts.php'" value="Back" class="back-btn"></td>
    </tr>
    </table>
    </center>
    </form>
    </div>

    <?php
    if (isset($_POST['Edit'])) {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date_time = date('Y-m-d H:i:s');
        $title = $_POST['title'];
        $description = $_POST['description'];
        $post_id = $_POST['post_id'];
        $sql1 = "UPDATE `post` SET `Title`='$title', `Description`='$description', `DateTime` = '$date_time' WHERE PostID = $post_id";
        if (mysqli_query($conn, $sql1)) {
            echo "<script>alert('Record updated successfully');
            window.location.href='community_involvement.php';</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>