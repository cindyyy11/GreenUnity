<?php
include ('db_conn.php');
if(isset($_POST['signBtn'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = md5($_POST['password']); //md5 to encrypt password

    $check = "SELECT Email FROM member WHERE Email = '$email' AND Name = '$name'";
    $result = mysqli_query($conn, $check) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0)
    {
        echo '<script>
              alert("Your email is already registered. Please use another email.");
              window.location.href="login-sign.php";</script>';
    } else {
        $mysql = "INSERT INTO `member` (`Email`, `Password`, `Name`) VALUES ('$email', '$password', '$name')";
        if (mysqli_query($conn, $mysql)) {
        echo '<script>
              alert("Welcome abroad!! Please login to continue");
              window.location.href="login-sign.php";</script>';
        } else {
            echo "Error ; " . mysqli_error($conn); }
    }
}

//Close connection
mysqli_close($conn);
?>