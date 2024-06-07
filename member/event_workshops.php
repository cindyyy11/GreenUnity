<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event & Workshops</title>
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo '<div id="content">';
    include 'topnav.php';
    ?>
    <h1>Event & Workshops</h1>
        <div id="intro">
            <p>Welcome to the Events and Workshops page of GreenUnity! We're excited to invite you to participate in our diverse array of events and workshops aimed at fostering environmental conservation and urban greening in our community.</p>
            <p>Whether you're a seasoned environmental advocate or just beginning your journey towards sustainability, there's something for everyone at GreenUnity's events and workshops. Join us in building a greener, healthier, and more resilient future for our communities and the planet!</p>
            <p>Be sure to check our event calendar regularly for upcoming dates and registration details. We look forward to seeing you at our next event!</p>
        </div>
        <br><br>
        <section class="gallery" id="gallery">
            <h1 id="photos">Events & Workshops Photos</h1>
            <div class="box-container">
                <div class="box">
                    <img src="images/p-1.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-2.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-3.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-4.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-5.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-6.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-7.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-8.jpg" alt="">
                    <div class="icons">
                        <a href="#photos" class="fas fa-heart"></a>
                        <a href="#photos" class="fas fa-share"></a>
                        <a href="#photos" class="fas fa-eye"></a>
                    </div>
                </div>
            </div>
        </section>
    <?php 
    include 'db_conn.php';
    echo '<section class="event_details">';
    echo '<h2 style="text-align: center;" id="search">Events and Workshops Details</h2>';
    ?>
        <center><form action="#search" method="POST">
            <p>Search:
            <input type="text" placeholder="Type your key terms here" name="Key_terms">
            <input type="submit" name="Find" value="Search" class="search-btn">
            </p>
        </form></center>
        <br><br>
        <?php
        function limit_text($Content, $limit) {
            if (str_word_count($Content, 0) > $limit) {
                $words = str_word_count($Content, 2);
                $pos = array_keys($words);
                $Content = substr($Content, 0, $pos[$limit]) . '...';
            }
            echo $Content;
        }
        //if the user click the search button and the search box is not empty
        if(isset($_POST['Find']) && !empty($_POST['Key_terms']))
        {
            $query = "SELECT * FROM events WHERE Title LIKE '%$_POST[Key_terms]%' ORDER BY Start_Date DESC LIMIT 8";
        } else {
            //display all events if the user does't search
            $query = "SELECT * FROM events ORDER BY Start_Date DESC LIMIT 8";
        }
        $mysql = $query;
        $result = mysqli_query($conn, $mysql) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) > 0)
        {
            echo '<div class="details_container">';
            $loop = 0;

        //dump all data from the database into the table
            while($row = mysqli_fetch_assoc($result))
            {
                $loop++;
                echo '<article class="details">';
                echo '<div class="details_image">';
                echo '<img src="images/e-'.$loop.'.jpg" width=100% height=30%';
                echo '</div>';
                echo '<div class="details_info">';
                echo '<h4>'.$row['Title'].'</h4>';
                echo '<p>'.limit_text($row['Description'], 10).'</p>';
                echo "<a href='event_details.php?event_id=".$row['EventID']."' class='btn1'>See More</a>";
                echo '</div>';
                echo '</article>';
            }
            echo "</div></section>";
        } else { 
            echo "<center>No event found</center>"; 
        }
        ?>
        <br><br>
        <h2 style="text-align: center;">Joined Events & Workshops</h1>
        <div class="content">
            <?php
            include "event_calendar.php";
            ?>
        </div>
        <br><br><br><br><br><br><br>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>