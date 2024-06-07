<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Community</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Community Involvement</h1>
        <div id="intro">
            <p>At GreenUnity, we believe in the power of community engagement and collective action to create positive change for our environment and urban spaces. Our "Community Involvement" page is dedicated to fostering a sense of shared responsibility and empowerment among individuals who are passionate about environmental conservation and urban greening.</p>
            <p><b>Join the Movement</b>
                <br>
                Join us in our mission to transform urban landscapes into vibrant, sustainable ecosystems that benefit both people and the planet. Whether you're a seasoned environmentalist, a gardening enthusiast, or someone looking to make a difference in your community, there are countless ways to get involved and contribute to our cause.</p>
            <p><b>Get Inspired</b>
                <br>
                Explore stories of community-led initiatives, successful projects, and inspiring individuals who are making a difference in their neighborhoods. From community gardens and tree planting initiatives to eco-friendly events and educational workshops, discover how ordinary people are creating extraordinary change in their local communities.</p>
            <p><b>Share Your Story</b>
                <br>
                Have a success story, a green project idea, or a community event to share? We want to hear from you! Our platform provides a space for individuals and groups to showcase their efforts, exchange ideas, and connect with like-minded individuals who share a passion for environmental conservation and urban greening.</p>
            <p><b>Take Action</b>
                <br>
                Ready to roll up your sleeves and make a difference? Explore our volunteering opportunities, upcoming events, and actionable tips for greening your neighborhood. Whether it's planting trees, cleaning up parks, or advocating for sustainable urban policies, every small action counts towards building a greener, healthier future for all.</p>
            <p><b>Connect with Us</b>
                <br>
                Stay connected with our community and be part of the conversation on social media. Also, follow us on our Facebook, Twitter, and Instagram for the latest updates, events, and opportunities to get involved. Together, we can create a more sustainable, resilient, and inclusive future for generations to come.</p>
            <p>Join us on this journey towards a greener, cleaner, and more vibrant world. Together, we can make a difference!</p>
        </div>
        <br><br>
        <div class="swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/i-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-8.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/i-9.jpg" alt=""></div>
            </div>
        </div>
        <center>
        <br><br>
        <h2>Community forum</h2>
        <p>Interaction available with other users here</p>
        <a href='create_post.php'><button class="add-suggestion-btn">Create Post</button></a>
        <a href='view_own_posts.php'><button class="add-suggestion-btn">Edit Posts</button></a>
        </center>
        <section id="post-list" class="container mt-5">
            <center><h2>Latest Posts</h2></center>
            <?php
                include 'db_conn.php';
                $sql = "SELECT * FROM post ORDER BY PostID DESC LIMIT 5";
                function limit_text($Content, $limit) {
                    if (str_word_count($Content, 0) > $limit) {
                        $words = str_word_count($Content, 2);
                        $pos = array_keys($words);
                        $Content = substr($Content, 0, $pos[$limit]) . '...';
                    }
                    echo $Content;
                }
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if (mysqli_num_rows($result) > 0)
                {
                    echo "<div class='row'>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $postContent = $row['Description'];
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row['Title']."</h3>";
                        echo "<p class='card-text'>".limit_text($postContent, 10)."</p>";
                        echo "<a href='post_details.php?post_id=".$row['PostID']."' class='btn btn-primary'>Read More</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No posts available</p>";
                }
            ?>
        </section>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>