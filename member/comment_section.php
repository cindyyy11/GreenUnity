<?php
    include 'db_conn.php';
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM comment WHERE PostID = $post_id ORDER BY CommentID DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        echo "<section id='post-list' class='container mt-5'>";
        echo "<div class='row'>";
        while($row = mysqli_fetch_assoc($result))
        {
            $member_id = $row['MemberID'];
            $member_sql = "SELECT * FROM member WHERE MemberID = $member_id";
            $member_result = mysqli_query($conn, $member_sql);
            $member_row = mysqli_fetch_assoc($member_result);
            echo "<div class='col-md-6'>";
            echo "<div class='card mb-4'>";
            echo "<div class='card-body'>";
            echo "<h3 class='card-title'>".$member_row['Name']."</h3>";
            echo "<p class='card-text'>".$row['Content']."</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</section>";
    } else {
        echo "<p>No comments available</p>";
    }
?>