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
   
   <link rel="stylesheet" type="text/css" href="/Index/index-L - Copy.css">
   <!-- ===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="icon" href="/Index/Green Unity Logo.jpg">

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
   <div class="header-container">
      <a href="#" class="header-logo">
         <span>Green</span>Unity
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
                        <a href="/Index/index-L.html" class="nav__link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">                      
                        <div class="nav__link dropdown__button">
                            About & Impact <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title">About Us</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="/About Us/about-us.html" class="dropdown__link">Mission</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Vision</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Team</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title">Impact</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Environmental Impact Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Success Stories</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-book-mark-line"></i>
                                    </div>

                                    <span class="dropdown__title">Transparency</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Financial Reports -FinBoard</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                     <!--=============== DROPDOWN 1 ===============-->
                     <li class="dropdown__item">                      
                      <div class="nav__link dropdown__button">
                          Conservation & Education <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                      </div>

                      <div class="dropdown__container">
                          <div class="dropdown__content">
                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-flashlight-line"></i>
                                  </div>

                                  <span class="dropdown__title">Projects</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Urban Gardening</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">Wildlife Preservation</a>
                                      </li>
                                  </ul>
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-heart-3-line"></i>
                                  </div>

                                  <span class="dropdown__title">Education</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Webminars & Talks</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">Education Material</a>
                                      </li>
                                  </ul>
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-book-mark-line"></i>
                                  </div>

                                  <span class="dropdown__title">Resources</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Carbon Footprint Calculator</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">FAQs</a>
                                      </li>
                                  </ul>
                              </div>

                          </div>
                      </div>
                  </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Get Involved <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-code-line"></i>
                                    </div>

                                    <span class="dropdown__title">Events & Activities</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="/Event/event.html" class="dropdown__link">Upcoming Events</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Past Events Archive</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>

                                    <span class="dropdown__title">Volunteer</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Opportunities</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Training</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-pen-nib-line"></i>
                                  </div>

                                  <span class="dropdown__title">Donate</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">One-Time</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">Monthly</a>
                                      </li>
                                      <li>
                                        <a href="#" class="dropdown__link">Goods Bank</a>
                                    </li>
                                  </ul>
                              </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-apps-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Partnerships</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Corporate CSR</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">School Clubs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                     <!--=============== DROPDOWN 2 ===============-->
                     <li class="dropdown__item">
                      <div class="nav__link dropdown__button">
                        News & Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                      </div>

                      <div class="dropdown__container">
                          <div class="dropdown__content">
                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-code-line"></i>
                                  </div>

                                  <span class="dropdown__title">News & Resources</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Latest Updates</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">Environmental News</a>
                                      </li>
                                  </ul>
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-pen-nib-line"></i>
                                  </div>

                                  <span class="dropdown__title">Newsletter</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Subscription Options</a>
                                      </li>
                                  </ul>
                              </div>

                              <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                      <i class="ri-apps-2-line"></i>
                                  </div>

                                  <span class="dropdown__title">Blog</span>

                                  <ul class="dropdown__list">
                                      <li>
                                          <a href="#" class="dropdown__link">Insights</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown__link">Stories (if applicable)</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </li>

                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item">                        
                        <div class="nav__link dropdown__button">
                          Shop & Support <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-community-line"></i>
                                    </div>

                                    <span class="dropdown__title">Shop</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Merchandise</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Adoption Packages</a>
                                        </li>
                                    </ul> 
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-shield-line"></i>
                                    </div>

                                    <span class="dropdown__title">Support</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="/Support/support.html" class="dropdown__link"> Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Customer Support</a>
                                        </li>
                                        <li>
                                          <a href="#" class="dropdown__link">Emergency Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
      </nav>

    
       <!-- Search Bar -->
       <form action="https://www.google.com/search" class="search" id="search-bar">
        <input type="search" placeholder="Type something..." name="q" class="search__input">
        <div class="search__button" id="search-button">
            <i class="ri-search-2-line search__icon"></i>
            <i class="ri-close-line search__close"></i>
        </div>
    </form>


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
               <img src="/Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
     
               <span>Welcome to GreenUnity</span>
            </p>
     
               <h2 class="h1 hero-title">
                Empowering Communities - <strong>Greener Tomorrow</strong>
               </h2>
     
            <p class="hero-text">
              Welcome to Green Unity, where we unite efforts for environmental conservation and urban greening.
            </p>
     
            <button class="btn btn-primary">
               <span>Donation</span>
     
               <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
               </button>
     
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
             <a href="#events"><i class='bx bx-calendar-event'></i></a>
           </span>
           <span style="--i:3;">
             <a href="#get-involved"><i class='bx bx-group' ></i></a>
           </span>
           <span style="--i:4;">
             <a href="#news-updates"><i class='bx bx-news' ></i></a>
           </span>
           <span style="--i:5;">
             <a href="#contact"><i class='bx bx-envelope' ></i></a>
           </span>
         </div>
       </nav>

    
        <!-- About Us Section -->
        <section class="section about" id="about">
          <div class="container">
  
            <div class="about-banner">
  
              <h2 class="deco-title">About Us</h2>
  
              <img src="/Index/deco-img.png" width="58" height="261" alt="Decorative" class="deco-img">
              
              <!-- Banner Images -->
              <div class="banner-row">
                <div class="banner-col">
                  <img src="/Index/view-3d-forest-landscape-with-mountains-sky.jpg" width="315" height="380" loading="lazy" alt="Greenery"
                    class="about-img w-100">
  
                  <img src="/Index/rendering-miniature-world.jpg" width="386" height="250" loading="lazy" alt="Urban Gardening"
                    class="about-img about-img-2 w-100">
                </div>
  
                <div class="banner-col">
                  <img src="/Index/digital-art-with-hands-holding-planet.jpg" width="250" height="277" loading="lazy" alt="Conservation"
                    class="about-img about-img-3 w-100">
  
                  <img src="/Index/community.jpg" width="315" height="380" loading="lazy" alt="Community Engagement"
                    class="about-img w-100">
                </div>
  
              </div>
  
            </div>
  
            <div class="about-content">
  
              <p class="section-subtitle">
                <img src="/Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
  
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
  
                <button class="btn btn-secondary">
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

              <button class="btn btn-outline">
                <span>Become a Partner</span>

                <ion-icon name="leaf-outline" aria-hidden="true"></ion-icon>
              </button>
            </div>
  
            <figure class="cta-banner">
              <img src="/Index/Green Earth.jpg" width="520" height="228" loading="lazy" alt="Green Earth"
                class="img-cover">
            </figure>
  
          </div>
        </section>
  
  
  
  
  
        <!--SERVICE-->
  
        <section class="section service" id="service" style="background-image: url('/Index/service-map.png')">
          <div class="container">
  
            <p class="section-subtitle">
              <img src="/Index/subtitle-img-white.png" width="32" height="7" alt="Wavy line">
  
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
  
  
  
  
  
        <!--DONATE-->
  
        <section class="section donate" id="donate">
          <div class="container">
            <h2 class="section-title">Support Our Environmental Causes</h2>
            <p class="section-text">Your donations help us to fund vital projects in wildlife conservation, urban greening, and educational programs. Every contribution makes a difference.</p>
            
            <ul class="donate-list">
              <!-- Urban Greening Project -->
              <li>
                <div class="donate-card">
  
                  <figure class="card-banner">
                    <img src="/Index/Urban Green.jpg" width="520" height="325" loading="lazy" alt="Urban Greening"
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
  
                    <button class="btn btn-secondary">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
              
            <!-- Wildlife Conservation Project -->
              <li>
                <div class="donate-card">
  
                  <figure class="card-banner">
                    <img src="/Index/Wildlife.jpg" width="520" height="325" loading="lazy" alt="Wildlife Conservation Project"
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
  
                    <button class="btn btn-secondary">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
              
               <!-- Community Education Project -->
              <li>
                <div class="donate-card">
  
                  <figure class="card-banner">
                    <img src="/Index/Educational.jpg" width="520" height="325" loading="lazy" alt="Community Education"
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
  
                    <button class="btn btn-secondary">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
              
              <!-- General Fund -->
              <li>
                <div class="donate-card">
  
                  <figure class="card-banner">
                    <img src="/Index/General.jpg" width="520" height="325" loading="lazy" alt="General Fund"
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
  
                    <button class="btn btn-secondary">
                      <span>Donation</span>
  
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>
  
  
  
        <!-- Testimonials Section -->
  
        <section class="testi">
  
          <div class="testi-content">
  
            <p class="section-subtitle">
              <img src="/Index/subtitle-img-white.png" width="32" height="7" alt="Wavy line" class="testi-img">
  
              <span>Community Voices</span>
            </p>
  
            <h2 class="h2 section-title">
              Impact Stories from <strong>Our Supporters</strong>
            </h2>
  
            <div class="testi-card">
  
              <figure class="card-avatar">
                <img src="/Index/testi-avatar.png" width="60" height="60" loading="lazy" alt="David S. Neuman" class="testi-img">
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
            <img src="/Index/community -testi.jpg" width="960" height="846" loading="lazy" alt="Community Garden"
              class="testi-img-cover">
          </figure>
  
        </section>
  
  
  
  
  
        <!-- Partners Section -->
  
        <section class="section partner">
          <div class="container">
            
            <h2 class="section-title">Our Partners</h2>

            <!-- Partner 1 -->
            <a href="#" class="partner-logo">
              <img src="/Index/partner-1.png" width="157" height="55" loading="lazy" alt="Environmental Organization"
                class="gray">
  
              <img src="/Index/partner-1-active.png" width="157" height="55" loading="lazy" alt="Environmental Organization"
                class="color">
            </a>
            
            <!-- Partner 2 -->
            <a href="#" class="partner-logo">
              <img src="/Index/partner-2.png" width="163" height="55" loading="lazy" alt="Urban Gardening Initiative"
                class="gray">
  
              <img src="/Index/partner-2-active.png" width="163" height="55" loading="lazy"
                alt="Urban Gardening Initiative" class="color">
            </a>
            
            <!-- Partner 3 -->
            <a href="#" class="partner-logo">
              <img src="/Index/partner-3.png" width="149" height="55" loading="lazy" alt="Wildlife Conservation Foundation"
                class="gray">
  
              <img src="/Index/partner-3-active.png" width="149" height="55" loading="lazy"
                alt="Wildlife Conservation Foundation" class="color">
            </a>
            
            <!-- Partner 4 -->
            <a href="#" class="partner-logo">
              <img src="/Index/partner-4.png" width="169" height="58" loading="lazy" alt="Educational Institute" class="gray">
  
              <img src="/Index/partner-4-active.png" width="169" height="58" loading="lazy" alt="Educational Institute"
                class="color">
            </a>
            
            <!-- Partner 5 -->
            <a href="#" class="partner-logo">
              <img src="/Index/partner-5.png" width="211" height="55" loading="lazy" alt="Community Organization"
                class="gray">
  
              <img src="/Index/partner-5-active.png" width="211" height="55" loading="lazy"
                alt="Community Organization" class="color">
            </a>
  
          </div>
        </section>
  
  
        <!-- - #EVENT-->
  
        <section class="section event" id="event">
          <div class="event-container">
  
            <p class="section-subtitle">
              <img src="/Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
  
              <span>Upcoming Events</span>
  
              <img src="/Index/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
            </p>
  
            <h2 class="h2 section-title">
              Join Us in Making a Difference for <strong>Our Planet</strong>
            </h2>
  
            <ul class="event-list">
              <!-- Event 1 -->
              <li>
                <div class="event-card">
  
                  <time class="card-time" datetime="2024-04-22">
                    <span class="month">Apr</span>
  
                    <span class="date">22</span>
                  </time>
  
                  <div class="wrapper">
  
                    <div class="card-content">
                      <p class="card-subtitle">Earth Day</p>
  
                      <h3 class="card-title">Citywide Cleanup and Greening</h3>
  
                      <p class="card-text">
                        Join us for a citywide cleanup effort to celebrate Earth Day. Volunteers will plant trees, clean up local parks, and engage in conservation education.
                      </p>
                    </div>
  
                    <button class="btn btn-white">
                      <span>Register Now</span>
  
                      <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
              
               <!-- Event 2 -->
              <li>
                <div class="event-card">
  
                  <time class="card-time" datetime="2024-06-05">
                    <span class="month">Jun</span>
  
                    <span class="date">05</span>
                  </time>
  
                  <div class="wrapper">
  
                    <div class="card-content">
                      <p class="card-subtitle">World Environment Day</p>
  
                      <h3 class="card-title">Sustainable Living Workshop</h3>
  
                      <p class="card-text">
                        Discover sustainable living practices and learn how to reduce your carbon footprint. This workshop includes sessions on composting, recycling, and eco-friendly home solutions.
                      </p>
                    </div>
  
                    <button class="btn btn-white">
                      <span>Learn More</span>
  
                      <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
              
              <!-- Event 3 -->
              <li>
                <div class="event-card">
  
                  <time class="card-time" datetime="2024-09-27">
                    <span class="month">Sep</span>
  
                    <span class="date">27</span>
                  </time>
  
                  <div class="wrapper">
  
                    <div class="card-content">
                      <p class="card-subtitle">Urban Greening</p>
  
                      <h3 class="card-title">Community Garden Initiative Launch</h3>
  
                      <p class="card-text">
                        Be part of the launch of our new community garden initiative. We'll be transforming unused urban spaces into thriving green areas for everyone to enjoy.
                      </p>
                    </div>
  
                    <button class="btn btn-white">
                      <span>Get Involved</span>
  
                      <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
  
                  </div>
  
                </div>
              </li>
  
            </ul>
  
            <button class="btn btn-secondary">
              <span>View All Events</span>
  
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
            </button>
  
          </div>
        </section>
  
  
        <!-- Instagram Posts Section -->

        <section class="insta-post">
          <h2 class="section-title">Follow Our Journey on Instagram</h2>
          <p class="section-text">Discover the latest updates, inspiring stories, and beautiful moments captured during our environmental initiatives.</p>

          <ul class="insta-post-list">
            <!-- Insta Post 1: Urban Greening Project -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="/Index/urban.jpg" width="320" height="300" loading="lazy" alt="Urban Gardening"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 2: Wildlife Conservation Effort -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="/Index/wildlife -insta.jpg" width="320" height="300" loading="lazy" alt="Wildlife Conservation"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
             <!-- Insta Post 3: Community Workshop -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="/Index/workshop.jpeg" width="320" height="300" loading="lazy" alt="Community Workshop"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 4: Environmental Campaign -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="/Index/world-water-day-saving-water-quality-campaign-and-environmental-protection-concept-globe-sphere-floating-over-water-with-faucet-and-water-drop-on-a-blue-isolated-background-3d-rendering-illustration-p.jpg" width="320" height="300" loading="lazy" alt="Environmental Campaign"
                  class="img-cover">
  
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            
            <!-- Insta Post 5: Tree Planting Event -->
            <li class="insta-post-item">
              <a href="#" class="insta-post-link">
                <img src="/Index/plant.jpg" width="320" height="300" loading="lazy" alt="Tree Planting Event"
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
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
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')
       // Add show-icon to show and hide menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
    const dropdownButton = item.querySelector('.dropdown__button') 

    // 2. Select each button click
    dropdownButton.addEventListener('click', () =>{
        // 7. Select the current show-dropdown class
        const showDropdown = document.querySelector('.show-dropdown')
        
        // 5. Call the toggleItem function
        toggleItem(item)

        // 8. Remove the show-dropdown class from other items
        if(showDropdown && showDropdown!== item){
            toggleItem(showDropdown)
        }
    })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
    // 3.1. Select each dropdown content
    const dropdownContainer = item.querySelector('.dropdown__container')

    // 6. If the same item contains the show-dropdown class, remove
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    } else{
        // 4. Add the maximum height to the dropdown content and add the show-dropdown class
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
      dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
    // Validate if the media query reaches 1118px
    if(mediaQuery.matches){
        // Remove the dropdown container height style
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

    </script>


<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




  </body>
</html>