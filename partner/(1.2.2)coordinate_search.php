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
            width: 95%;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 180px;
            padding: 10px 25px;
            display: block;
            overflow: auto;
            
        }

        #wrap_table{
            width: 1000px;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            height: 400px;
            background-color: #333333;
            padding:  0  10px;
            display: absolute;
            border-radius: 50px;
            text-align: center;
        }

        .search{
            width: 80%;
            padding: 20px;
            height: 110px;
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

        input[type=search], select{
            width: 80%;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 10px;
            box-sizing: border-box;
            resize: vertical;
        }

        input[type=submit] {
            padding: 7px 12px;
            border: 2px solid grey;
            background-color: #000;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            padding: 7px 15px;
            border: 2px solid grey;
            background-color: #fff;
            margin: 2px;
            border-radius: 10px;
            cursor: pointer;
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
        
        img {
            border-radius: 20px;
            height: 40px;
            width: 40px;
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
            <a href="(1.2.1)coordinate_programs.php">
                <button>Show All</button>
            </a>
            <button id="selectedbtn">Search</button>
            <br><br>
            <form action="" method="post">
                <input type="search" name="projectsearching" id="" placeholder="Searched based on Project Title or Company Name" size=45>

                <input type="submit" value="🔎" name="enter">
            </form>   
            
        </div>    

        
        <div id="table">
            <?php include 'search.php' ?>
        </div>
    </div>

    <div class="search"></div>
    <?php
    mysqli_close($connection)
    ?>
</body>
<footer>
    <?php include 'footer.php' ?>
</footer>
</html>
