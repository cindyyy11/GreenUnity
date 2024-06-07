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
   <title>Event Website</title>

   <link rel="icon" href="../Index/Green Unity Logo.png"/>
   <link rel="stylesheet" type="text/css" href="event.css">
   <!-- ===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body>
      <!-- preloader start 
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
    preloader end -->


 <div class="page-wrapper">

   


 <!-- =============== HEADER =============== -->
 <header class="header">

   <!-- Top Bar Start -->
   <div class="top-bar">
    <div class="top-bar-content">
        <div class="contact-info">
            <div class="text">
                <i class="bx bx-phone"></i>
                <p>+1 (555) 123-4567</p>
            </div>
            <div class="text">
                <i class="bx bx-envelope"></i>
                <p>contact@greenunity.com</p>
            </div>
        </div>

      <!-- Search Bar -->
     <form action="https://www.google.com/search" class="search" id="search-bar">
      <input type="search" placeholder="Type something..." name="q" class="search__input">
      <div class="search__button" id="search-button">
          <i class="ri-search-2-line search__icon"></i>
          <i class="ri-close-line search__close"></i>
      </div>
  </form>

        <div class="social-links">
          <a href="../Log-in-Sign-up/login-sign.php"><i class="ri-user-fill"></i>Login / Sign Up</a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>
</div>

<!-- Top Bar End -->


 <div class="header-container">
    <a href="../Index/index-L.php" class="header-logo">
       <img src="../Index/Green Unity Logo.png" alt="Green Unity Logo" class="logo-img">
    </a>

          
    
    <nav>
      <div class="nav__data">
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line nav__toggle-menu"></i>
          <i class="ri-close-line nav__toggle-close"></i>
        </div>
      

          <!--=============== NAV MENU ===============-->
          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li>
                      <a href="../Index/index-L.php" class="nav__link">Home</a>
                  </li>

                  <li>
                    <a href="../About Us/about-us.php" class="nav__link">About</a>
                  </li>

                <li>
                  <a href="#causes" class="nav__link">Causes</a>
                </li>

                <li>
                  <a href="../Event/event.php" class="nav__link">Events</a>
                </li>

                <li>
                  <a href="#blog" class="nav__link">Blog</a>
                </li>

                <li>
                    <a href="../Impact/Impact.php" class="nav__link">Impact</a>
                </li>

                  <!--=============== DROPDOWN ===============-->
                  <li class="dropdown__item">                        
                      <div class="nav__link dropdown__button">
                        Pages <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                      </div>

                      <div class="dropdown__container">
                          <div class="dropdown__content">
                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAPZJREFUSEvtlosNwkAIhv9u4ibqJOok6iY6ibqJm+hhDkPbe0BK+ohecmlzAT6g/5E2mGg1E3GRA5+cE+rFy4FfzuAeZ3ZgKvgGYBP2HcDW2IGqb0lcVedCMlVfK3gPYAXgGZ6XCE6duYNTAbVnrQZZK9ZC3CvWamw5YBYKVbaLQpLXySouEuE1toneKRY9WyOTxtox0UsJtn7jbrgD3wYprjHA55DJZ25bwVZxde2XCab5TVsu0gFtXqwF14pTWvi2MJL+YG75IHGN1mo5fSjzdUZcD6EknnqDxKW9uxo7U6s1AbU2SbDW2cVudj/0LlWVgvxexW8BZXYfl97rywAAAABJRU5ErkJggg=="/>
                                  </div>

                                  <span class="dropdown__title">Education</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="../Education/Education.php" class="dropdown__link">Webminars & Talks</a>
                                      </li>
                                  </ul> 
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                    <i class="ri-bank-fill"></i>
                                  </div>

                                  <span class="dropdown__title">Transparency</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="../Transparency/Transparency.php" class="dropdown__link">Financial Reports -FinBoard</a>
                                      </li>
                                  </ul> 
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                    <i class="ri-projector-fill"></i>
                                  </div>

                                  <span class="dropdown__title">Projects</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="../Projects/Projects.php" class="dropdown__link">Urban Greening & Wildlife Preservation</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                    <a href="../Support/support.php" class="nav__link">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>

  



 </div>
</header>

   <!-- header end -->


   <!-- home section start -->
   <section class="home" id="home">
      <div class="home-container container">
         <div class="home-left">
            <h1 class="home-title">
                Green Unity: Events and Activism
            </h1>
            <p class="home-subtitle">
               <span>
                  <i class="bx bx-leaf"></i>
                  Engage in Conservation
               </span>
               <span>
                  <i class="bx bx-globe"></i>
                  Global and Local Initiatives
               </span>
            </p>
            <div class="home-btn">
               <a href="#upcoming events" class="btn">Upcoming Events</a>
            </div>
         </div>
         <div class="home-right">
            <div class="home-box">
               <div class="home-decor"></div>
               <div class="home-img-box1">
                  <img src="img/home-1.jpg" alt="Environment Event 1">
               </div>
               <div class="home-img-box2">
                  <img src="img/home-2.jpg" alt="Environment Event 2">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- home section end -->
   
   <!-- about section start -->
   <section class="about" id="about">
      <div class="container">
         <div class="about-content">
            <div class="section-header">
               <h2 class="section-header-title">About Our Events</h2>
            </div>
            <div class="about-img-box">
               <img src="img/about-1.jpg" alt="Green Unity Event">
               <div class="about-decor1" ></div>
               <div class="about-decor2" ></div>
            </div>   
            <div class="about-text">
               <p>Join us at Green Unity events to actively participate in making a sustainable impact on our planet. From citywide cleanups to sustainable living workshops, each event is designed to educate, inspire, and empower our community.</p>
               <p>Our events bring together environmental enthusiasts, experts, and volunteers to share knowledge, exchange ideas, and take collective action. We believe in hands-on learning and community involvement to drive meaningful change.</p>
               <p>Whether it's planting trees for Earth Day or joining a workshop on reducing your carbon footprint, there's a way for everyone to contribute. Be a part of our mission to preserve and protect our environment for future generations.</p>
               <div class="about-btn">
                  <a href="#events" class="btn">Join an Event</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- about section end -->

   <!-- event card list -->
<div class="event-container" id="upcoming events">

    <!-- Event Category: Webinars & Seminars -->
    <div class="item-container">
      <div class="img-container">
        <img src="../Event/img/home-2.jpg" alt="Webinars & Seminars">
      </div>
      <div class="body-container">
        <div class="overlay"></div>
        <div class="event-info">
          <p class="title">Webinars & Seminars</p>
          <p class="info">Educational Sessions Online and On-site</p>
          <p class="description">Join our expert-led sessions on environmental conservation and sustainability topics.</p>
        </div>
      </div>
    </div>
      
    <!-- Event Category: Outdoor Activities -->
    <div class="item-container">
      <div class="img-container">
        <img src="../Event/img/clean-up.jpg" alt="Outdoor Activities">
      </div>
      <div class="body-container">
        <div class="overlay"></div>
        <div class="event-info">
          <p class="title">Outdoor Activities</p>
          <p class="info">Connect with Nature</p>
          <p class="description">Participate in guided nature walks, bird watching, and other outdoor explorations.</p>
        </div>
      </div>
    </div>
  
    <!-- Event Category: Workshops -->
    <div class="item-container">
      <div class="img-container">
        <img src="../Event/img/workshop.jpg" alt="Workshops">
      </div>
      <div class="body-container">
        <div class="overlay"></div>
        <div class="event-info">
          <p class="title">Workshops</p>
          <p class="info">Hands-on Learning Experiences</p>
          <p class="description">Engage in workshops on recycling, composting, renewable energy, and more.</p>
        </div>
      </div>
    </div>
  
    <!-- Event Category: Contests -->
    <div class="item-container">
      <div class="img-container">
        <img src="../Event/img/home-1.jpg" alt="Contests">
      </div>
      <div class="body-container">
        <div class="overlay"></div>
        <div class="event-info">
          <p class="title">Contests</p>
          <p class="info">Showcase Your Creativity</p>
          <p class="description">Join our contests in photography, art, and innovation for sustainability.</p>
        </div>
      </div>
    </div>
  
  </div>
  <!-- event card list end -->
  
    <!--card slider-->
    <div class="card-wrapper">
      <div class="card-title">
        <h2 class="section-header-title">Seasonal Activities</h2>
      </div>
       <div class="card-container">
          <input type="radio" name="slide" id="c1" checked>
          <label for="c1" class="card">
              <div class="row">
                  <div class="icon">1</div>
                  <div class="description">
                      <h4>Spring Planting</h4>
                      <p>Join our spring planting initiative - help us bring more green to our cities.</p>
                  </div>
              </div>
          </label>
          <input type="radio" name="slide" id="c2" >
          <label for="c2" class="card">
              <div class="row">
                  <div class="icon">2</div>
                  <div class="description">
                      <h4>Summer Conservation</h4>
                      <p>Participate in our summer conservation projects - protect and preserve local wildlife.</p>
                  </div>
              </div>
          </label>
          <input type="radio" name="slide" id="c3" >
          <label for="c3" class="card">
              <div class="row">
                  <div class="icon">3</div>
                  <div class="description">
                      <h4>Autumn Cleanups</h4>
                      <p>Get involved in autumn community cleanups - a great way to prepare our parks for winter.</p>
                  </div>
              </div>
          </label>
          <input type="radio" name="slide" id="c4" >
          <label for="c4" class="card">
              <div class="row">
                  <div class="icon">4</div>
                  <div class="description">
                      <h4>Winter Wildlife Care</h4>
                      <p>Support wildlife during the winter - learn how to create shelters and provide food.</p>
                  </div>
              </div>
          </label>
      </div>
  </div>
  <!--end of the card slider-->


   <!-- sponsors section start -->
   <section class="sponsors" id="sponsors">
      <div class="container">
         <div class="section-header">
            <h2 class="section-header-title">Event Sponsors</h2>
         </div>
         <div class="sponsors-items">
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-1.png" alt="Environmental NGO Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-2.png" alt="Green Tech Company Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-3.png" alt="Renewable Energy Company Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-4.png" alt="Urban Gardening Initiative Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-5.png" alt="Conservation Fund Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-6.png" alt="Eco-Friendly Products Company Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-7.png" alt="Wildlife Protection Organization Logo">
            </div>
            <!-- sponsors item end -->
            <!-- sponsors item start -->
            <div class="sponsors-item">
               <img src="img/sponsor-1.png" alt="Environmental NGO Logo">
            </div>
            <!-- sponsors item end -->
         </div>
      </div>
   </section>
   <!-- sponsors section end -->

  
   <!-- footer start -->
      <!-- 
      - #FOOTER
    -->
    <div id="footer">
      <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
      </div>
      <ul class="social_icon">
          <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
          <li><a href="#"><ion-icon name="logo-tiktok"></ion-icon></a></li>
      </ul>
      <ul class="menu">
          <li><a href="../Index/index-L.php">Home</a></li>
          <li><a href="../About Us/about-us.php">About</a></li>
          <li><a href="../Event/event.php">Events</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
      <p>&copy; <?php echo date("Y"); ?> GreenUnity. All rights reserved.</p>
  </div>

   <!-- footer end -->
</div>




<script src="/Event/event.js"></script>
<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




</body>
</html>
