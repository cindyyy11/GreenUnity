<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Post details</title>
</head>
<body>
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
            include 'db_conn.php';
            $post_id = $_GET['post_id'];
            $sql = "SELECT * FROM post WHERE PostID = $post_id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<div id='intro'>";
            echo "<h1>".$row['Title']."</h1>";
            echo "<p>".$row['Description']."</p>";
            $like_sql = "SELECT * FROM likes WHERE PostID = $post_id";
            $comment_sql = "SELECT * FROM comment WHERE PostID = $post_id";
            $like_result = mysqli_query($conn, $like_sql);
            $comment_result = mysqli_query($conn, $comment_sql);
            $like_count = mysqli_num_rows($like_result);
            $comment_count = mysqli_num_rows($comment_result);
            echo "<p>".$like_count." likes</p>";
            echo "<p>".$comment_count." comments</p>";
        ?>
        <div class="post">
            <div class="icons">
                <button class="like-btn" onclick="window.location.href='like_post.php?post_id=<?php echo $post_id; ?>'"><a href="like_post.php?post_id=<?php echo $post_id; ?>" class="fas fa-thumbs-up"></a>Like</button>
                <button class="comment-btn" onclick="window.location.href='comment_post.php?post_id=<?php echo $post_id; ?>'"><a href="comment_post.php?post_id=<?php echo $post_id; ?>" class="fas fa-comment"></a>Comment</button>
            </div>
        </div>
        <a href='community_involvement.php'><button class="back-btn">Back</button></a>
        <br><br>
        <?php
            include 'comment_section.php';
        ?>
        </div>
        <br><br><br>
        <h1>Other related posts</h1>
        <?php
            include 'post_card.php';
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>