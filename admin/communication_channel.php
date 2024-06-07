<?php
include 'header.php';
include 'topnav.php';

if(isset($_POST['submit'])) {
    // Get form data
    $partner_name = $_POST['partner_name'];
    $message = $_POST['message'];
    
    // Save the message via email

    echo "<div id='content'>";
    echo "<br><br>";
    echo "<div class='container'>";
    echo "<h2>Message Sent</h2>";
    echo "<p>Thank you, $partner_name, for your message:</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    echo "</div>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Manage Communication Channel</title>
</head>
<body>
    <div id="content">
    <br><br>
    <link rel="stylesheet" href="comm_chan.css">
    <div class="container">
        <h1>Manage Communication Channel</h1>
        <form action="" method="post">
            <label for="partner_name">Partner Name:</label>
            <input type="text" id="partner_name" name="partner_name" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
