<?php
include 'header.php';
echo "<br>";
echo "<div id='content'>";
include 'topnav.php';
$member_id = $_SESSION['member_id'];
$sql = "SELECT * FROM donation WHERE MemberID = '$member_id'";
$result = mysqli_query($conn, $sql);
echo "<link rel='icon' href='images/GreenUnity logo.png'/>";
echo "<h1>Donation History</h1>";
echo "<div id='intro'>";
echo "</div>";
echo "<center>";
if (mysqli_num_rows($result) > 0) {
    $no = 0;
    echo "<table cellpadding=5px style='border-collapse: collapse; text-align: center;'>";
    echo "<col width='100'>";
    echo "<col width='150'>";
    echo "<col width='100'>";
    echo "<col width='230'>";
    echo "<col width='80'>";
    echo "<tr>";
    echo "<td><a href='donation_fundraising.php'><button class='back-btn'>Back</button></a><br><br></tr>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Donation ID</th>";
    echo "<th>Date</th>";
    echo "<th>Amount</th>";
    echo "<th>Donation Method</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $no++;
        $date_time = date_create($row['DateTime']);
        $row['DateTime'] = date_format($date_time, 'd M Y');
        echo "<tr>";
        echo "<td>" . $no. "</td>";
        echo "<td>" . $row['DateTime'] . "</td>";
        echo "<td>" . $row['Amount'] . "</td>";
        echo "<td>" . $row['Donation_Method'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No donation history";
} 
echo "</center>";
echo "</div>";
include "footer.php";
?>