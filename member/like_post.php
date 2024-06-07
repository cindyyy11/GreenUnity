<?php
include 'session.php';
$post_id = $_GET['post_id'];
$member_id = $_SESSION['member_id'];
$checking = "SELECT * FROM likes WHERE PostID = $post_id AND MemberID = $member_id";
$checking_result = mysqli_query($conn, $checking);
if (mysqli_num_rows($checking_result) > 0)
{
    echo "<script>alert('You have already liked this post')</script>";
    echo "<script>window.location.href='post_details.php?post_id=$post_id'</script>";
} else {
    $sql = "INSERT INTO `likes` (`PostID`, `MemberID`) VALUES ($post_id, $member_id)";
    if (mysqli_query($conn, $sql))
    {
        echo "<script>alert('Post liked successfully')</script>";
        echo "<script>window.location.href='post_details.php?post_id=$post_id'</script>";
    } else {
        echo "<script>alert('Error')</script>";
        echo "<script>window.location.href='post_details.php?post_id=$post_id'</script>";
    }
}