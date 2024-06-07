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
   <title>About Us Website</title>
   <link rel="icon" href="../Index/Green Unity Logo.png">
   <link rel="stylesheet" type="text/css" href="../About Us/about-us.css">
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
              Green Unity: Empowering Sustainability
            </h1>
            <p class="home-subtitle">
               <span>
                  <i class="bx bx-leaf"></i>
                  Promoting Eco-Friendly Living
               </span>
               <span>
                  <i class="bx bx-globe"></i>
                  Making a Global Impact
               </span>
            </p>
            <div class="home-btn">
               <a href="#mission" class="btn">Learn More About Us</a>
            </div>
         </div>
         <div class="home-right">
            <div class="home-box">
               <div class="home-decor"></div>
               <div class="home-img-box1">
                  <img src="../About Us/global-goals_ver_1.jpg" alt="Sustainable Project 1">
               </div>
               <div class="home-img-box2">
                  <img src="../About Us/green-earth.jpg" alt="Sustainable Project 2">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- home section end -->
   
   <section class="about" id="mission">
      <div class="container">
         <div class="about-content">
            <div class="section-header">
               <h2 class="section-header-title">Our Mission</h2>
            </div>
            <div class="about-img-box">
               <img src="../About Us/mission.jpeg" alt="About Green Unity">
               <div class="about-decor1" ></div>
               <div class="about-decor2" ></div>
            </div>
            <div class="about-text">
               <p>At Green Unity, our mission is to inspire and facilitate a greener, more sustainable world. We engage communities in environmental conservation projects, promote sustainable living practices, and advocate for eco-friendly policies.</p>
               <div class="about-btn">
                  <a href="../Projects/Projects.php" class="btn">Explore Our Projects</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="about" id="vision">
    <div class="container">
       <div class="about-content">
          <div class="section-header">
             <h2 class="section-header-title">Our Vission</h2>
          </div>
          <div class="about-img-box">
             <img src="../About Us/vision.png" alt="About Green Unity">
             <div class="about-decor1" ></div>
             <div class="about-decor2" ></div>
          </div>
          <div class="about-text">
             <p>Our vision is a planet where every individual and community lives in harmony with nature, contributing to the health and well-being of our global ecosystem.</p>
             <div class="about-btn">
                <a href="../Projects/Projects.php" class="btn">Explore Our Projects</a>
             </div>
          </div>
       </div>
    </div>
 </section>


   <!-- Mission and Vision section end -->

   <!-- team members section -->
   <div class="team-container">
      <div class="team-section-title">
          <h1 class="team-h1">Meet Our Team</h1>
      </div>

      <div class="team-row">

        <!-- Team Member 1 -->
          <div class="team-column">
              <div class="team">
                  <div class="team-img">
                      <img src="../Event/img/performer-1-small.jpg" alt="Team Image" class="team-images">
                  </div>
                  <div class="team-content">
                      <h2 class="team-h2">Emma G</h2>
                      <h3 class="team-h3">Environmental Scientist</h3>
                      <p>Emma leads our research and development efforts in sustainable practices and technologies.</p>
                      <h4 class="team-h4">emma@gmail.com</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="ri-twitter-fill"></i></a>
                      <a href="#" class="social-fb"> <i class="ri-facebook-fill"></i></a>
                      <a href="#" class="social-li"> <i class="ri-linkedin-fill"></i></a>
                      <a href="#" class="social-in"> <i class="ri-instagram-line"></i></a>
                      <a href="#" class="social-yt"> <i class="ri-youtube-fill"></i></a>
                  </div>
              </div>
          </div>

          <!-- Team Member 2 -->
          <div class="team-column">
              <div class="team">
                  <div class="team-img">
                      <img src="../Event/img/performer-2-small.jpg" alt="Team Image" class="team-images">
                  </div>
                  <div class="team-content">
                      <h2 class="team-h2">John Leaf</h2>
                      <h3 class="team-h3">Conservation Coordinator</h3>
                      <p>John orchestrates our conservation projects and partnerships with local communities.</p>
                      <h4 class="team-h4">john@gmail.com</h4>
                  </div>
                  <div class="team-social">
                    <a href="#" class="social-tw"> <i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social-fb"> <i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social-li"> <i class="ri-linkedin-fill"></i></a>
                    <a href="#" class="social-in"> <i class="ri-instagram-line"></i></a>
                    <a href="#" class="social-yt"> <i class="ri-youtube-fill"></i></a>
                  </div>
              </div>
          </div>

            <!-- Team Member 3 -->
          <div class="team-column">
              <div class="team">
                  <div class="team-img">
                      <img src="../Event/img/performer-1-small.jpg" alt="Team Image" class="team-images">
                  </div>
                  <div class="team-content">
                      <h2 class="team-h2">Sophia Seed</h2>
                      <h3 class="team-h3">Urban Greening Lead</h3>
                      <p>Sophia spearheads our initiatives to green urban spaces and promote community gardens.</p>
                      <h4 class="team-h4">sophia@gmail.com</h4>
                  </div>
                  <div class="team-social">
                    <a href="#" class="social-tw"> <i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social-fb"> <i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social-li"> <i class="ri-linkedin-fill"></i></a>
                    <a href="#" class="social-in"> <i class="ri-instagram-line"></i></a>
                    <a href="#" class="social-yt"> <i class="ri-youtube-fill"></i></a>
                  </div>
              </div>
          </div>

          <!-- Team Member 4 -->
          <div class="team-column">
              <div class="team">
                  <div class="team-img">
                      <img src="../Event/img/performer-3-small.jpg" alt="Team Image" class="team-images">
                  </div>
                  <div class="team-content">
                      <h2 class="team-h2">Alex Brook</h2>
                      <h3 class="team-h3">Sustainability Advocate</h3>
                      <p>Alex engages with businesses and policymakers to promote sustainable industry practices.</p>
                      <h4 class="team-h4">alex@gmail.com</h4>
                  </div>
                  <div class="team-social">
                    <a href="#" class="social-tw"> <i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social-fb"> <i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social-li"> <i class="ri-linkedin-fill"></i></a>
                    <a href="#" class="social-in"> <i class="ri-instagram-line"></i></a>
                    <a href="#" class="social-yt"> <i class="ri-youtube-fill"></i></a>
                  </div>
              </div>
          </div>

      </div>

  </div>

   <!-- team members section end -->

<!-- history of GreenUnity section start -->

<section class="intro">
   <div class="history-container">
     <h1 class="history-h1">History of Green Unity &darr;</h1>
   </div>
 </section>
 
 <section class="timeline">
   <ul>
     <li>
       <div>
        <time>2001</time> Green Unity was founded with the mission to promote sustainable living and environmental education in local communities.
       </div>
     </li>
     <li>
       <div>
        <time>2003</time> Launched our first urban greening project, transforming a derelict city lot into a thriving community garden.
      </div>
     </li>
     <li>
       <div>
        <time>2005</time> Partnered with local schools to introduce environmental education into their curricula, fostering early eco-awareness.
       </div>
     </li>
     <li>
       <div>
        <time>2008</time> Expanded our reach by initiating a tree-planting campaign, successfully planting over 10,000 trees in urban areas.
       </div>
     </li>
     <li>
       <div>
        <time>2011</time> Hosted our first Green Unity Conference, bringing together environmental activists, scholars, and community members to discuss sustainability strategies.
       </div>
     </li>
     <li>
       <div>
        <time>2016</time> Introduced Green Tech Solutions, a program to implement sustainable technologies in local businesses and homes.
       </div>
     </li>
     <li>
       <div>
        <time>2018</time> Green Unity's efforts recognized with an environmental achievement award for our impactful community engagement and conservation efforts.
       </div>
     </li>
     <li>
       <div>
        <time>2020</time> Partnered with global environmental organizations to address climate change, leading to several international projects and collaborations.
       </div>
     </li>
     <li>
       <div>
        <time>2021</time> Green Unity launched a significant Urban Forestry initiative aimed at enhancing urban biodiversity and reducing the city's carbon footprint. 
       </div>
     </li>
     <li>
       <div>
        <time>2022</time> Launched the Green Youth Ambassador Program, empowering young leaders to take active roles in environmental advocacy.
       </div>
     </li>
     <li>
       <div>
        <time>2023</time> Reached a milestone by assisting over 50 communities in establishing their own sustainable practices and green spaces.
       </div>
     </li>
     <li>
       <div>
        <time>2024</time> Announced a new initiative focused on marine conservation, aiming to restore and protect coastal and marine ecosystems.
       </div>
     </li>
   </ul>
 </section>

 <!-- history of GreenUnity section end -->
 

   <!-- What We Do section start -->
   <div class="what-we-do-wrapper">
        <h1>What We Do</h1>
        <p>At Green Unity, we're dedicated to fostering a sustainable future through our core initiatives that promote environmental health and community well-being.</p>
             <div class="content-box">
                <div class="card">
                    <i class="bx bx-planet bx-md"></i>
                    <h2>Environmental Conservation</h2>
                  <p>We work on preserving natural habitats, protecting wildlife, and restoring ecosystems to combat biodiversity loss.</p>

                </div>
                <div class="card">
                    <i class="bx bx-tree bx-md"></i>
                    <h2>Urban Greening</h2>
                   <p>Our urban greening projects transform city spaces into green, vibrant areas that enhance urban life and biodiversity.</p>
                         
                </div>
                <div class="card">
                    <i class='bx bx-group bx-md'></i>
                    <h2>Community Engagement</h2>
                  <p>Through workshops, volunteer opportunities, and educational programs, we empower communities to take action for the environment.</p>
                         
                </div>
                <div class="card">
                    <i class="bx bx-recycle bx-md"></i>
                    <h2>Sustainable Practices</h2>
                    <p>We promote sustainable living practices, including waste reduction, recycling, and the use of renewable resources.</p>
                         
                </div>
                <div class="card">
                    <i class="bx bx-water bx-md"></i>
                    <h2>Water Conservation</h2>
                    <p>Our initiatives focus on preserving water resources through conservation projects, awareness campaigns, and efficient usage practices.</p>
                         
                </div>
                <div class="card">
                    <i class="bx bx-solar-panel bx-md"></i>
                    <h2>Renewable Energy</h2>
                    <p>We advocate for and implement renewable energy solutions to reduce carbon footprints and combat climate change.</p>
                         
                </div>
             </div>
    </div>
   <!-- What we do section end -->

    <!-- Testimonials or Endorsements section start -->
    <div class="section__container">
      <div class="testimonial-header">
        <p>TESTIMONIALS</p>
        <h1>What Our Supporters Say About Us</h1>
      </div>
      <div class="testimonials__grid">
        <div class="testimonial-card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
            "Joining Green Unity's urban greening initiative transformed our neighborhood. The community gardens not only beautify our area but also foster a strong sense of unity and environmental responsibility among residents."
          </p>
          <hr />
          <img src="../Index/testi-avatar.png" alt="user" />
          <p class="name">Alex Johnson</p>
        </div>
        <div class="testimonial-card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
            "Green Unity's wildlife conservation programs are remarkable. Seeing the direct impact of our efforts in preserving local wildlife and restoring natural habitats has been truly inspiring."
          </p>
          <hr />
          <img src="../Event/img/performer-1-small.jpg" alt="user" />
          <p class="name">Mia Wong</p>
        </div>
        <div class="testimonial-card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
            "As a volunteer, I've learned so much about sustainable living and environmental conservation. Green Unity's educational workshops have empowered me to make significant changes in my daily life."
          </p>
          <hr />
          <img src="../Event/img/performer-2-small.jpg" alt="user" />
          <p class="name">David Kim</p>
        </div>
      </div>
      <div class="testimonial-footer">
        <h4>Join Our Green Movement!</h4>
        <p>
          Your support helps us to continue our mission in creating greener, more sustainable communities. Get involved today!
        </p>
        <button>LEARN MORE</button>
      </div>
    </div>


   <!-- contact section start -->
   <section class="contact" id="contact">
      <div class="container">
         <div class="section-header">
            <h2 class="section-header-title">Get In Touch</h2>
            <p>We'd love to hear from you! Whether you're interested in participating in our projects, have questions about sustainable practices, or want to support our cause, reach out to us.</p>
         </div>
         <div class="contact-content">
            <div class="contact-items">
               <div class="contact-item">
                  <i class="bx bx-phone"></i>
                  <div class="text">
                     <h3>Call Us</h3>
                     <p>+1 234 567 890</p>
                  </div>
               </div>
               <div class="contact-item">
                  <i class="bx bx-envelope"></i>
                  <div class="text">
                     <h3>Email Us</h3>
                     <p>contact@greenunity.org</p>
                  </div>
               </div>
               <div class="contact-item">
                  <i class="bx bx-map"></i>
                  <div class="text">
                     <h3>Visit Us</h3>
                     <p>123 Green Way, Sustainability City</p>
                  </div>
               </div>
            </div>
            <form class="contact-form">
               <div class="col-2">
                  <div class="input-box">
                     <input type="text" placeholder="Your Name" class="input">
                  </div>
                  <div class="input-box">
                     <input type="text" placeholder="Your Email" class="input">
                  </div>
               </div>
               <div class="input-box">
                  <input type="text" placeholder="Subject" class="input">
               </div>
               <div class="input-box">
                  <textarea placeholder="Your Message" class="input input-message"></textarea>
               </div>
               <button type="submit" class="btn">Send Message</button>
            </form>
         </div>
      </div>
   </section>
   <!-- contact section end -->

  
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



<!--here-->
<script>
    /* Search Bar JavaScript */
    const toggleSearch = (search, button) => {
        const searchBar = document.getElementById(search),
              searchButton = document.getElementById(button);

        searchButton.addEventListener('click', () => {
            searchBar.classList.toggle('show-search');
        });
    }
    toggleSearch('search-bar', 'search-button');
</script>



<script src="about-us.js"></script>
<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




</body>
</html>
