<?php
// Include header and navigation bar
include 'header.php';
echo "<br>";
echo "<div id='content'>";
include 'topnav.php';

// Fetch financial data from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>View Products</h1>
        <center>
        <?php
        if(mysqli_num_rows($result) > 0) {
            echo "<table cellpadding=5px border=1px style='border-collapse: collapse;'>";
            echo "<col width='100'>";
            echo "<col width='200'>";
            echo "<col width='200'>";
            echo "<col width='200'>";
            echo "<col width='100'>";
            echo "<tr>";
            echo "<th>ProductID</th>";
            echo "<th>Name</th>";
            echo "<th>Category</th>";
            echo "<th>Type</th>";
            echo "<th>Unit Price</th>";
            echo "</tr>";
            $total = 0;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ProductID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Unit_Price'] . "</td>";
                $total += $row['Unit_Price'];
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td colspan='4' style='text-align: right;'><strong>Total:</strong></td>";
            echo "<td>" . $total . "</td>";
            echo "</table>";
        } else {
            echo "No product available";
        }
        ?>
        </center>
    </div>
    </div>
</body>
</html>

<?php
// Include footer
include 'footer.php';
?>
