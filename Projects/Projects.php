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
   <title>Projects Website</title>

   <link rel="icon" href="../Index/Green Unity Logo.png"/>
   <link rel="stylesheet" type="text/css" href="Projects.css">
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
 

 <section class="projects-page" id="projects">
    <div class="projects-container">
        <h1 class="projects-title">Our Impactful Projects</h1>
        
        <!-- Wildlife Preservation Section -->
        <div class="project-category">
            <h2 class="category-title">Wildlife Preservation</h2>
            <div class="project-items">
                <!-- Project Item -->
                <div class="project-item">
                    <img src="../Transparency/wildlife.jpg" alt="Wildlife Preservation" class="project-image">
                    <h3 class="project-name">Protecting Habitats</h3>
                    <p class="project-description">Our efforts focus on preserving vital habitats and ecosystems crucial for the survival of diverse wildlife species.</p>
                </div>

                <div class="project-item">
                    <img src="wildlife.jpg" alt="Wildlife Preservation" class="project-image">
                    <h3 class="project-name">Species Conservation</h3>
                    <p class="project-description">We are committed to the conservation of endangered species through research, protection, and community engagement initiatives.</p>
                </div>

                <div class="project-item">
                    <img src="wildlife -1.png" alt="Wildlife Preservation" class="project-image">
                    <h3 class="project-name">Habitat Restoration</h3>
                    <p class="project-description">Restoring degraded habitats to their natural state, ensuring a sustainable future for wildlife and their ecosystems.</p>
                </div>
                
            </div>
        </div>
        
        <!-- Urban Greening Section -->
        <div class="project-category">
            <h2 class="category-title">Urban Greening</h2>
            <div class="project-items">
                <!-- Project Item -->
                <div class="project-item">
                    <img src="../Index/Urban Green.jpg" alt="Urban Greening" class="project-image">
                    <h3 class="project-name">Community Gardens</h3>
                    <p class="project-description">Creating community gardens in urban areas to promote green spaces, biodiversity, and sustainable living practices.</p>
                </div>

                <div class="project-item">
                    <img src="green.jpg" alt="Urban Greening" class="project-image">
                    <h3 class="project-name">Green Infrastructure</h3>
                    <p class="project-description">Implementing green infrastructure projects to mitigate urban heat islands and enhance the quality of urban environments.</p>
                </div>

                <div class="project-item">
                    <img src="urban.png" alt="Urban Greening" class="project-image">
                    <h3 class="project-name">Tree Planting</h3>
                    <p class="project-description">Organizing tree planting campaigns to increase urban canopy cover and improve air quality for city residents.</p>
                </div>
                
      
            </div>
        </div>

        <!-- School Environmental Clubs Section -->
        <div class="project-category">
            <h2 class="category-title">School Environmental Clubs</h2>
            <div class="project-items">
                <!-- Project Item -->
                <div class="project-item">
                    <img src="youth.jpg" alt="School Environmental Clubs" class="project-image">
                    <h3 class="project-name">Youth Advocacy</h3>
                    <p class="project-description">Empowering youth to advocate for environmental sustainability through educational programs and grassroots initiatives.</p>
                </div>
                
                <div class="project-item">
                    <img src="education.png" alt="School Environmental Clubs" class="project-image">
                    <h3 class="project-name">Green Education</h3>
                    <p class="project-description">Providing green education resources and support for schools to integrate environmental topics into their curriculum and activities.</p>
                </div>

                <div class="project-item">
                    <img src="community-student.jpg" alt="School Environmental Clubs" class="project-image">
                    <h3 class="project-name">Community Outreach</h3>
                    <p class="project-description">Engaging students in community outreach projects to raise awareness and take action on local environmental issues.</p>
                </div>
            </div>
        </div>
    </div>
</section>



  




  <!-- Additional Projects Start -->
<section class="additional-projects" id="additional-projects">
    <div class="additional-projects-container">
        <h2 class="projects-title1">Expanding Our Impact</h2>
        <div class="projects-wrapper">

            <!-- Urban Greening Initiative -->
            <div class="project">
                <img src="../Index/urban.jpg" alt="Urban Greening" class="project-img">
                <div class="project-text">
                    <h3 class="project-heading">Urban Greening Initiative</h3>
                    <p class="project-description1">Our Urban Greening Initiative aims to transform city landscapes into thriving green spaces. This year, we've launched multiple green rooftops and community gardens, enhancing urban biodiversity and providing residents with much-needed green spaces.</p>
                </div>
            </div>

            <!-- School Environmental Clubs -->
            <div class="project">
                <img src="school.jpg" alt="School Environmental Clubs" class="project-img">
                <div class="project-text">
                    <h3 class="project-heading">School Environmental Clubs</h3>
                    <p class="project-description1">We collaborate with schools to form environmental clubs, engaging students in sustainability projects that foster a deeper understanding of environmental issues. Our program has already inspired over 5,000 students to become eco-ambassadors in their communities.</p>
                </div>
            </div>

            <!-- Clean Water Projects -->
            <div class="project">
                <img src="../Transparency/clean water.jpg" alt="Clean Water Projects" class="project-img">
                <div class="project-text">
                    <h3 class="project-heading">Clean Water Projects</h3>
                    <p class="project-description1">Access to clean water is a fundamental right. Green Unity's clean water projects have installed filtration systems in remote areas, ensuring over 20,000 people now have access to safe drinking water, dramatically improving health outcomes.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Additional Projects End -->


 
  
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
</script>




<script
   type="module"
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script
   nomodule
   src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
