<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Merchandise and Upselling Marketplace</title>
</head>
<body>
    <?php 
        include 'header.php'; 
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1 id="merchandise">Merchandise</h1>
        <div id="intro">
            <p>Welcome to our Merchandise Section, where you can discover an array of eco-friendly products and sustainable goods that align with our commitment to environmental conservation and ethical consumerism. From reusable water bottles and organic apparel to eco-conscious home decor and nature-inspired accessories, each item in our collection reflects our dedication to fostering a greener, more sustainable world.
            <br>By shopping our merchandise selection, you not only acquire beautifully crafted products but also contribute directly to our conservation efforts. A portion of the proceeds from every purchase goes towards supporting wildlife protection, habitat restoration, and community-based conservation projects around the globe. Together, we can make a positive impact on the planet while enjoying stylish, eco-friendly goods that inspire a deeper connection to nature.
            <br>Explore our merchandise range today and join us in creating a brighter, more sustainable future for generations to come!</p>
            <a href="merchandise_adoption.php"><button class="back-btn">Back</button></a>
            <a href="#products_1"><button class="btn2">Shop now</button></a>
            <h1 id="marketplace">Upselling marketplace</h1>
            <p>Welcome to our Upselling Marketplace, where you can take your shopping experience to the next level by discovering curated collections, exclusive offers, and personalized recommendations tailored to your interests and preferences. Whether you're looking to complement your purchase with related products, upgrade to premium options, or explore new additions to enhance your lifestyle, our marketplace has something for everyone.
            <br>Browse through our carefully curated selection of upselling items, handpicked to enhance your shopping journey and elevate your experience. From complementary accessories and value-added services to exclusive bundles and limited-time promotions, our marketplace offers a wealth of opportunities to enhance your purchase and make the most out of your shopping experience.
            <br>Unlock exciting upselling opportunities and discover new ways to enrich your shopping journey with our marketplace offerings. Let us help you find the perfect additions to complement your purchase and make every shopping experience a memorable one!</p>
            <a href="#products_2"><button class="btn2">Shop now</button></a>
            <a href="upselling.php"><button class="btn2">Sell item</button></a>
        </div>
        <center>
            <h3 id="products_1">Merchandise items</h3>
            <?php
                include 'db_conn.php';
                $sql = "SELECT * FROM products WHERE Category = 'Merchandise'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<section id='post-list' class='container mt-5'>";
                    echo "<div class='row'>";
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row['Name']."</h3>";
                        echo "<p class='card-text'>". $row["Unit_Price"]. "</p>";
                        echo "<a href='purchase.php?product_id=".$row['ProductID']."' class='btn btn-primary'>Buy Now</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</section>";
                } else {
                    echo "No merchandise found";
                }
            ?>
            <h3 id="products_2">Upselling items</h3>
            <?php
                include 'db_conn.php';
                $sql = "SELECT * FROM products WHERE Category = 'Upselling'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<section id='post-list' class='container mt-5'>";
                    echo "<div class='row'>";
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-6'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h3 class='card-title'>".$row['Name']."</h3>";
                        echo "<p class='card-text'>". $row["Unit_Price"]. "</p>";
                        echo "<a href='purchase.php?product_id=".$row['ProductID']."' class='btn btn-primary'>Buy Now</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</section>";
                } else {
                    echo "No item found";
                }
            ?>
        </center>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>