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
    $query = "SELECT * FROM post";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $result1 = array();
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<div class='carousel-container'>";
    echo "<div class='card-carousel' id='cardCarousel'>";
    while ($row = mysqli_fetch_assoc($result)) {
        $result1[] = $row;
        $date_time = date_create($row['DateTime']);
        $row['DateTime'] = date_format($date_time, 'd M Y');
        echo "<div class='card'>";
        echo "<br>";
        echo "<div class='card-content'>";
        echo "<h2>".$row['Title']."</h2>";
        echo "<p class='date'>".$row['DateTime']."</p>";
        echo "<p>".limit_text($row['Description'], 10)."</p>";
        echo "<br>";
        echo "</div>";
        echo "<center><a href='post_details.php?post_id=".$row['PostID']."'>
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