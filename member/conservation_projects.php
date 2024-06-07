<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Conservation projects</title>
</head>
<body>
    <?php
        include 'header.php';
        echo "<br>";
        echo "<div id='content'>";
        include 'topnav.php';
    ?>
    <h1>Conservation projects</h1>
    <div id="intro">
        <p>At GreenUnity, we are deeply committed to preserving and restoring the natural environment in urban areas and beyond. Our conservation projects represent our dedication to safeguarding biodiversity, promoting sustainability, and fostering a harmonious relationship between humans and nature.</p>
        <p>Through collaborative efforts with local communities, government agencies, and environmental organizations, we implement a wide range of conservation initiatives aimed at protecting endangered species, preserving critical habitats, and mitigating the impact of urbanization on ecosystems.</p>
    </div>
        <?php 
            include 'db_conn.php';
            echo '<section class="event_details">';
            echo '<h2 style="text-align: center;" id="search1">Conservation projects</h2>';
        ?>
        <center>
            <form action="#search1" method="POST">
                <p>Search:
                <input type="text" placeholder="Type your key terms here" name="Key_terms">
                <input type="submit" name="Find" value="Search" class="search-btn">
                </p>
            </form>
        </center>
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
                $query = "SELECT * FROM projects WHERE Title LIKE '%$_POST[Key_terms]%' ORDER BY Start_Date DESC LIMIT 3";
            } else {
                //display all events if the user does't search
                $query = "SELECT * FROM projects ORDER BY Start_Date DESC LIMIT 3";
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
                    echo '<img src="images/c-'.$loop.'.jpg" width=100% height=30%';
                    echo '</div>';
                    echo '<div class="details_info">';
                    echo '<h4>'.$row['Title'].'</h4>';
                    echo '<p>'.limit_text($row['Description'], 10).'</p>';
                    echo "<a href='project_details.php?project_id=".$row['ProjectID']."' class='btn1'>See More</a>";
                    echo '</div>';
                    echo '</article>';
                }
                echo "</div>";
            } else { 
                echo "<center>No project found</center>"; 
            }
            echo "</section>";
        ?>
        <section class="event_details">
            <h2 style="text-align: center;" id="search2">Crowdsourcing Suggestions</h2>
            <div id="intro">
                <p>At GreenUnity, we believe in the power of collective action and community-driven solutions to address environmental challenges. Our Project Suggestions platform is a space for individuals, communities, and organizations to share their ideas, propose initiatives, and collaborate on projects that promote sustainability, conservation, and environmental stewardship.</p>
                <p><b>Submit Your Idea:</b> Have a project idea that could make a positive impact on the environment? Share it with us! Whether it's a tree planting campaign, a beach cleanup event, or a renewable energy project, we welcome all suggestions that align with our mission and values.</p>
                <p><b>Collaborate and Connect: </b>Explore the project suggestions submitted by others and find opportunities to collaborate. Connect with like-minded individuals, form partnerships, and join forces to turn ideas into action. Together, we can amplify our impact and create meaningful change in our communities and beyond.</p>
                <p><b>Get Involved:</b> Ready to make a difference? Join us in shaping the future of environmental conservation and sustainability. Submit your project suggestions, engage with the community, and together, let's create a world where people and nature thrive in harmony.</p>
            </div>
            <br>
            <center>
                <form action="#search2" method="POST">
                <p>Search:
                <input type="text" placeholder="Type your key terms here" name="Key_terms">
                <input type="submit" name="Find_Suggestion" value="Search" class="search-btn">
                </p>
                </form>
            </center>

            <?php
                //if the user click the search button and the search box is not empty
                if(isset($_POST['Find_Suggestion']) && !empty($_POST['Key_terms']))
                {
                    $query = "SELECT * FROM crowdsourcing_form WHERE Title LIKE '%$_POST[Key_terms]%'";
                } else {
                    //display all events if the user does't search
                    $query = "SELECT * FROM crowdsourcing_form";
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
                        echo '<img src="images/s-'.$loop.'.jpg" width=100% height=30%';
                        echo '</div>';
                        echo '<div class="details_info">';
                        echo '<h4>'.$row['Title'].'</h4>';
                        echo '<p>'.limit_text($row['Description'], 10).'</p>';
                        echo "<a href='suggestion_details.php?form_id=".$row['Crowdsourcing_FormID']."' class='btn1'>See More</a>";
                        echo '</div>';
                        echo '</article>';
                    }
                    echo "</div>";
                } else { 
                    echo "<center>No suggestion found</center>"; 
                }
                echo "<br>";
                echo "<center><table>";
                echo "<tr><td><a href='add_suggestion.php'><button class='add-suggestion-btn'>Add a new suggestion</button></a></td></tr>";
                echo "</table></center>";
            ?>
        </section>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>