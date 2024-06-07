<?php
  include('session.php');
  $admin_id = $_SESSION['admin_id'];
  $name = "SELECT Name FROM admin WHERE AdminID = '$admin_id'";
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
  <li id="li1"><a href="../admin/Dashboard-Admin.php">Dashboard</a></li>
  <li class="dropdown">
  <a href="#" class="dropbtn">Welcome back, <?php echo $name; ?></a>
    <div class="dropdown-content">
        <a href="manage_quiz.php">Manage Quizzes</a>
        <a href="manage_events_projects.php">Manage Events and Projects</a>
        <a href="product_listing.php">View Products Listing</a>
        <a href="communication_channel.php">Communication Channel</a>
        <a href="update_setting.php">Update Profile</a>
        <a href="../member/logout.php">Log Out</a>
    </div>
  </li>
</ul>
</body>
</html>