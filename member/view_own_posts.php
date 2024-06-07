<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>View Posts</title>
</head>
<body>
    <div id="content">
        <?php
            include 'header.php';
            echo "<br>";
            echo "<div id='content'>";
            include 'topnav.php';
        ?>
        <h1>Your Post</h1>
        <center>
            <a href='community_involvement.php'><button class="back-btn">Back</button></a>
        </center>
        <?php
            function limit_text($Content, $limit) {
                if (str_word_count($Content, 0) > $limit) {
                    $words = str_word_count($Content, 2);
                    $pos = array_keys($words);
                    $Content = substr($Content, 0, $pos[$limit]) . '...';
                }
                echo $Content;
            }
            $user_id = $_SESSION['member_id'];
            $sql = "SELECT * FROM post WHERE MemberID = $user_id";
            $result = mysqli_query($conn, $sql);
            echo "<div id='content'>";
            echo '<section id="post-list" class="container mt-5">';
            if (mysqli_num_rows($result) > 0)
                {
                    echo "<div class='row'>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $postContent = $row['Description'];
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row['Title']."</h3>";
                        echo "<p class='card-text'>".limit_text($postContent, 10)."</p>";
                        echo "<a href='edit_post.php?post_id=".$row['PostID']."' class='btn btn-primary'>Edit</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No posts available</p>";
                }
            echo '</section>';
            echo "</div>";
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>