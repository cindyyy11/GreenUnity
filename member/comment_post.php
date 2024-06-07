<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Create Comment Form</title>
</head>
<body>
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
            $post_id = $_GET['post_id'];
            $member_id = $_SESSION['member_id'];
        ?>
        <h1>Create comment</h1>
        <center><a href='post_details.php?post_id=<?php echo $post_id; ?>'><button class="back-btn">Back</button></a></center>
        <br>
        <form action="#" method="POST">
            <center>
                <table>
                    <tr>
                        <td><label for="content">Comment: </label></td>
                        <td><textarea name="content" placeholder="Write your comment here" cols="30" rows="10"></textarea><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit" class="submit-btn">Submit</button></td>
                    </tr>
                </table>
            </center>
        </form>
    
        <?php
        if ((isset($_POST['submit'])) and ($_POST['content']))
        {
            $content = $_POST['content'];
            $sql = "INSERT INTO `comment`(`Content`, `PostID`, `MemberID`) VALUES ('$content', $post_id, $member_id)";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Comment uploaded successfully!')</script>";
                echo "<script>window.location.href='community_involvement.php'</script>";
            } else {
                echo "<script>alert('Error')</script>";
                echo "<script>window.location.href='community_involvement.php'</script>";
            }
        }
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>