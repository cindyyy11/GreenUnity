<?php
include 'header.php';
echo "<br>";
include 'topnav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Impact Reports</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #wrap{
            width: 500px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            height: 150px;
            display: absolute;

        }

        #table{
            width: 90%;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 95%;
            padding: 0px 0px;
            display: inline-block;
            overflow: auto;
            
        }

        #wrap_table{
            width: 600px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 400px;
            background-color: #333333;
            padding:  40px  10px;
            display: absolute;
            border-radius: 50px;
            text-align: center;
        }

        .search{
            width: 90%;
            padding: 20px;
            height: 60px;
            display: inline-block;
            text-align: left;
        }

        button{
            background-color: #333333;
            color: #ffffff;
            width: 130px;
            margin: 1px;
            height: 50px;
            border-radius: 10px;
            cursor: pointer;
            display: inline-block;
            border:2px solid grey;
        }

        button:hover {
            background-color: #fff;
            color: black;
            border: 2px solid grey;
            font-weight: bold;
        }
    
        #selectedbtn {
            background-color: #fff;
            color: black;
            border: 2px solid grey;
            font-weight: bold;
            cursor: default;
        } 

        #img {
            height: 30px;
            width: 30px;

        }

    </style>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>Impact Reports</h1>
        </div>
        <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
    </div>
        <br>
    <div id="wrap_table">
        <div id="table">
            <?php
            include 'connectDB.php';
            
            echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
            echo "<tr bgcolor='#c7c2b6'>";
            echo "<th style='width:60%'>Title</th>";
            echo "<th style='width:30%'>File Size</th>";
            echo "<th style='width:10%'>Download</th>";
            echo "</tr>";

            $report_query = 
            "SELECT * FROM `impact_report`";

            $results=mysqli_query($connection,$report_query);

            while ($row = mysqli_fetch_assoc($results)) {
                $title = $row['Report_Name'];
                $name = $row['Report_FileName'];
                $size = $row ['Report_FileSize'];


                echo "<tr><td><b>$title Impact Report<b></td>";
                echo "<td>$size</td>";
                echo "<td>";
                echo "<a href='reports/$name' download = '$title'>";
                echo "<img src='data:image/png;base64,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' id='img' alt=''>";
                echo "</a>";
                echo "</td></tr>";
                }
                
            echo"</tr>";
            echo"</table>";
            ?>
        </div>
    </div>

    <div class="search"></div>

    <?php
    mysqli_close($connection)
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
