<?php
  include 'connectDB.php';
  session_start();
  $partner_id = $_SESSION['partner_id'];
  $name = "SELECT Company_Name FROM partner WHERE PartnerID = '$partner_id'";
  $result = mysqli_query($connection, $name);
  $row = mysqli_fetch_assoc($result);
  $name = $row['Company_Name'];
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
  left: 115px;
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
  <li id="li1"><a href="Dashboard-Partner.php">Dashboard</a></li>
  <li class="dropdown">
  <a href="#" class="dropbtn">Welcome back, <?php echo $name; ?></a>
    <div class="dropdown-content">
        <a href="(1.1)apply_partnership.php">Apply for Partnership</a>
        <a href="(1.2.1)coordinate_programs.php">Coordinate Programs</a>
        <a href="(1.3)plan_event.php">Plan Event</a>
        <a href="(1.4)manage_event.php">Manage Event</a>
        <a href="(1.5)view_reports.php">View Reports</a>
        <a href="(1.6)provide_feedback.php">Provide Feedback</a>
        <a href="(1.7)oversee_project.php">Oversee Project</a>
        <a href="(1.8)resource_allocation.php">Resource Allocation</a>
        <a href="../member/logout.php">Log Out</a>
    </div>
  </li>
</ul>
</body>
</html>