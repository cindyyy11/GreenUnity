<?php
    include 'session.php';
    $event_id = $_GET['event_id'];
    $user_id = $_SESSION['member_id'];
    $checking = "SELECT * FROM `join` WHERE EventID = $event_id && MemberID = $user_id";
    $result1 = mysqli_query($conn, $checking);
    if (mysqli_num_rows($result1) > 0) {
        echo "<script>alert('You have already joined the event! You can only send one submission. Thank you!');
                window.location.href='event_workshops.php';</script>";
    } else {
        $sql = "INSERT INTO `join` (`Status`, `MemberID`, `EventID`) VALUES ('Success', $user_id, $event_id)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('You have joined the event! Thank you!');
                    window.location.href='event_workshops.php';</script>";
        } else {
            echo "Error; ".mysqli_error($conn);
        }
    }
?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>