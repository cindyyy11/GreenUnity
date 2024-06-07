<?php
    include 'session.php';
    $form_id = $_GET['form_id'];
    $user_id = $_SESSION['member_id'];
    $sql = "INSERT INTO `vote` (`Status`, `MemberID`, `Crowdsourcing_FormID`) VALUES ('Success', $user_id, $form_id)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('You have voted for this suggestion! Thank you!');
                window.location.href='conservation_projects.php';</script>";
    } else {
        echo "Error; ".mysqli_error($conn);
    }
?>