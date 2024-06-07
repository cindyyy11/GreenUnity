<?php
    include 'session.php';
    $project_id = $_GET['project_id'];
    $user_id = $_SESSION['member_id'];
    $checking = "SELECT * FROM `participation` WHERE ProjectID = $project_id && MemberID = $user_id";
    $result1 = mysqli_query($conn, $checking);
    if (mysqli_num_rows($result1) > 0) {
        echo "<script>alert('You have already joined the project! You can only send the submission once. Thank you!');
                window.location.href='conservation_projects.php';</script>";
    } else {
        $sql = "INSERT INTO `participation` (`Status`, `MemberID`, `ProjectID`) VALUES ('Success', $user_id, $project_id)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('You have joined the project! Thank you!');
                    window.location.href='conservation_projects.php';</script>";
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