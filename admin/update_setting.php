<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="up_setting.css">
    <?php 
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    include 'db_conn.php';
    ?>
</head>
<body>
    <link rel="stylesheet" href="up_setting.css">
    <div class="container">
        <?php
        $admin_id = $_SESSION['admin_id'];
        $sql = "SELECT * FROM admin WHERE AdminID = '$admin_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Update Profile</h1>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?>" required><br><br>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['Email']; ?>" required><br><br>

            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="" required><br><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $row['Age']; ?>" required><br><br>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="<?php echo $row['Position']; ?>" required><br><br>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="<?php echo $row['Contact']; ?>" required><br><br>
            
            <button type="submit" name="submit">Update Profile</button>
        </form>
        
        <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $age = $_POST['age'];
            $position = $_POST['position'];
            $contact = $_POST['contact'];
            $sql = "UPDATE `admin` SET `Name`='$name', `Email`='$email', `Password`='$password', `Age`=$age, `Position`='$position', `Contact`='$contact' WHERE AdminID='$admin_id'";
            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Profile updated successfully');
                window.location.href='Dashboard-Admin.php';</script>";
            } else {
                echo "Error updating profile: " . mysqli_error($conn);
            }
        }
        ?>
    </div>
    </div>
</body>
<footer>
    <?php include 'footer.php'?>
</footer>
</html>
