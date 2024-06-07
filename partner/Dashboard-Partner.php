<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta
     name="description"
     content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface."/>
   <meta
     name="keywords"
     content="calendar, events, reminders"
   />
   <title>Dashboard Website</title>     

   <link rel="stylesheet" type="text/css" href="Dashboard-Partner.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
   <link rel="icon" href="images/GreenUnity logo.png">
</head>
     

<body>
    <?php
        include('connectDB.php');
        session_start();
        $partner_id = $_SESSION['partner_id'];
        $name = "SELECT Company_Name FROM partner WHERE PartnerID = '$partner_id'";
        $result = mysqli_query($connection, $name);
        $row = mysqli_fetch_assoc($result);
        $name = $row['Company_Name'];
    ?>
        <!-- preloader start -->  
       <div class="preloader js-preloader">
        <div class="preloader-bg">
           <div class="bg-item js-bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>
           <div class="bg-item"></div>  
           <div class="bg-item"></div>
        </div>
        <div class="preloader-items">
           <div class="preloader-item"></div>
           <div class="preloader-item"></div>
           <div class="preloader-item"></div>
           <div class="preloader-item"></div>
        </div>
     </div>
     <!-- preloader end -->
    
     <div class="container">
        <!-- Sidebar Section -->   
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="../Index/Green Unity Logo.png" alt="Green Unity Logo">
                    <h2>Green <span class="unity">Unity</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
    
            <div class="sidebar">
                <!-- Apply for partnerships -->
                <a href="Dashboard-Partner.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="(1.1)apply_partnership.php">
                    <span class="material-icons-sharp">handshake</span>
                    <h3>Apply for Partnerships</h3>
                </a>
                <!-- Coordinate programs -->
                <a href="(1.2.1)coordinate_programs.php">
                    <span class="material-icons-sharp">people_alt</span>
                    <h3>Coordinate Programs</h3>
                </a>
                <!-- Plan event -->
                <a href="(1.3)plan_event.php">
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Plan Event</h3>
                </a>
                <!-- Manage event -->
                <a href="(1.4)manage_event.php">
                    <span class="material-icons-sharp">event_note</span>
                    <h3>Manage Event</h3>
                </a>
                <!-- View reports -->
                <a href="(1.5)view_reports.php">
                    <span class="material-icons-sharp">bar_chart</span>
                    <h3>View Reports</h3>
                </a>
                <!-- Provide feedback -->
                <a href="(1.6)provide_feedback.php">
                    <span class="material-icons-sharp">feedback</span>
                    <h3>Provide Feedback</h3>
                </a>
                <!-- Oversee project -->
                <a href="(1.7)oversee_project.php">
                    <span class="material-icons-sharp">visibility</span>
                    <h3>Oversee Project</h3>
                </a>
                <!-- Resource allocation -->
                <a href="(1.8)resource_allocation.php">
                    <span class="material-icons-sharp">pie_chart</span>
                    <h3>Resource Allocation</h3>
                </a>
                <!-- Logout -->
                <a href="../member/logout.php" class="logout-link">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->
    

        <!-- Main Content -->
        <main>
            <h1>Welcome, <?php echo $name; ?></h1>
            <p>Welcome to your Green Unity partner dashboard! Here you can manage partnerships, events, campaigns, and more.</p>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total Sales</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Site Visit</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Searches</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Partners</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="../Dashboard images/profile-1.jpg">
                        <h2>Jack</h2>
                        <p>54 Min Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/profile-2.jpg">
                        <h2>Amir</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/profile-4.jpg">
                        <h2>Ember</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/plus.png">
                        <h2>More</h2>
                        <p>Partners</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Agreements</h2>
                <table>
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>File Size</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $name; ?></b></p>
                        <small class="text-muted">Partner</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../Dashboard images/profile-3.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="../Dashboard images/profile-3.jpg">
                    <h2>Partner</h2>
                    <p>Dashboard</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <br><br><br><br><br>



<script>

window.addEventListener("load", () => {
   /* preloader */ 
   document.querySelector(".js-preloader").classList.add("loaded");
   document.querySelector(".js-preloader .js-bg-item").addEventListener("transitionend", () => {
     document.querySelector(".js-preloader").style.display = "none";
   })
 });

 
 //index
 const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');

const darkMode = document.querySelector('.dark-mode');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});

darkMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode-variables');
    darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
    darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
})


Orders.forEach(order => {
    const tr = document.createElement('tr');
    const trContent = `
        <td>${order.productName}</td>
        <td>${order.productNumber}</td>
        <td>${order.paymentStatus}</td>
        <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
        <td class="primary">Details</td>
    `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
});


//order
const Orders = [
    {
        productName: 'JavaScript Tutorial',
        productNumber: '85743',
        paymentStatus: 'Due',
        status: 'Pending'
    },
    {
        productName: 'CSS Full Course',
        productNumber: '97245',
        paymentStatus: 'Refunded',
        status: 'Declined'
    },
    {
        productName: 'Flex-Box Tutorial',
        productNumber: '36452',
        paymentStatus: 'Paid',
        status: 'Active'
    },
]



</script>




<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
<footer>
    <?php
        include('../member/footer.php');
    ?>
</footer>
</html>
