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

   <link rel="stylesheet" type="text/css" href="Dashboard-Member.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
   <link rel="icon" href="images/GreenUnity Logo.png">
</head>

   
<body>
    <?php
        include('session.php');
        $member_id = $_SESSION['member_id'];
        $name = "SELECT Name FROM member WHERE MemberID = '$member_id'";
        $result = mysqli_query($conn, $name);
        $row = mysqli_fetch_assoc($result);
        $name = $row['Name'];
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
                    <img src="images/GreenUnity Logo.png" alt="Green Unity Logo">
                    <h2>Green <span class="unity">Unity</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
    
            <div class="sidebar">
                <!-- Dashboard -->
                <a href="Dashboard-Member.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <!-- Events & Workshops -->
                <a href="event_workshops.php">
                    <span class="material-icons-sharp">event</span>
                    <h3>Events & Workshops</h3>
                </a>
                <!-- Conservation Projects -->
                <a href="conservation_projects.php">
                    <span class="material-icons-sharp">nature_people</span>
                    <h3>Conservation Projects</h3>
                </a>
                <!-- Education Projects -->
                <a href="education_projects.php">
                    <span class="material-icons-sharp">school</span>
                    <h3>Education Projects</h3>
                </a>
                <!-- Community Involvement -->
                <a href="community_involvement.php">
                    <span class="material-icons-sharp">groups</span>
                    <h3>Community Involvement</h3>
                </a>
                <!-- Donation & Fundraising -->
                <a href="donation_fundraising.php">
                    <span class="material-icons-sharp">volunteer_activism</span>
                    <h3>Donation & Fundraising</h3>
                </a>
                <!-- Merchandise & Adoption -->
                <a href="merchandise_adoption.php">
                    <span class="material-icons-sharp">shopping_cart</span>
                    <h3>Merchandise & Adoption</h3>
                </a>
                <!-- Logout -->
                <a href="logout.php" class="logout-link">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Welcome, <?php echo $name; ?></h1>
            <p>Welcome to your Green Unity member dashboard!</p>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total spent</h3>
                            <h1>RM 700</h1>
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
                            <h1>24 hrs</h1>
                            <h4>per week</h4>
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
                            <h1>34 mins</h1>
                            <h4>per week</h4>
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
                <h2>Friends</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="../Dashboard images/profile-2.jpg">
                        <h2>Jack</h2>
                        <p>Active 54 Minutes Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/profile-3.jpg">
                        <h2>Amir</h2>
                        <p>Active 3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/profile-4.jpg">
                        <h2>Ember</h2>
                        <p>Active 6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="../Dashboard images/plus.png">
                        <h2>More</h2>
                        <p>Friends</p>
                    </div>
                </div>
            </div>
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
                        <p>Hey, <b><?php echo $name;?></b></p>
                        <small class="text-muted">Member</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../Dashboard images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="../Dashboard images/profile-1.jpg">
                    <h2>Member</h2>
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
        include('footer.php');
    ?>
</footer>
</html>
