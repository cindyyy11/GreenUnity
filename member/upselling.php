<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Sell Item Form</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Sell Item</h1>
        <div id="intro">
            <form action="#" method="post">
                <center>
                    <table cellpadding=5px>
                        <tr>
                            <td><label for="name">Name: </label></td>
                            <td><input type="text" name="name" id="name" required><br></td>
                        </tr>
                        <tr>
                            <td><label for="type">Type: </label></td>
                            <td><select name="type" required>
                                <option value="clothes">Clothes</option>
                                <option value="accessories">Accessories</option>
                                <option value="daily-essentials">Daily Essentials</option>
                                <option value="others">Others</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label for="unit-price">Unit Price: </label></td>
                            <td><input type="text" name="unit-price" id="unit-price" required><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="sell" value="Sell" class="submit-btn"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button onclick="window.location.href='merchandise.php'" class="back-btn">Back</button></td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
        <?php
            if (isset($_POST['sell'])) {
                $name = $_POST['name'];
                $category = "Upselling";
                $type = $_POST['type'];
                $unit_price = $_POST['unit-price'];
                $sql = "INSERT INTO `products` (`Name`, `Category`, `Type`, `Unit_Price`) VALUES ('$name', '$category', '$type', $unit_price)";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Thank you for selling!');
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