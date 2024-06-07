<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Donation and Fundraising</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
        <h1>Donation & Fundraising</h1>
        <div id="intro">
            <p>At GreenUnity, we're passionate about creating a greener, healthier future for our communities and our planet. Through our dedicated efforts in environmental conservation and urban greening, we aim to transform urban spaces into vibrant, sustainable ecosystems that benefit both people and nature.</p>
            <p><b>Why Donate?</b><br>Your support is crucial in helping us achieve our goals and make a positive impact on the environment. By donating to our cause, you're directly contributing to:</p>
            <ol>
                <li><b>Environmental Conservation: </b>We're actively working to preserve and protect natural habitats, biodiversity, and ecosystems. Your donation helps us fund conservation projects, wildlife protection initiatives, and habitat restoration efforts.</li>
                <li><b>Urban Greening: </b>Our urban greening projects aim to enhance the quality of urban life by creating green spaces, parks, and community gardens. These green spaces provide numerous benefits, including improved air quality, reduced heat island effect, and increased biodiversity in urban areas.</li>
                <li><b>Education and Outreach:</b> We believe in the power of education and awareness to inspire positive change. Your donation supports our educational programs, workshops, and outreach activities, helping to raise awareness about environmental issues and promote sustainable living practices.</li>
            </ol>
            <p><b>How Your Donation Makes a Difference</b><br>
            Every donation, no matter the size, has a meaningful impact on our projects and initiatives. Here's how your donation can make a difference:
            <ul>
                <li><b>RM 25:</b> Plant native trees and shrubs in urban areas to improve air quality and provide habitat for wildlife.</li>
                <li><b>RM 50: </b>Support the maintenance and upkeep of community gardens, ensuring access to fresh, healthy produce for local residents.</li>
                <li><b>RM 100: </b>Fund educational workshops and outreach events to engage and empower communities to take action for the environment.</li>
                <li><b>RM 250:</b> Contribute to the restoration of degraded ecosystems, such as wetlands or riparian habitats, to enhance biodiversity and ecological resilience.</li>
            </ul></p>
            <p><b>Get Involved</b><br>
            Ready to join us in creating a greener, more sustainable future? Here are a few ways you can get involved:
            <ul>
                <li><b>Donate:</b> Make a one-time or recurring donation to support our environmental conservation and urban greening projects.</li>
                <li><b>Fundraise:</b> Start your own fundraising campaign and rally your friends, family, and community to support our cause.</li>
                <li><b>Volunteer:</b> Get hands-on experience by volunteering with us. Whether it's planting trees, cleaning up local parks, or leading educational workshops, there are plenty of ways to get involved.</li>
                <li><b>Spread the Word:</b> Help us raise awareness by sharing our mission and projects on social media, and encouraging others to join the movement.</li>
            </ul></p>
            <p><b>Together, We Can Make a Difference</b><br>
            Join us in our mission to create a more sustainable, resilient, and vibrant future for generations to come. Together, we can make a positive impact on the environment and build healthier, greener communities for all.
            <br>Thank you for your support!</p>
            <center>
                <br><a href="donation.php"><button class="add-suggestion-btn">Donate</button></a>
                <br><br><a href="donation_history.php"><button class="add-suggestion-btn">Donation History</button></a>
            </center>
        </div>
        <br><br><br>
        <div class="swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/d-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/d-2.webp" alt=""></div>
                <div class="swiper-slide"><img src="images/d-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/d-4.webp" alt=""></div>
                <div class="swiper-slide"><img src="images/d-5.webp" alt=""></div>
                <div class="swiper-slide"><img src="images/d-6.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>