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
   <title>Support Website</title>
  
   <link rel="icon" href="../Index/Green Unity Logo.png">
   <link rel="stylesheet" type="text/css" href="support.css">
   <!-- ===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


</head>
<body>
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
                    <a href="support.php" class="nav__link">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>

  



 </div>
</header>

 <!-- header end -->

<!-- Support Section Start -->
<section class="support" id="support">
    <div class="support-container1 container">
        <!-- Support Resources Section -->
        <div class="support-left">
            <div class="support-box">
                <h1 class="support-title">
                  How Can We Help?
                </h1>
                <p class="support-subtitle">
                    <span>
                        <i class="bx bx-info-circle"></i>
                        FAQs and Resources
                    </span>
                    <span>
                        <i class="bx bx-envelope"></i>
                        Contact Support
                    </span>
                </p>
                <div class="support-btn">
                    <a href="#faqs" class="btn">Visit FAQs</a>
                    <a href="#contactForm" class="btn">Email Us</a>
                </div>
            </div>
        </div>
        <!-- Image Section -->
        <div class="support-right">
            <div class="support-img-box">
                <img src="../Event/img/performer-3.jpg" alt="Green Unity Support Team">
            </div>
        </div>
    </div>
</section>

   
<!-- Support Info Section Start -->
<section class="support-section" id="support-info">
    <div class="support-container">
        <div class="support-header">
            <h2 class="support-header-title">Get Support</h2>
        </div>
        <div class="support-content">
            <!-- General Inquiries -->
            <div class="support-item">
                <i class="support-icon bx bx-question-mark"></i>
                <div class="support-text">
                    <h3 class="support-title1">General Inquiries</h3>
                    <p class="support-description">Have questions? Get in touch with us to learn more about our mission and how you can contribute.</p>
                    <a href="mailto:info@greenunity.org" class="support-link">info@greenunity.org</a>
                </div>
            </div>
            <!-- Volunteer Information -->
            <div class="support-item">
                <i class="support-icon bx bx-group"></i>
                <div class="support-text">
                    <h3 class="support-title1">Volunteer Support</h3>
                    <p class="support-description">Interested in volunteering? Contact us for information on current and upcoming volunteer opportunities.</p>
                    <a href="mailto:volunteer@greenunity.org" class="support-link">volunteer@greenunity.org</a>
                </div>
            </div>
            <!-- Environmental Concerns -->
            <div class="support-item">
                <i class="support-icon bx bx-planet"></i>
                <div class="support-text">
                    <h3 class="support-title1">Report Environmental Concerns</h3>
                    <p class="support-description">Witnessed an environmental issue or emergency? Let us know how we can address it together.</p>
                    <a href="mailto:report@greenunity.org" class="support-link">report@greenunity.org</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Support Info Section End -->




   <!-- Contact section start -->
   <section class = "contact-section">
    <div class = "contact-bg">
      <h3>Join Our Green Mission</h3>
      <h2 class="section-header-title">Contact Us</h2>
      <div class = "line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <p class = "text">Green Unity is dedicated to fostering a sustainable future through community engagement, education, and action. Whether you have questions, want to participate in our projects, or report environmental concerns, we're here to help.</p>
    </div>


    <div class = "contact-body">
      <div class = "contact-info1">
        <div>
          <span><i class = "bx bx-phone"></i></span>
          <span>Phone No.</span>
          <span class = "text">1-800-GREEN-UNITY</span>
        </div>
        <div>
          <span><i class = "bx bx-envelope-open"></i></span>
          <span>E-mail</span>
          <span class = "text">support@greenunity.org</span>
        </div>
        <div>
          <span><i class = "bx bx-map"></i></span>
          <span>Address</span>
          <span class = "text">2123 Greenway Rd, Nature City, Eco State</span>
        </div>
        <div>
          <span><i class = "bx bx-time"></i></span>
          <span>Opening Hours</span>
          <span class = "text">Monday - Friday (8:00 AM to 6:00 PM)</span>
        </div>
      </div>

      <div class = "contact-form">
        <form>
          <div>
            <input type = "text" class = "form-control" placeholder="First Name">
            <input type = "text" class = "form-control" placeholder="Last Name">
          </div>
          <div>
            <input type = "email" class = "form-control" placeholder="E-mail">
            <input type = "text" class = "form-control" placeholder="Phone">
          </div>
          <textarea rows = "5" placeholder="How can we assist you?" class = "form-control"></textarea>
          <input type = "submit" class = "send-btn" value = "send Message">
        </form>

        <div>
          <img src = "../Event/img/about-1.jpg" alt = "Green Unity Support">
        </div>
      </div>
    </div>

    <div class = "map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

  </section>
  <!-- Contact section end -->


  <!-- Emergency Contact Section Start -->
<div class="emergency-contact-wrapper">
    <h2 class="section-header-title">Emergency Contact</h2>
    <p>If you encounter an environmental emergency or need to report a pressing environmental issue, please reach out to us immediately through the following channels.</p>
    <div class="content-box">
        <div class="card">
            <i class="bx bx-phone-call bx-md"></i>
            <h2>Immediate Assistance</h2>
            <p>For urgent environmental concerns, please call us directly.</p>
            <p class="contact-info1">1-800-HELP-911</p>
        </div>
        <div class="card">
            <i class="bx bx-envelope bx-md"></i>
            <h2>Email Us</h2>
            <p>For non-urgent reports or inquiries, send us an email.</p>
            <p class="contact-info1">emergency@greenunity.org</p>
        </div>
        <div class="card">
            <i class="bx bx-broadcast bx-md"></i>
            <h2>Hotline</h2>
            <p>Our 24/7 environmental hotline for reporting and advice.</p>
            <p class="contact-info1">1-800-GREEN-911</p>
        </div>
    </div>
</div>
<!-- Emergency Contact Section End -->
  
   <!-- footer start -->
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


<script src="support.js"></script>
<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
