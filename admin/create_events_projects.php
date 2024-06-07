<?php
include 'db_conn.php';
// Check if the create event form is submitted
if (isset($_POST['event-btn'])) {
   // Retrieve event details from the form
   include 'session.php';
   $event_title = $_POST['event-title'];
   $start_date = $_POST['event-date'];
   $event_description = $_POST['event-description'];
   $event_duration = $_POST['event-duration'];
   $admin_id = $_SESSION['admin_id'];

   // You can perform additional validation here

   $sql = "INSERT INTO `events` (`Title`, `Description`, `Start_Date`, `Duration`) VALUES ('$event_title', '$event_description', '$start_date', $event_duration)";
   if ($conn->query($sql) === TRUE) {
      $event_id = mysqli_insert_id($conn);
      $sql = "INSERT INTO `manage_event`(`Description`, `AdminID`, `EventID`) VALUES ('$event_description', $admin_id, $event_id)";
      if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Event created successfully!");
         window.location.href="manage_events_projects.php"; </script>';
      } else {
         echo "Error creating event: " . $conn->error;
      }
   } else {
      echo "Error creating event: " . $conn->error;
   }

   $conn->close();
}

// Check if the create project form is submitted
if (isset($_POST['project-btn'])) {
   // Retrieve project details from the form
   include 'session.php';
   $project_title = $_POST['project-title'];
   $start_date = $_POST['project-date'];
   $project_description = $_POST['project-description'];
   $admin_id = $_SESSION['admin_id'];

   // You can perform additional validation here

   $sql = "INSERT INTO `projects` (`Title`, `Description`, `Start_Date`) VALUES ('$project_title', '$project_description', '$start_date')";
   if ($conn->query($sql) === TRUE) {
      $project_id = mysqli_insert_id($conn);
      $sql = "INSERT INTO `manage_project`(`Description`, `AdminID`, `ProjectID`) VALUES ('$project_description', $admin_id, $project_id)";
      if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Project created successfully!");
         window.location.href="manage_events_projects.php"; </script>';
      } else {
         echo "Error creating project: " . $conn->error;
      }
   } else {
      echo "Error creating project: " . $conn->error;
   }

   $conn->close();
}
?>

<!-- Create Event Section -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/GreenUnity logo.png"/>
   <title>Create Event Form</title>
</head>
<body>
   <?php
   include 'header.php';
   echo "<br>";
   echo "<div id='content'>";
   include 'topnav.php';
   ?>
      <br><br>
      <div id="container">
         <section class="create-event" id="create-event">
            <div class="section-header">
               <h1 class="section-header-title">Create Event</h2>
            </div>
            <form action="#" method="POST" class="event-form">
               <div class="form-group">
                  <label for="event-title">Event Title:</label>
                  <input type="text" id="event-title" name="event-title" required>
               </div>
               <br>
               <div class="form-group">
                  <label for="event-date">Event Date:</label>
                  <input type="date" id="event-date" name="event-date" required>
               </div>
               <br>
               <div class="form-group">
                  <label for="event-description">Event Description:</label>
                  <textarea id="event-description" name="event-description" required></textarea>
               </div>
               <br>
               <div class="form-group">
                  <label for="event-duration">Event Duration:</label>
                  <input type="number" id="event-duration" name="event-duration" required>
               </div>
               <br>
               <div class="form-group">
                  <button type="submit" name="event-btn" class="submit-btn">Create Event</button>
               </div>
            </form>
         </section>
         <section class="create-project" id="create-project">
            <div class="section-header">
               <h1 class="section-header-title">Create Project</h2>
            </div>
            <form action="#" method="POST" class="project-form">
               <div class="form-group">
                  <label for="project-title">Project Title:</label>
                  <input type="text" id="project-title" name="project-title" required>
               </div>
               <br>
               <div class="form-group">
                  <label for="project-date">Project Start Date:</label>
                  <input type="date" id="project-date" name="project-date" required>
               </div>
               <br>
               <div class="form-group">
                  <label for="project-description">Project Description:</label>
                  <textarea id="project-description" name="project-description" required></textarea>
               </div>
               <br>
               <div class="form-group">
                  <button type="submit" name="project-btn" class="submit-btn">Create Project</button>
               </div>
            </form>
         </section>
      </div>
   <center>
      <button onclick="window.location.href='manage_events_projects.php'" class="back-btn">Back</button>
   </center>
   </div>
</body>
<footer>
   <?php
   include 'footer.php';
   ?>
</footer>
</html>

