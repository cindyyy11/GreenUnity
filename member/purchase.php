<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Purchase Form</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Purchase</h1>
        <div id="intro">
            <?php
                include 'db_conn.php';
                $product_id = $_GET['product_id'];
                $sql = "SELECT * FROM products WHERE ProductID = $product_id";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo "<center>";
                echo "<h2>Product: " . $row['Name'] . "</h2>";
                echo "<h3>Price: " . $row['Unit_Price'] . "</h3>";
                $unit_price = (float)$row['Unit_Price'];
            ?>
            <form action="#" method="post">
                <table cellpadding=5px>
                    <tr>
                        <td><label for="quantity">Quantity: </label></td>
                        <td><input type="number" name="quantity" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="address">Shipping address: </label><br></td>
                        <td><textarea name="address" rows=5 columns=30 required></textarea><br></td>
                    </tr>
                    <tr>
                        <td><label for="remarks">Remarks: </label></td>
                        <td><input type="text" name="remarks"><br></td>
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
                        <td><input type="text" name="cvv" placeholder="xxx" required><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="purchase" value="Purchase" class="submit-btn"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="window.location.href='merchandise.php'" class="back-btn">Back</button></td>
                    </tr>
                </table>
            </form>
        </div>
        </center>
        <?php
        if (isset($_POST['purchase'])) {
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $date_time = date('Y-m-d H:i:s');
            $quantity = (int)$_POST['quantity'];
            $amount = $unit_price * $quantity;
            $address = $_POST['address'];
            $remarks = $_POST['remarks'];
            $payment_method = "Debit/Credit Card";
            $member_id = $_SESSION['member_id'];
            $sql = "INSERT INTO `orders` (`Order_Date`, `Quantity`, `Total_Amount`, `Shipping_Address`, `Remarks`, `Payment_Method`, `MemberID`, `ProductID`) VALUES ('$date_time', $quantity, $amount, '$address', '$remarks', '$payment_method', $member_id, $product_id)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $card = $_POST['card'];
                echo "<script>alert('Thank you for your purchasing of $amount. Your card ending in " . substr($card, -4) . " has been charged.');
                window.location.href='merchandise.php';</script>";
            } else {
                echo "Error; ".mysqli_error($conn);
            }
        }
        ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>