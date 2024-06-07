<?php
    function limit_text($Content, $limit) {
        if (str_word_count($Content, 0) > $limit) {
            $words = str_word_count($Content, 2);
            $pos = array_keys($words);
            $Content = substr($Content, 0, $pos[$limit]) . '...';
        }
        echo $Content;
    }
    include 'db_conn.php';
    $query = "SELECT * FROM projects ORDER BY Start_Date DESC";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $result1 = array();
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<div class='carousel-container'>";
    echo "<div class='card-carousel' id='cardCarousel'>";
    while ($row = mysqli_fetch_assoc($result)) {
        $result1[] = $row;
        echo "<div class='card'>";
        echo "<br>";
        echo "<div class='card-content'>";
        echo "<h2>".$row['Title']."</h2>";
        echo "<p class='date'>".$row['Start_Date']."</p>";
        echo "<p>".limit_text($row['Description'], 10)."</p>";
        echo "<br>";
        echo "</div>";
        echo "<center><a href='project_details.php?project_id=".$row['ProjectID']."'>
        <button>More</button></a></center>";
        echo "</div>";
        echo "<br>";
        echo "<br>";
    }
    echo "</div>";
    echo "<button class='arrow prev' onclick='prevSlide()'>&#9664;</button>";
    echo "<button class='arrow next' onclick='nextSlide()'>&#9654;</button>";
    echo "</div>";
    echo "<script src='event_project_form_card.js'></script>";
?>