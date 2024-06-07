<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Donation Form</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <h1>Donate Form</h1>
    <div id="intro">
    <form action="#" method="post">
        <center>
        <table cellpadding=5px>
            <tr>
                <td><label for="amount">Amount: </label></td>
                <td><input type="text" name="amount" id="amount" required><br></td>
            </tr>
            <tr>
                <td><label for="type">Type: </label></td>
                <td><select name="type" id="type" required>
                    <option value="one-time">One-time donation</option>
                    <option value="weekly">Weekly donation</option>
                    <option value="monthly">Monthly donation</option>
                    <option value="annually">Annually donation</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="card">Card: </label></td>
                <td><input type="text" name="card" placeholder="xxxx xxxx xxxx xxxx" required><br></td>
            </tr>
            <tr>
                <td><label for="expiry">Expiry: </label></td>
                <td><input type="text" name="expiry" placeholder="mm/yy" required><br></td>
            </tr>
            <tr>
                <td><label for="cvv">CVV: </label></td>
                <td><input type="text" name="cvv" id="cvv" placeholder="xxx" required><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="donate" value="Donate" class="submit-btn"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><button onclick="window.location.href='donation_fundraising.php'" class="back-btn">Back</button></td>
            </tr>
        </table>
        </center>
    <?php
    if (isset($_POST['donate'])) {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date_time = date('Y-m-d H:i:s');
        $amount = $_POST['amount'];
        $donation_method = "Debit/Credit Card";
        $type = $_POST['type'];
        $member_id = $_SESSION['member_id'];
        $sql = "INSERT INTO `donation` (`DateTime`, `Amount`, `Donation_Method`, `Type`, `MemberID`) VALUES ('$date_time', '$amount', '$donation_method', '$type', $member_id)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $card = $_POST['card'];
            echo "<script>alert('Thank you for your donation of $amount. Your card ending in " . substr($card, -4) . " has been charged.');
            window.location.href='donation_fundraising.php';</script>";
        } else {
            echo "Error; ".mysqli_error($conn);
        }
    }
    ?>
    </form>
    </div>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>