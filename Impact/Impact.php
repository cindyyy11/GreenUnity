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
   <title>Impact Website</title>

    <link rel="icon" href="../Index/Green Unity Logo.png">
   <link rel="stylesheet" type="text/css" href="Impact.css">
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
 

  <!-- Environmental Impact Intro start -->
<section class="impact-intro" id="impact-intro">
   <div class="impact-container container">
       <div class="impact-left">
           <h1 class="impact-title">
             Green Unity: Empowering Sustainability
           </h1>
           <p class="impact-subtitle">
              <span>
                 <i class="bx bx-leaf"></i>
                 Tracking Our Eco-Friendly Impact
              </span>
              <span>
                 <i class="bx bx-globe"></i>
                 Sharing Success Stories Worldwide
              </span>
           </p>
           <div class="impact-btns">
              <a href="#impact-dashboard" class="btn">View Impact Dashboard</a>
              <a href="#success-stories" class="btn">Read Success Stories</a>
           </div>
       </div>
       <div class="impact-right">
           <div class="impact-box">
              <div class="impact-decor"></div>
              <div class="impact-img-box1">
                 <img src="env.gif" alt="Sustainable Project 1">
              </div>
              <div class="impact-img-box2">
                 <img src="Environmental.png" alt="Sustainable Project 2">
              </div>
           </div>
       </div>
   </div>
</section>
<!-- Impact Intro end -->


   <!-- Environmental Impact Dashboard Start -->
<section class="impact-dashboard" id="impact-dashboard">
   <div class="container">
       <h2 class="dashboard-title">Our Environmental Impact</h2>
       <p class="dashboard-intro">Witness the change we're making together towards a more sustainable planet.</p>

       <div class="dashboard-metrics">
           <!-- Trees Planted Metric -->
           <div class="metric trees-planted">
               <div class="metric-icon">
                   <img src="Trees.jpg" alt="Trees Planted">
               </div>
               <div class="metric-info">
                   <span class="metric-number" data-target="250000">0</span>
                   <p class="metric-description">Trees Planted Worldwide</p>
               </div>
           </div>

           <!-- Wildlife Habitats Protected Metric -->
           <div class="metric wildlife-habitats">
               <div class="metric-icon">
                   <img src="wildlife.gif" alt="Wildlife Habitats Protected">
               </div>
               <div class="metric-info">
                   <span class="metric-number" data-target="520">0</span>
                   <p class="metric-description">Wildlife Habitats Protected</p>
               </div>
           </div>

           <!-- CO2 Emissions Reduced Metric -->
           <div class="metric co2-reduced">
               <div class="metric-icon">
                   <img src="C02.jpg" alt="CO2 Emissions Reduced">
               </div>
               <div class="metric-info">
                   <span class="metric-number" data-target="150000">0</span>
                   <p class="metric-description">Tons of CO2 Emissions Reduced</p>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- Environmental Impact Dashboard End -->

  <!-- Success Stories Start -->
<section class="success-stories" id="success-stories">
   <div class="success-stories container">
       <h2 class="stories-title">Success Stories of Green Unity</h2>
       <div class="stories-wrapper">

           <!-- Story 1 -->
           <div class="story">
               <img src="restored-forest.png" alt="Restored Forest" class="story-img">
               <div class="story-text">
                   <h3 class="story-heading">Reforestation Triumph</h3>
                   <p class="story-description">In a collective effort that spanned across communities, Green Unity spearheaded a reforestation project that successfully planted over 10,000 trees, restoring 50 hectares of previously deforested land. This project not only revitalized local ecosystems but also strengthened community bonds.</p>
               </div>
           </div>

           <!-- Story 2 -->
           <div class="story">
               <img src="wildlife-c.png" alt="Wildlife Conservation" class="story-img">
               <div class="story-text">
                   <h3 class="story-heading">Wildlife Conservation Success</h3>
                   <p class="story-description">Our commitment to preserving natural habitats has led to the protection of endangered species and the conservation of biodiversity. Through dedicated efforts and community engagement, we've seen remarkable recoveries in species populations previously on the brink of extinction.</p>
               </div>
           </div>

           <!-- Story 3 -->
           <div class="story">
               <img src="community.png" alt="Community Engagement" class="story-img">
               <div class="story-text">
                   <h3 class="story-heading">Empowering Communities</h3>
                   <p class="story-description">Green Unity's initiatives have empowered communities worldwide to adopt sustainable practices, from renewable energy projects to waste reduction programs. These actions have sparked a global movement towards a more sustainable and environmentally conscious lifestyle.</p>
               </div>
           </div>

       </div>
   </div>
</section>
<!-- Success Stories End -->


 
  
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


window.addEventListener("load", () => {
   /* preloader */ 
   document.querySelector(".js-preloader").classList.add("loaded");
   document.querySelector(".js-preloader .js-bg-item").addEventListener("transitionend", () => {
     document.querySelector(".js-preloader").style.display = "none";
   })
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
 
 const removeStyle = () =>{
    if(mediaQuery.matches){
        dropdownContainer.forEach((e) =>{
            e.removeAttribute('style')
        })

        dropdownItems.forEach((e) =>{
            e.classList.remove('show-dropdown')
        })
    }
 }
 
 addEventListener('resize', removeStyle)
 

//Environmental Dashboard
 document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.metric-number');

    // Function to animate counter
    const animateCounter = (counter, start, end, duration) => {
        let startTime = null;

        // The animation function
        const animation = currentTime => {
            if (!startTime) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = easeInOutQuad(timeElapsed, start, end - start, duration);
            counter.innerText = Math.ceil(run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        };

        requestAnimationFrame(animation);
    };

    // Easing function for a more natural animation
    const easeInOutQuad = (t, b, c, d) => {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    };

    // Observe when the counters come into view
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                animateCounter(counter, 0, target, 2000); 
                observer.unobserve(counter); 
            }
        });
    }, {
        threshold: 0.5 
    });

    // Attach observer to each counter
    counters.forEach(counter => {
        observer.observe(counter);
    });
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
