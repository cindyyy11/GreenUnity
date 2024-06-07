<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/GreenUnity logo.png"/>
    <title>Adoption Application Form</title>
</head>
<body>
    <?php
    include 'header.php';
    echo "<br>";
    echo "<div id='content'>";
    include 'topnav.php';
    ?>
    <h1>Adoption Process</h1>
    <div id="intro">
    <div id="adoption_process">
        <p>Welcome to our adoption process. Here's the procedure of adopting the animals:</p>
        <ol>
            <li>Fill out the adoption form given, providing the required details such as amount, type, card information, etc.</li>
            <li>Click on the "Adopt" button to submit your adoption request.</li>
            <li>Once your donation is processed successfully, you will receive a confirmation message.</li>
            <li>Thank you for your cooperation!</li>
        </ol>
    </div>
    <center>
    <h2>Adopt Form</h2>
    <form action="#" method="post">
        <table cellpadding=5px>
            <tr>
                <td><label for="amount">Amount: </label></td>
                <td><input type="text" name="amount" id="amount" required><br></td>
            </tr>
            <tr>
            <td><label for="type">Animal to adopt: </label></td>
                <td><select name="type" required>
                    <option value="axolotl">Axolotl</option>
                    <option value="birds">Birds</option>
                    <option value="camel">Camel</option>
                    <option value="capybara">Capybara</option>
                    <option value="cheetah">Cheetah</option>
                    <option value="chinchilla">Chinchilla</option>
                    <option value="chipmunk">Chipmunk</option>
                    <option value="crocodile">Crocodile</option>
                    <option value="deer">Deer</option>
                    <option value="dolphin">Dolphin</option>
                    <option value="eagle">Eagle</option>
                    <option value="elephant">Elephant</option>
                    <option value="ferret">Ferret</option>
                    <option value="fox">Fox</option>
                    <option value="giraffe">Giraffe</option>
                    <option value="goose">Goose</option>
                    <option value="gorilla">Gorilla</option>
                    <option value="hamster">Hamster</option>
                    <option value="hippopotamus">Hippopotamus</option>
                    <option value="hornbill">Hornbill</option>
                    <option value="horse">Horse</option>
                    <option value="ibex">Ibex</option>
                    <option value="jaguar">Jaguar</option>
                    <option value="jellyfish">Jellyfish</option>
                    <option value="leopard">Leopard</option>
                    <option value="lion">Lion</option>
                    <option value="lovebird">Lovebird</option>
                    <option value="monkey">Monkey</option>
                    <option value="orang_utan">Orang Utan</option>
                    <option value="ostrich">Ostrich</option>
                    <option value="otter">Otter</option>
                    <option value="owl">Owl</option>
                    <option value="panda">Panda</option>
                    <option value="panther">Panther</option>
                    <option value="peacock">Peacock</option>
                    <option value="penguin">Penguin</option>
                    <option value="raccoon">Raccoon</option>
                    <option value="reindeer">Reindeer</option>
                    <option value="rhinoceros">Rhinoceros</option>
                    <option value="seal">Seal</option>
                    <option value="shark">Shark</option>
                    <option value="sloth">Sloth</option>
                    <option value="snake">Snake</option>
                    <option value="squirrel">Squirrel</option>
                    <option value="sun_bear">Sun Bear</option>
                    <option value="swan">Swan</option>
                    <option value="tapir">Tapir</option>
                    <option value="tiger">Tiger</option>
                    <option value="tortoise">Tortoise</option>
                    <option value="turkey">Turkey</option>
                    <option value="turtle">Turtle</option>
                    <option value="wolf">Wolf</option>
                    <option value="zebra">Zebra</option>
                    <option value="others">Others</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="card">Card: </label></td>
                <td><input type="text" name="card" placeholder="xxxx xxxx xxxx xxxx" required><br></td>
            </tr>
            <tr>
                <td><label for="expiry">Expiry: </label></td>
                <td><input type="text" name="expiry" placeholder="mm/yy" required><br></td>
            </tr>
            <tr>
                <td><label for="cvv">CVV: </label></td>
                <td><input type="text" name="cvv" id="cvv" placeholder="xxx" required><br></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="adopt" value="Adopt" class="submit-btn"></td>
            </tr>
            <tr>
                <td></td>
                <td><button onclick="window.location.href='merchandise_adoption.php'" class="back-btn">Back</button></td>
            </tr>
        </table>
        </form>
        </center>
    </div>
    <?php
    if (isset($_POST['adopt'])) {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date_time = date('Y-m-d H:i:s');
        $amount = $_POST['amount'];
        $adopt_method = "Debit/Credit Card";
        $type = $_POST['type'];
        $member_id = $_SESSION['member_id'];
        $sql = "INSERT INTO `adoption` (`DateTime`, `Amount`, `Adopt_Method`, `Animal_to_adopt`, `MemberID`) VALUES ('$date_time', '$amount', '$adopt_method', '$type', $member_id)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $card = $_POST['card'];
            echo "<script>alert('Thank you for your adoption to $type of RM $amount. Your card ending in " . substr($card, -4) . " has been charged.');
            window.location.href='merchandise_adoption.php';</script>";
        } else {
            echo "Error; ".mysqli_error($conn);
        }
    }
    ?>
    </div>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>