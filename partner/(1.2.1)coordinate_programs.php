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
    <title>Coordinate Programs</title>
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
            width: 1000px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 860px;
            overflow: scroll;
        }

        #wrap_table{
            width: 1050px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 1000px;
            background-color: #333333;
            padding:  0  20px;
            display: absolute;
            border-radius: 50px;
            text-align: center;            
        }

        .search{
            width: 1000px;
            padding: 20px;
            height: 40px;
            display: inline-block;
            text-align: left;
        }

        button{
            background-color: #333333;
            color: #ffffff;
            width: 100px;
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

    </style>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>Coordinate Programs</h1>
        </div>
        <button onclick="window.location.href='Dashboard-Partner.php'" class="btn1">Back</button>
        
           
    </div>
        <br>
    <div id="wrap_table">
        <div class="search">
            <button id="selectedbtn">Show All</button>

            <a href="(1.2.2)coordinate_search.php">
                <button>Search</button>
            </a>
        </div>    
        <div id="table">
            <?php include 'display.php' ?>
        </div>
    </div>

    <div class="search"></div>

<!--
                <script>
                    function search(){
                        document.getElementById("php").style.display = "block";
                    }

                    function open(){
                        document.getElementById("overlay").style.display = "block";
                        document.getElementById("overlay_box").style.display = "block";
                    }

                    function close(){
                        document.getElementById("overlay").style.display = "none";
                        document.getElementById("overlay_box").style.display = "none";
                    }
                </script>
    -->
              
    <?php
    mysqli_close($connection)
    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>