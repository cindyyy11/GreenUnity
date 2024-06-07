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
   <title>Homepage</title>
   
   <link rel="stylesheet" type="text/css" href="index-L.css">
   <!-- ===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="icon" href="Green Unity Logo.png">

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
      <a href="index-L.php" class="header-logo">
         <img src="Green Unity Logo.png" alt="Green Unity Logo" class="logo-img">
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
                        <a href="index-L.php" class="nav__link">Home</a>
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


    <!-- Parallax Section -->
    <section class="parallex-section">
      <h2 id="text"><span>it's time for a new</span></br>Adventure</h2>
      <img src="bird1.png" id="bird1">
      <img src="bird2.png" id="bird2">
      <img src="forest.png" id="forest">
      <a href="#parallex-sec" id="parallex-btn">Explore</a>
      <img src="rocks.png" id="rocks">
      <img src="water.png" id="water">
    </section>

    <!-- Main Content -->
    <main>
      <article>
      <div class="parallex-sec" id="parallex-sec">
      <!-- Hero Section -->
     
      <section class="hero" id="home">
         <div class="container">
     
            <p class="section-subtitle">
               <img src="subtitle-img-green.png" width="32" height="7" alt="Wavy line">
     
               <span>Welcome to GreenUnity</span>
            </p>
     
               <h2 class="h1 hero-title">
                Empowering Communities - <strong>Greener Tomorrow</strong>
               </h2>
     
            <p class="hero-text">
              Welcome to Green Unity, where we unite efforts for environmental conservation and urban greening.
            </p>
     
            <button class="btn btn-primary" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
               <span>Donation</span>
     
               <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
               </button>
                <p>*Member exclusive function</p>
             </div>
           </section>

         <!-- - #FEATURES-->
  
        <section class="section features">
         <div class="container">
 
           <ul class="features-list">
            
            <!-- Feature 1: Community Engagement -->
             <li class="features-item">
               <div class="item-icon">
                 <ion-icon name="people-outline"></ion-icon>
               </div>
 
               <div>
                 <h3 class="h4 item-title">Community Engagement</h3>
 
                 <p class="item-text">
                  We foster community participation in environmental preservation through workshops, clean-up events, and tree planting, empowering individuals to make a tangible impact.
                 </p>
               </div>
             </li>
             
             <!-- Feature 2: Urban Greening -->
             <li class="features-item">
               <div class="item-icon">
                 <ion-icon name="leaf-outline"></ion-icon>
               </div>
 
               <div>
                 <h3 class="h4 item-title">Urban Greening</h3>
 
                 <p class="item-text">
                  Our urban greening projects, including the development of green spaces and wildlife corridors, aim to enhance biodiversity and improve the quality of urban environments.
                 </p>
               </div>
             </li>
             
             <!-- Feature 3: Wildlife Conservation -->
             <li class="features-item">
               <div class="item-icon">
                 <ion-icon name="paw-outline"></ion-icon>
               </div>
 
               <div>
                 <h3 class="h4 item-title">Wildlife Conservation</h3>
 
                 <p class="item-text">
                  Dedicated to protecting endangered species and habitats, we work on wildlife conservation initiatives that include habitat restoration and anti-poaching efforts.
                 </p>
               </div>
             </li>
             
             <!-- Feature 4: Education and Awareness -->
             <li class="features-item">
               <div class="item-icon">
                 <ion-icon name="school-outline"></ion-icon>
               </div>
 
               <div>
                 <h3 class="h4 item-title">Education and Awareness</h3>
 
                 <p class="item-text">
                  Through educational programs, webinars, and seminars, we aim to raise awareness about the importance of environmental conservation and sustainable living practices.
                 </p>
               </div>
             </li>
           </ul>
         </div>
       </section>
    </div>

        <!--circular navigational bar-->
        <nav class="nav-menu">
         <div class="nav-content">
           <div class="toggle-btn">
             <i class='bx bx-plus'></i>
           </div>
           <span style="--i:1;">
             <a href="#about"><i class='bx bx-info-circle'></i></a>
           </span>
           <span style="--i:2;">
             <a href="#event"><i class='bx bx-calendar-event'></i></a>
           </span>
           <span style="--i:3;">
             <a href="#volunteers"><i class='bx bx-group' ></i></a>
           </span>
           <span style="--i:4;">
             <a href="#blog"><i class='bx bx-news' ></i></a>
           </span>
           <span style="--i:5;">
             <a href="#contacts"><i class='bx bx-envelope' ></i></a>
           </span>
         </div>
       </nav>

    
        <!-- About Us Section -->
        <section class="section about" id="about">
          <div class="container">
  
            <div class="about-banner">
  
              <h2 class="deco-title">About Us</h2>
  
              <img src="../Index/deco-img.png" width="58" height="261" alt="Decorative" class="deco-img">
              
              <!-- Banner Images -->
              <div class="banner-row">
                <div class="banner-col">
                  <img src="../Index/view-3d-forest-landscape-with-mountains-sky.jpg" width="315" height="380" loading="lazy" alt="Greenery"
                    class="about-img w-100">
  
                  <img src="../Index/rendering-miniature-world.jpg" width="386" height="250" loading="lazy" alt="Urban Gardening"
                    class="about-img about-img-2 w-100">
                </div>
  
                <div class="banner-col">
                  <img src="../Index/digital-art-with-hands-holding-planet.jpg" width="250" height="277" loading="lazy" alt="Conservation"
                    class="about-img about-img-3 w-100">
  
                  <img src="../Index/community.jpg" width="315" height="380" loading="lazy" alt="Community Engagement"
                    class="about-img w-100">
                </div>
  
              </div>
  
            </div>
  
            <div class="about-content">
  
              <p class="section-subtitle">
                <img src="../Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
  
                <span>Our Commitment</span>
              </p>
  
              <h2 class="h2 section-title">
                United for a <strong>Sustainable Future</strong>
              </h2>
              
              
            <!-- Tab Navigation for Mission, Vision, and Plans -->
              <ul class="tab-nav">
  
                <li>
                  <button class="tab-btn active">Our Mission</button>
                </li>
  
                <li>
                  <button class="tab-btn">Our Vision</button>
                </li>
  
                <li>
                  <button class="tab-btn">Our Strategy</button>
                </li>
  
              </ul>
  
              <div class="tab-content">
  
                <p class="section-text">
                  Green Unity is dedicated to inspiring and empowering communities to participate in environmental conservation and urban greening initiatives. We believe in creating sustainable solutions that benefit both the planet and its inhabitants.
                </p>
  
                <ul class="tab-list">
  
                  <li class="tab-item">
                    <div class="item-icon">
                      <ion-icon name="leaf-outline"></ion-icon>
                    </div>
  
                    <p class="tab-text">Promoting Urban Greening</p>
                  </li>
  
                  <li class="tab-item">
                    <div class="item-icon">
                      <ion-icon name="globe-outline"></ion-icon>
                    </div>
  
                    <p class="tab-text">Wildlife Conservation</p>
                  </li>
  
                  <li class="tab-item">
                    <div class="item-icon">
                      <ion-icon name="people-outline"></ion-icon>
                    </div>
  
                    <p class="tab-text">Community Engagement</p>
                  </li>
  
                  <li class="tab-item">
                    <div class="item-icon">
                      <ion-icon name="school-outline"></ion-icon>
                    </div>
  
                    <p class="tab-text">Environmental Education</p>
                  </li>
  
                </ul>
  
                <button class="btn btn-secondary" onclick="window.location.href='../About Us/about-us.php'">
       
                  <span>Discover More</span>
            
                  <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                </button>
  
              </div>
  
            </div>
  
          </div>
        </section>
  
       




        <!--CTA-->
  
        <section class="section cta">
          <div class="container">
  
            <div class="cta-content">
              <h2 class="h2 section-title">324+ Trusted Global Partners</h2>

              <button class="btn btn-outline" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
                <span>Become a Partner</span>

                <ion-icon name="leaf-outline" aria-hidden="true"></ion-icon>
              </button>
            </div>
  
            <figure class="cta-banner">
              <img src="../Index/Green Earth.jpg" width="520" height="228" loading="lazy" alt="Green Earth"
                class="img-cover">
            </figure>
  
          </div>
        </section>
  
  
  
  
  
        <!--SERVICE-->
  
        <section class="section service" id="service" style="background-image: url('../Index/service-map.png')">
          <div class="container">
  
            <p class="section-subtitle">
              <img src="../Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
  
              <span>Our Initiatives</span>
            </p>
  
            <h2 class="h2 section-title">
              Dedicated Actions to <br>
              <strong>keep The World Safe</strong>
            </h2>
  
            <ul class="service-list">
               <!-- Urban Greening -->
              <li>
                <div class="service-card">
  
                  <div class="card-icon">
                    <ion-icon name="leaf-outline"></ion-icon>
                  </div>
  
                  <h3 class="h3 card-title">Urban Greening</h3>
  
                  <p class="card-text">
                    Transforming urban spaces into green havens to promote biodiversity, enhance air quality, and improve urban well-being.
                  </p>
  
                  <a href="#" class="btn-link">
                    <span>Learn More</span>
  
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
  
                </div>
              </li>
              
              <!-- Wildlife Conservation -->
              <li>
                <div class="service-card">
  
                  <div class="card-icon">
                    <ion-icon name="paw-outline"></ion-icon>
                  </div>
  
                  <h3 class="h3 card-title">Wildlife Conservation</h3>
  
                  <p class="card-text">
                    Protecting endangered species and their habitats through conservation projects, anti-poaching efforts, and habitat restoration.
                  </p>
  
                  <a href="#" class="btn-link">
                    <span>Discover Projects</span>
  
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
  
                </div>
              </li>
              
              <!-- Community Engagement -->
              <li>
                <div class="service-card">
  
                  <div class="card-icon">
                    <ion-icon name="people-outline"></ion-icon>
                  </div>
  
                  <h3 class="h3 card-title">Community Engagement</h3>
  
                  <p class="card-text">
                    Empowering communities through educational programs, workshops, and volunteer opportunities to foster environmental stewardship.
                  </p>
  
                  <a href="#" class="btn-link">
                    <span>Get Involved</span>
  
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
  
                </div>
              </li>

              <!-- Sustainable Practices -->
              <li>
                <div class="service-card">
  
                  <div class="card-icon">
                    <ion-icon name="globe-outline"></ion-icon>
                  </div>
  
                  <h3 class="h3 card-title">Sustainable Practices</h3>
  
                  <p class="card-text">
                    Promoting sustainable living practices through initiatives like zero-waste programs, renewable energy projects, and eco-friendly resources.
                  </p>
  
                  <a href="#" class="btn-link">
                    <span>Explore More</span>
  
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>
  
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
  
         <!-- Facts Start -->
         <div class="facts-section">
          <div class="facts-overlay">
              <div class="fact">
                  <i class="ri-home-heart-fill"></i>
                  <h3>150+</h3>
                  <p>Countries</p>
              </div>
              <div class="fact">
                  <i class="ri-group-fill"></i>
                  <h3>400+</h3>
                  <p>Volunteers</p>
              </div>
              <div class="fact">
                  <i class="ri-hand-heart-fill"></i>
                  <h3>RM 10000</h3>
                  <p>Our Goal</p>
              </div>
              <div class="fact">
                  <i class="ri-money-dollar-box-fill"></i>
                  <h3>RM 5000</h3>
                  <p>Raised</p>
              </div>
          </div>
      </div>
      
      <!-- Facts End -->
      
      <!-- Carbon Footprint Calculator Start -->
      <div id="dynamicBackground" class="calculator-container">
        <h2 class="text-carbon">Discover Your Impact</h2>
        
        <div class="input-group">
            <i class="ri-flashlight-fill"></i>
            <input type="range" min="0" max="1000" value="500" class="slider" id="electricityUsage">
            <label for="electricityUsage" class="text-carbon1">Electricity Usage (kWh)</label>
        </div>
        
        <div class="input-group">
            <i class="ri-fire-fill"></i>
            <input type="range" min="0" max="500" value="250" class="slider" id="gasConsumption">
            <label for="gasConsumption" class="text-carbon1">Gas Consumption (cubic meters)</label>
        </div>
        
        <div class="input-group">
            <i class="ri-car-fill"></i>
            <input type="range" min="0" max="2000" value="1000" class="slider" id="vehicleMileage">
            <label for="vehicleMileage" class="text-carbon1">Vehicle Mileage (miles)</label>
        </div>
    
        <div id="resultContainer" class="result-container">
            <canvas id="impactVisual" width="400" height="200"></canvas>
            <p id="resultText"></p>
        </div>
        
        <div id="comparativeVisuals">
        </div>
    </div>

    
        <!--Causes Start-->
  
        <section class="section causes" id="causes">
          <div class="container">
            <h2 class="section-title">Support Our Environmental Causes</h2>
            <p class="section-text">Your donations help us to fund vital projects in wildlife conservation, urban greening, and educational programs. Every contribution makes a difference.</p>
            
            <ul class="causes-list">
              <!-- Urban Greening Project -->
              <li>
                <div class="causes-card">
  
                  <figure class="card-banner">
                    <img src="../Index/Urban Green.jpg" width="520" height="325" loading="lazy" alt="Urban Greening"
                      class="img-cover">
                  </figure>
  
                  <div class="card-content">
  
                    <div class="progress-wrapper">
                      <p class="progress-text">
                        <span>Raised</span>
  
                        <data value="256">RM256</data>
                      </p>
  
                      <data class="progress-value" value="83">83%</data>
                    </div>
  
                    <div class="progress-box">
                      <div class="progress"></div>
                    </div>
  
                    <h3 class="h3 card-title">Urban Greening Initiatives</h3>
  
                    <div class="card-wrapper">
  
                      <p class="card-wrapper-text">
                        <span>Goal</span>
  
                        <data class="green" value="34562">RM34562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>Raise</span>
  
                        <data class="yellow" value="562">RM562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>To Go</span>
  
                        <data class="cyan" value="864">RM864</data>
                      </p>
  
                    </div>
  
                    <button class="btn btn-secondary" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
                    <p>*Member-exclusive function</p>
                  </div>
  
                </div>
              </li>
              
            <!-- Wildlife Conservation Project -->
              <li>
                <div class="causes-card">
  
                  <figure class="card-banner">
                    <img src="../Index/Wildlife.jpg" width="520" height="325" loading="lazy" alt="Wildlife Conservation Project"
                      class="img-cover">
                  </figure>
  
                  <div class="card-content">
  
                    <div class="progress-wrapper">
                      <p class="progress-text">
                        <span>Raised</span>
  
                        <data value="256">RM256</data>
                      </p>
  
                      <data class="progress-value" value="83">83%</data>
                    </div>
  
                    <div class="progress-box">
                      <div class="progress"></div>
                    </div>
  
                    <h3 class="h3 card-title">Wildlife Conservation Efforts</h3>
  
                    <div class="card-wrapper">
  
                      <p class="card-wrapper-text">
                        <span>Goal</span>
  
                        <data class="green" value="34562">RM34562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>Raise</span>
  
                        <data class="yellow" value="562">RM562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>To Go</span>
  
                        <data class="cyan" value="864">RM864</data>
                      </p>
  
                    </div>
  
                    <button class="btn btn-secondary" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
                    <p>*Member-exclusive function</p>
                  </div>
                </div>
              </li>
              
               <!-- Community Education Project -->
              <li>
                <div class="causes-card">
  
                  <figure class="card-banner">
                    <img src="../Index/Educational.jpg" width="520" height="325" loading="lazy" alt="Community Education"
                      class="img-cover">
                  </figure>
  
                  <div class="card-content">
  
                    <div class="progress-wrapper">
                      <p class="progress-text">
                        <span>Raised</span>
  
                        <data value="256">$256</data>
                      </p>
  
                      <data class="progress-value" value="83">83%</data>
                    </div>
  
                    <div class="progress-box">
                      <div class="progress"></div>
                    </div>
  
                    <h3 class="h3 card-title">Environmental Education Programs</h3>
  
                    <div class="card-wrapper">
  
                      <p class="card-wrapper-text">
                        <span>Goal</span>
  
                        <data class="green" value="34562">RM34562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>Raise</span>
  
                        <data class="yellow" value="562">RM562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>To Go</span>
  
                        <data class="cyan" value="864">RM864</data>
                      </p>
  
                    </div>
  
                    <button class="btn btn-secondary" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
                    <p>*Member-exclusive function</p>
                  </div>
  
                </div>
              </li>
              
              <!-- General Fund -->
              <li>
                <div class="causes-card">
  
                  <figure class="card-banner">
                    <img src="../Index/General.jpg" width="520" height="325" loading="lazy" alt="General Fund"
                      class="img-cover">
                  </figure>
  
                  <div class="card-content">
  
                    <div class="progress-wrapper">
                      <p class="progress-text">
                        <span>Raised</span>
  
                        <data value="256">RM256</data>
                      </p>
  
                      <data class="progress-value" value="83">83%</data>
                    </div>
  
                    <div class="progress-box">
                      <div class="progress"></div>
                    </div>
  
                    <h3 class="h3 card-title">General Fund for Green Unity</h3>
  
                    <div class="card-wrapper">
  
                      <p class="card-wrapper-text">
                        <span>Goal</span>
  
                        <data class="green" value="34562">RM34562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>Raise</span>
  
                        <data class="yellow" value="562">RM562</data>
                      </p>
  
                      <p class="card-wrapper-text">
                        <span>To Go</span>
  
                        <data class="cyan" value="864">RM864</data>
                      </p>
  
                    </div>
  
                    <button class="btn btn-secondary" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
                    <p>*Member-exclusive function</p>
                  </div>
  
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
        
        <!-- Causes End -->
  
        
       <!-- Donate Section Start -->
<div class="donate">
  <div class="donate-content">
    <!-- Content for donating goes here -->
    <h1 class="donate-big">Support Green Unity</h1>
    <h2 class="donate-big">Your Contributions Make a Difference</h2>
    <p>Every donation helps us protect the environment, conserve wildlife, and educate communities. Choose how you'd like to contribute:</p>
  </div>
  <div class="donate-form-section">
    <!-- Donation form goes here -->
    <form class="donate-form">
      <input type="text" placeholder="Name" required />
      <input type="email" placeholder="Email" required />
      <div class="donation-amounts">
        <input type="radio" id="donate-25" name="donation-amount" value="25" checked>
        <label for="donate-10">RM 25 - Plant 25 Trees</label>
        <input type="radio" id="donate-60" name="donation-amount" value="50">
        <label for="donate-50">RM 50 - Support Wildlife Rescue Missions</label>
        <input type="radio" id="donate-100" name="donation-amount" value="100">
        <label for="donate-100">RM 100 - Educate a Classrooom on Sustainability</label>
      </div>
      <button type="submit" onclick="window.location.href='../Log-in-Sign-up/login-sign.php'">Donate Now</button>
      <p>*Member-exclusive function</p>
    </form>
  </div>
</div>
<!-- Donate Section End -->





        <!-- Testimonials Section -->
  
        <section class="testi">
  
          <div class="testi-content">
  
            <p class="section-subtitle">
              <img src="../Index/subtitle-img-white.png" width="32" height="7" alt="Wavy line" class="testi-img">
  
              <span>Community Voices</span>
            </p>
  
            <h2 class="h2 section-title">
              Impact Stories from <strong>Our Supporters</strong>
            </h2>
  
            <div class="testi-card">
  
              <figure class="card-avatar">
                <img src="../Index/testi-avatar.png" width="60" height="60" loading="lazy" alt="David S. Neuman" class="testi-img">
              </figure>
  
              <div>
                <blockquote class="testi-text">
                  "Joining Green Unity's urban greening initiative transformed our neighborhood. The community gardens not only beautify our area but also foster a strong sense of unity and environmental responsibility among residents."
                </blockquote>
  
                <h3 class="testi-name">David S. Neuman</h3>
  
                <p class="testi-title">Community Volunteer</p>
              </div>
  
            </div>
  
          </div>
  
          <figure class="testi-banner">
            <img src="../Index/community -testi.jpg" width="960" height="846" loading="lazy" alt="Community Garden"
              class="testi-img-cover">
          </figure>
  
        </section>
  
  
  
  
  
        <!-- Partners Section -->
  
        <section class="section partner">
          <div class="container">
            
            <h2 class="section-title">Our Partners</h2>

            <!-- Partner 1 -->
            <a href="#" class="partner-logo">
              <img src="../Index/partner-1.png" width="157" height="55" loading="lazy" alt="Environmental Organization"
                class="gray">
  
              <img src="../Index/partner-1-active.png" width="157" height="55" loading="lazy" alt="Environmental Organization"
                class="color">
            </a>
            
            <!-- Partner 2 -->
            <a href="#" class="partner-logo">
              <img src="../Index/partner-2.png" width="163" height="55" loading="lazy" alt="Urban Gardening Initiative"
                class="gray">
  
              <img src="../Index/partner-2-active.png" width="163" height="55" loading="lazy"
                alt="Urban Gardening Initiative" class="color">
            </a>
            
            <!-- Partner 3 -->
            <a href="#" class="partner-logo">
              <img src="../Index/partner-3.png" width="149" height="55" loading="lazy" alt="Wildlife Conservation Foundation"
                class="gray">
  
              <img src="../Index/partner-3-active.png" width="149" height="55" loading="lazy"
                alt="Wildlife Conservation Foundation" class="color">
            </a>
            
            <!-- Partner 4 -->
            <a href="#" class="partner-logo">
              <img src="../Index/partner-4.png" width="169" height="58" loading="lazy" alt="Educational Institute" class="gray">
  
              <img src="../Index/partner-4-active.png" width="169" height="58" loading="lazy" alt="Educational Institute"
                class="color">
            </a>
            
            <!-- Partner 5 -->
            <a href="#" class="partner-logo">
              <img src="../Index/partner-5.png" width="211" height="55" loading="lazy" alt="Community Organization"
                class="gray">
  
              <img src="../Index/partner-5-active.png" width="211" height="55" loading="lazy"
                alt="Community Organization" class="color">
            </a>
  
          </div>
        </section>

        <!-- - #EVENT-->
  
        <section class="section event" id="event">
          <div class="event-container">
  
            <p class="section-subtitle">
              <img src="../Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
  
              <span>Events</span>
  
              <img src="../Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
            </p>
  
            <h2 class="h2 section-title">
              Join Us in Making a Difference for <strong>Our Planet</strong>
            </h2>
  
            <ul class="event-list">
              <!-- Event Category 1 -->
              <li>
                  <div class="event-card">
                      <div class="card-content">
                          <p class="card-subtitle">Environmental Stewardship</p>
                          <h3 class="card-title">Earth Day Activities</h3>
                          <p class="card-text">
                              Engage in activities aimed at cleaning, greening, and conserving our environment. From citywide cleanups to tree planting, join us in a collective effort to celebrate and protect our planet.
                          </p>
                      </div>
                  </div>
              </li>
              
              <!-- Event Category 2 -->
              <li>
                  <div class="event-card">
                      <div class="card-content">
                          <p class="card-subtitle">Sustainable Practices</p>
                          <h3 class="card-title">World Environment Day</h3>
                          <p class="card-text">
                              Discover and implement sustainable practices that reduce your environmental impact. Learn about composting, recycling, and other eco-friendly solutions through interactive workshops.
                          </p>
                      </div>
                  </div>
              </li>
              
              <!-- Event Category 3 -->
              <li>
                  <div class="event-card">
                      <div class="card-content">
                          <p class="card-subtitle">Community Greening</p>
                          <h3 class="card-title">Urban Green Spaces</h3>
                          <p class="card-text">
                              Join our initiative to create and enjoy community gardens and green spaces. Help transform urban areas into lush, green environments that benefit everyone.
                          </p>
                      </div>
                  </div>
              </li>
  
          </ul>
  
          
          <a href="../Event/event.php" class="btn btn-secondary">
              <span>View More</span>
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
          </a>
  
      </div>
  </section>

        <!-- shop section -->
<section class="shop-section" id="shop">
  <div class="shop-container">
      <h2 class="shop-title">Exclusive Merchandise</h2>
      <p class="shop-intro">Explore our exclusive range of eco-friendly merchandise, each thoughtfully designed to promote sustainability and support our conservation efforts. Embrace an eco-conscious lifestyle with our unique products.</p>
      
      <div class="products-wrapper">
          <!-- Product Item 1: Reusable Water Bottle -->
          <div class="product-item">
              <img src="../Index/reusable-water-bottle.png" alt="Reusable Water Bottle" class="product-image">
              <h3 class="product-name">Reusable Water Bottle</h3>
              <p class="product-description">Stay hydrated and reduce plastic waste with our durable, stainless steel water bottle. Perfect for adventurers and everyday eco-warriors alike.</p>
              <span class="product-price">RM 25.99</span>
              <a href="../Log-in-Sign-up/login-sign.php" class="btn-buy">Buy Now</a>
              <p>*Member-exclusive function</p>
          </div>

          <!-- Product Item 2: Organic Cotton Tee -->
          <div class="product-item">
              <img src="../Index/organic-cotton-tee.jpg" alt="Organic Cotton Tee" class="product-image">
              <h3 class="product-name">Organic Cotton Tee</h3>
              <p class="product-description">Made from 100% organic cotton, this tee is soft on your skin and gentle on the planet. A must-have for the eco-conscious fashion enthusiast.</p>
              <span class="product-price">RM 29.99</span>
              <a href="../Log-in-Sign-up/login-sign.php" class="btn-buy">Buy Now</a>
              <p>*Member-exclusive function</p>
          </div>

          <!-- Product Item 3: Seed Paper Greeting Cards -->
          <div class="product-item">
              <img src="../Index/paper cards.png" alt="Seed Paper Greeting Cards" class="product-image">
              <h3 class="product-name">Seed Paper Greeting Cards</h3>
              <p class="product-description">Spread love and greenery with our greeting cards made from seed paper. Plant them after reading and watch flowers bloom!</p>
              <span class="product-price">RM 9.99</span>
              <a href="../Log-in-Sign-up/login-sign.php" class="btn-buy">Buy Now</a>
              <p>*Member-exclusive function</p>
          </div>
      </div>
  </div>
</section>
<!-- shop section end -->

      <!-- adoption section start -->
<section class="adoption-section" id="adoption">
  <div class="adoption-container">
    <h2 class="adoption-title">Adopt an Animal</h2>
    <p class="adoption-intro">Join us in our mission to protect and preserve wildlife by adopting an animal. Your adoption supports habitat restoration, medical care, and conservation efforts.</p>
    
    <!-- Adoption Package 1: Sea Turtle -->
    <div class="adoption-package">
      <img src="../Index/sea-turtle.jpg" alt="Sea Turtle for Adoption" class="adoption-image">
      <div class="package-details">
        <h3 class="package-title">Sea Turtle Adoption Package</h3>
        <p class="package-description">Support the conservation of sea turtles by adopting one today. Your adoption aids in the protection of nesting sites and rehabilitation of injured turtles.</p>
        <ul class="package-benefits">
          <li>Contribute to beach clean-up efforts</li>
          <li>Receive an adoption certificate & sea turtle plush toy</li>
          <li>Monthly updates on sea turtle conservation projects</li>
        </ul>
        <a href="../Log-in-Sign-up/login-sign.php" class="btn-adopt">Adopt Now</a>
        <p>*Member-exclusive function</p>
      </div>
    </div>
    
    <!-- Adoption Package 2: Honeybee -->
    <div class="adoption-package">
      <img src="../Index/honey-bee.png" alt="Honeybee for Adoption" class="adoption-image">
      <div class="package-details">
        <h3 class="package-title">Honeybee Adoption Package</h3>
        <p class="package-description">Adopt a honeybee hive and support the pollination of plants crucial for our ecosystem. Your support helps to maintain healthy bee populations and supports biodiversity.</p>
        <ul class="package-benefits">
          <li>Helps in the preservation of bee habitats</li>
          <li>Receive a personalized adoption certificate</li>
          <li>A jar of honey produced by your adopted hive</li>
          <li>Quarterly updates on your hive's impact</li>
        </ul>
        <a href="../Log-in-Sign-up/login-sign.php" class="btn-adopt">Adopt Now</a>
        <p>*Member-exclusive function</p>
      </div>
    </div>
    
    <!-- Adoption Package 3: Red Panda -->
    <div class="adoption-package">
      <img src="../Index/panda.png" alt="Red Panda for Adoption" class="adoption-image">
      <div class="package-details">
        <h3 class="package-title">Red Panda Adoption Package</h3>
        <p class="package-description">Adopt a red panda and play a vital role in the conservation of this adorable species. Contributions support habitat preservation and anti-poaching efforts.</p>
        <ul class="package-benefits">
          <li>Supports vital conservation research</li>
          <li>Receive an adoption certificate & red panda plush toy</li>
          <li>Updates on the red pandas under our care</li>
        </ul>
        <a href="../Log-in-Sign-up/login-sign.php" class="btn-adopt">Adopt Now</a>
        <p>*Member-exclusive function</p>
      </div>
    </div>
  </div>
</section>
<!-- adoption section end -->

        
        <!-- Volunteer Section Start -->
<div class="volunteer" id="volunteers">
  <div class="volunteer-row">
    <!-- Volunteer Form Container -->
    <div class="volunteer-form-container">
      <div class="volunteer-form">
        <form>
          <div class="form-group">
            <input type="text" class="form-input" placeholder="Your Name" required />
          </div>
          <div class="form-group">
            <input type="email" class="form-input" placeholder="Your Email" required />
          </div>
          <div class="form-group">
            <textarea class="form-textarea" placeholder="Tell us why you're passionate about environmental conservation and what skills you can bring to Green Unity." required></textarea>
          </div>
          <div class="form-group">
            <button class="form-button" type="submit">Submit Application</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Volunteer Content Container -->
    <div class="volunteer-content-container">
      <div class="volunteer-content">
        <img src="../Index/volunteer.png" alt="Volunteering with Green Unity" class="volunteer-image">
        <div class="volunteer-section-header">
          <p class="volunteer-subtitle">Join Our Cause</p>
          <h2 class="volunteer-title">Empower Communities</h2>
        </div>
        <div class="volunteer-text">
          <p>
            At Green Unity, every volunteer effort contributes to a larger impact—restoring ecosystems, educating communities, and advocating for sustainable practices. Whether you're planting trees, participating in cleanups, or helping with wildlife surveys, your involvement directly supports our mission to create a greener, healthier planet. Join us, and be part of a global movement towards environmental stewardship and positive change.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Volunteer Section End -->


    <!-- FAQ section start -->
<div class="FAQ-box">
  <div class="accordion">
    <div class="image-box">
      <img src="../Index/faq.jpg" alt="Environmental Conservation">
    </div>
    <div class="accordion-text">
      <div class="FAQ-title">FAQ</div>
      <ul class="faq-text">
        <li>
          <div class="question-arrow">
            <span class="question">How does adopting an animal help with conservation?</span>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <p>Adopting an animal supports critical conservation efforts, including habitat preservation, research, and care for animals in need. Each adoption helps fund our projects and raises awareness about species conservation.</p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question">Can I volunteer with Green Unity?</span>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <p>Yes, Green Unity welcomes volunteers from all walks of life. Whether you're interested in local cleanups, educational outreach, or habitat restoration, your contribution will make a significant impact. Visit our volunteer page to find opportunities.</p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question">What sustainable practices does Green Unity promote?</span>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <p>Green Unity promotes a range of sustainable practices including reducing plastic use, supporting renewable energy sources, sustainable agriculture, and encouraging eco-friendly consumer habits to lessen our environmental footprint.</p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question">How can I reduce my carbon footprint?</span>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <p>Reducing your carbon footprint can be achieved through various means such as using public transportation, reducing meat consumption, recycling, using energy-efficient appliances, and supporting or investing in renewable energy projects.</p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question">How does Green Unity utilize donations?</span>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <p>Donations to Green Unity directly support our conservation projects, educational programs, and advocacy efforts for policy change. We ensure transparency in our funding, with detailed reports available on how each dollar is spent towards our mission.</p>
          <span class="line"></span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- FAQ section end -->


      <!-- Contact Start -->
      <div class="contact" id="contacts">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="contact-title">Get In Touch</h2>
                <p class="contact-word">Contact for any query</p>
            </div>
            <div class="contact-img">
                <img src="../Index/get.png" alt="Image">
            </div>
            <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <!-- Contact End -->


    <div class="blog" id="blog">
      <div class="blog-container">
          <div class="section-header text-center">
              <h2 class="blog-title">Green Unity Blog</h2>
              <p class="blog-word">Explore the latest news and articles from Green Unity</p>
          </div>
          <div class="row">
              <!-- First Blog Post -->
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="../Index/urban-1.jpg" alt="Image">
                  </div>
                  <div class="blog-text">
                      <h3><a href="#">Empowering Communities through Urban Gardening</a></h3>
                      <p>
                          Learn how urban gardening initiatives are fostering community engagement.
                      </p>
                  </div>
                  <div class="blog-meta">
                      <p><i class="bx bx-user"></i><a href="#">Admin</a></p>
                      <p><i class="bx bx-comment"></i><a href="#">12 Comments</a></p>
                  </div>
              </div>
              <!-- Second Blog Post -->
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="../Index/trade.png" alt="Image">
                  </div>
                  <div class="blog-text">
                      <h3><a href="#">Taking Action Against Illegal Wildlife Trade</a></h3>
                      <p>
                          Discover how Green Unity is campaigning against illegal wildlife trade and habitat destruction.
                      </p>
                  </div>
                  <div class="blog-meta">
                      <p><i class="bx bx-user"></i><a href="#">Admin</a></p>
                      <p><i class="bx bx-comment"></i><a href="#">8 Comments</a></p>
                  </div>
              </div>
              <!-- Third Blog Post -->
              <div class="blog-item">
                  <div class="blog-img">
                      <img src="../Index/biodiversity.png" alt="Image">
                  </div>
                  <div class="blog-text">
                      <h3><a href="#">Understanding the Impact of Climate Change on Biodiversity</a></h3>
                      <p>
                          Explore the effects of climate change on biodiversity.
                      </p>
                  </div>
                  <div class="blog-meta">
                      <p><i class="bx bx-user"></i><a href="#">Admin</a></p>
                      <p><i class="bx bx-comment"></i><a href="#">10 Comments</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
              


    <!-- Newsletter Start -->
<div class="newsletter-box">
  <form action="#" method="post" class="newsletter-form">
      <h2 class="newsletter-title">Newsletter</h2>
      <p class="newsletter-description">
        Keep up with our latest news and events. Subscribe to our newsletter.
      </p>
      <div class="newsletter-input-group">
        <input type="email" name="email" placeholder="Email Address..." required class="newsletter-input">
        <button type="submit" class="newsletter-button">Subscribe</button>
      </div>
  </form>
</div>
<!-- Newsletter End -->




        <!-- Instagram Posts Section -->

        <section class="insta-post">
          <h2 class="section-title">Follow Our Journey on Instagram</h2>
          <p class="section-text">Discover the latest updates, inspiring stories, and beautiful moments captured during our environmental initiatives.</p>

          <ul class="insta-post-list">
            <!-- Insta Post 1: Urban Greening Project -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="../Index/urban.jpg" width="320" height="300" loading="lazy" alt="Urban Gardening"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 2: Wildlife Conservation Effort -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="../Index/wildlife -insta.jpg" width="320" height="300" loading="lazy" alt="Wildlife Conservation"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
             <!-- Insta Post 3: Community Workshop -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="../Index/workshop.jpeg" width="320" height="300" loading="lazy" alt="Community Workshop"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 4: Environmental Campaign -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="../Index/world-water-day-saving-water-quality-campaign-and-environmental-protection-concept-globe-sphere-floating-over-water-with-faucet-and-water-drop-on-a-blue-isolated-background-3d-rendering-illustration-p.jpg" width="320" height="300" loading="lazy" alt="Environmental Campaign"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 5: Tree Planting Event -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="../Index/plant.jpg" width="320" height="300" loading="lazy" alt="Tree Planting Event"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
          </ul>
  
        </section>
  
      </article>
    </main>
  
  
  
  
  
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
          <li><a href="../Support/support.php">Contact</a></li>
      </ul>
      <p>&copy; <?php echo date("Y"); ?> GreenUnity. All rights reserved.</p>
  </div>



</div>
</div>








    <script>
    window.addEventListener("load", () => {
    /* preloader */ 
    document.querySelector(".js-preloader").classList.add("loaded");
    document.querySelector(".js-preloader .js-bg-item").addEventListener("transitionend", () => {
      document.querySelector(".js-preloader").style.display = "none";
      })
    });



    /*navigational bar*/

    // getting HTML elements
    const nav = document.querySelector(".nav-menu"),
          toggleBtn = nav.querySelector(".toggle-btn");
  
      toggleBtn.addEventListener("click" , () =>{
        nav.classList.toggle("open");
      });
  
    // js code to make draggable nav
    function onDrag({movementY}) { //movementY gets mouse vertical value
      const navStyle = window.getComputedStyle(nav), //getting all css style of nav
            navTop = parseInt(navStyle.top), // getting nav top value & convert it into string
            navHeight = parseInt(navStyle.height), // getting nav height value & convert it into string
            windHeight = window.innerHeight; // getting window height
  
      nav.style.top = navTop > 0 ? `${navTop + movementY}px` : "1px";
      if(navTop > windHeight - navHeight){
        nav.style.top = `${windHeight - navHeight}px`;
      }
    }
  
    //this function will call when user click mouse's button and  move mouse on nav
    nav.addEventListener("mousedown", () =>{
      nav.addEventListener("mousemove", onDrag);
    });
  
    //these function will call when user relase mouse button and leave mouse from nav
    nav.addEventListener("mouseup", () =>{
      nav.removeEventListener("mousemove", onDrag);
    });
    nav.addEventListener("mouseleave", () =>{
      nav.removeEventListener("mousemove", onDrag);
    });
  





/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       nav.classList.toggle('show-menu')
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
    const dropdownButton = item.querySelector('.dropdown__button') 

    dropdownButton.addEventListener('click', () =>{
        const showDropdown = document.querySelector('.show-dropdown')
        toggleItem(item)
        if(showDropdown && showDropdown!== item){
            toggleItem(showDropdown)
        }
    })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
    const dropdownContainer = item.querySelector('.dropdown__container')
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    } else{
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
      dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
    if(mediaQuery.matches){
        dropdownContainer.forEach((e) =>{
            e.removeAttribute('style')
        })

        // Remove the show-dropdown class from dropdown item
        dropdownItems.forEach((e) =>{
            e.classList.remove('show-dropdown')
        })
    }
}

addEventListener('resize', removeStyle)




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

   

   
    <!--Parallex scolling-->

    <script>
      let forest = document.getElementById('forest');
      let rocks = document.getElementById('rocks');
      let water = document.getElementById('water');
      let bird1 = document.getElementById('bird1');
      let bird2 = document.getElementById('bird2');
      let text = document.getElementById('text');
      let btn = document.getElementById('btn');
      let header = document.getElementById('header');

      window.addEventListener('scroll', function(){
        let value = window.scrollY;
        forest.style.top = value * 0.25 + 'px';
        rocks.style.top = value * -0.12 + 'px';
        text.style.top = 50 + value * -0.5 + '%';
        btn.style.marginTop = value * 1.5 + 'px';
        header.style.top = value * 0.5 + 'px';
        bird1.style.top = value * -1.5 + 'px';
        bird1.style.left = value * 2 + 'px';
        bird2.style.top = value * -1.5 + 'px';
        bird2.style.left = value * -5 + 'px';
      })

// Function to animate the counter
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Call the animateValue function for each fact number on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
    const factNumbers = document.querySelectorAll('.fact h3');
    factNumbers.forEach((factNumber) => {
        const targetValue = parseInt(factNumber.textContent.replace(/\D/g, ''), 10); // Extract number and convert to integer
        animateValue(factNumber, 0, targetValue, 4000); // Animate over 5000 milliseconds or 5 seconds
    });
});

// FAQ

  let li = document.querySelectorAll(".faq-text li");
  for (var i = 0; i < li.length; i++) {
    li[i].addEventListener("click", (e)=>{
      let clickedLi;
      if(e.target.classList.contains("question-arrow")){
        clickedLi = e.target.parentElement;
      }else{
        clickedLi = e.target.parentElement.parentElement;
      }
     clickedLi.classList.toggle("showAnswer");
    });
  }

  

  // Carbon Footprint Calculator
  document.addEventListener('DOMContentLoaded', () => {
    const electricitySlider = document.getElementById('electricityUsage');
    const gasSlider = document.getElementById('gasConsumption');
    const vehicleSlider = document.getElementById('vehicleMileage');
    const resultContainer = document.getElementById('resultText');
    const comparativeVisualsContainer = document.getElementById('comparativeVisuals');
    const dynamicBackground = document.getElementById('dynamicBackground');
    const canvas = document.getElementById('impactVisual');
    const ctx = canvas.getContext('2d');

    function updateBackground(footprint) {
        if (footprint < 1000) {
            dynamicBackground.className = 'calculator-container bg-low-impact';
        } else if (footprint >= 1000 && footprint < 2000) {
            dynamicBackground.className = 'calculator-container bg-medium-impact';
        } else {
            dynamicBackground.className = 'calculator-container bg-high-impact';
        }
    }

    function drawChart(data) {
        const maxFootprint = Math.max(...data);
        const padding = 30; // Space for the top label
        const scaleFactor = (canvas.height - padding) / maxFootprint; // Adjust scale factor

        ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas for redrawing

        data.forEach((value, index) => {
            const x = (canvas.width / data.length) * index + 10;
            const y = canvas.height - value * scaleFactor;
            const width = canvas.width / data.length - 20;
            const height = value * scaleFactor;

            ctx.fillStyle = index === 0 ? '#4CAF50' : index === 1 ? '#FFC107' : '#F44336';
            ctx.fillRect(x, canvas.height - height, width, height);
            ctx.textAlign = 'center';
            ctx.fillText(`${value.toFixed(2)}`, x + width / 2, canvas.height - height - 10);
        });
    }

    function calculateImpact() {
        const electricityUsage = parseFloat(electricitySlider.value);
        const gasConsumption = parseFloat(gasSlider.value);
        const vehicleMileage = parseFloat(vehicleSlider.value);

        const electricityFootprint = electricityUsage * 0.92;
        const gasFootprint = gasConsumption * 2.20462;
        const vehicleFootprint = vehicleMileage * 0.404;

        const totalFootprint = electricityFootprint + gasFootprint + vehicleFootprint;

        resultContainer.textContent = `Your total monthly carbon footprint is: ${totalFootprint.toFixed(2)} kg of CO2.`;

        updateBackground(totalFootprint);

        drawChart([electricityFootprint, gasFootprint, vehicleFootprint]);

        comparativeVisualsContainer.innerHTML = `Equivalent to driving ${Math.floor(totalFootprint / 0.404)} miles by car.`;
    }

    // Attach event listeners to sliders
    [electricitySlider, gasSlider, vehicleSlider].forEach(slider => {
        slider.addEventListener('input', calculateImpact);
    });

    // Set canvas dimensions
    canvas.width = 400; 
    canvas.height = 200; 

    // Initial calculation and chart drawing
    calculateImpact();
});


    </script>


<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




  </body>
</html>