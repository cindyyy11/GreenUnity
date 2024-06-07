<?php
  include('session.php');
  $member_id = $_SESSION['member_id'];
  $name = "SELECT Name FROM member WHERE MemberID = '$member_id'";
  $result = mysqli_query($conn, $name);
  $row = mysqli_fetch_assoc($result);
  $name = $row['Name'];
?>
<html>
<head>
<style>
#ul1 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

#li1 {
  float: left;
}

#li1 a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
}

#li1 a:hover, .dropdown:hover .dropbtn {
  background-color: #f0ebde;
  color: #333333;
}

#li1.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  left: 105px;
  background-color: #faf5e8;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
    background-color: gainsboro;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<ul id="ul1">
  <li id="li1"><a href="Dashboard-Member.php">Dashboard</a></li>
  <li class="dropdown">
  <a href="#" class="dropbtn">Welcome back, <?php echo $name; ?></a>
    <div class="dropdown-content">
        <a href="event_workshops.php">Events & Workshops</a>
        <a href="conservation_projects.php">Conservation Projects</a>
        <a href="education_projects.php">Education Projects</a>
        <a href="community_involvement.php">Community</a>
        <a href="donation_fundraising.php">Donation & Fundraising</a>
        <a href="merchandise_adoption.php">Merchandise & Adoption</a>
        <a href="logout.php">Log Out</a>
    </div>
  </li>
</ul>
</body>
</html>