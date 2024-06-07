<?php
// start session
session_start();

// connect to database
include 'db_conn.php';

// uses the session variable to get the user's email
$email = $_SESSION['email'];

// uses the session variable to get the user's data
$mysql = mysqli_query($conn, "SELECT * FROM admin WHERE Email = '$email'");
$row = mysqli_fetch_array($mysql);

// if the user is not logged in, redirect to login page
if (!isset($email)) {
    $mysql = mysqli_query($conn, "SELECT * FROM member WHERE Email = '$email'");
    $row = mysqli_fetch_array($mysql);
    if (!isset($email)) {
        $mysql = mysqli_query($conn, "SELECT * FROM partner WHERE Email = '$email'");
        $row = mysqli_fetch_array($mysql);
        if (!isset($email)) {
            $mysql = mysqli_query($conn, "SELECT * FROM admin WHERE Email = '$email'");
            $row = mysqli_fetch_array($mysql);
            if (!isset($email)) {
                header("Location: ../Index/index-L.php");
            }
        }
    }
}
?>