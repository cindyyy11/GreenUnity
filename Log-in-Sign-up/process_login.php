<?php
    session_start();
    include 'db_conn.php';
    if (isset($_POST['loginBtn'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM member WHERE Email = '$email' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['member_id'] = $row['MemberID'];
            $_SESSION['name'] = $row['Name'];
            $_SESSION['email'] = $row['Email'];
            echo "<script>alert('Login successful ".$_SESSION['name']."');
                  window.location.href='../member/Dashboard-Member.php';</script>";
        } else {
            $sql = "SELECT * FROM admin WHERE Email = '$email' AND Password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['admin_id'] = $row['AdminID'];
                $_SESSION['name'] = $row['Name'];
                $_SESSION['email'] = $row['Email'];
                echo "<script>alert('Login successful ".$_SESSION['name']."');
                      window.location.href='../admin/Dashboard-Admin.php';</script>";
            } else {
                $sql = "SELECT * FROM partner WHERE Email = '$email' AND Password = '$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['partner_id'] = $row['PartnerID'];
                    $_SESSION['name'] = $row['Company_Name'];
                    $_SESSION['email'] = $row['Email'];
                    echo "<script>alert('Login successful ".$_SESSION['name']."');
                        window.location.href='../partner/Dashboard-Partner.php';</script>";
                } else {
                    echo "<script>alert('Invalid email or password!');
                    window.location.href='login-sign.php';</script>";
                }
            }
        }
    }
    mysqli_close($conn);
?>