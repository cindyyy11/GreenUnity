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
     content="calendar, events, reminders"/>
   <title>Transparency Website</title>

   <link rel="stylesheet" type="text/css" href="Transparency.css">
   <link rel="icon" href="../Index/Green Unity Logo.png">
   <!-- ===== Boxicons CSS ===== -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="icon" href="../Index/Green Unity Logo.png">
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
                                            <a href="Transparency.php" class="dropdown__link">Financial Reports -FinBoard</a>
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
 

 <section class="transparency-page" id="transparency">
    <div class="transparency-container">
        <h1 class="transparency-title">Financial Transparency</h1>
        <p class="transparency-intro">At Green Unity, we believe in complete transparency and accountability. Here's how we've allocated resources and the impact we've made.</p>
        
        <div class="finboard-categories">
            <h2 class="finboard-title">FinBoard: Categories</h2>
            
            <!-- Category: Annual Reports with Collapsible Content -->
            <div class="category">
                <h3 class="category-title">
                    <img src="Report.jpg" alt="Report Icon" class="category-icon">Annual Reports
                </h3>
                <div class="collapsible-content">
                    <button class="collapsible">2023 Highlights & More</button>
                    <div class="content">
                        <p class="category-content-p"><img src="../Impact/restored-forest.png" alt="Reforestation" class="content-image">This year, our efforts led to a 20% increase in reforestation projects, directly contributing to the preservation of over 1,000 hectares of forest land.</p>
                        <p class="category-content-p">"<img src="solar power.jpg" alt="Solar Power" class="content-image">Focused on renewable energy adoption, successfully implementing solar power solutions in three underserved communities.</p>
                        <p class="category-content-p"><img src="clean water.jpg" alt="Clean Water Initiative" class="content-image">Our Clean Water Initiative has successfully provided access to safe drinking water for over 5,000 individuals in arid regions, marking a significant step towards environmental sustainability and community health.</p>
                    </div>
                </div>
            </div>

            <!-- Category: Financial Statements with Collapsible Content -->
            <div class="category">
                <h3 class="category-title">
                    <img src="financial.jpg" alt="Financial Icon" class="category-icon">Financial Statements
                </h3>
                <div class="collapsible-content">
                    <button class="collapsible">2023 Q1 & Historical Overview</button>
                    <div class="content">
                        <p>We've allocated 40% of our budget to conservation projects, with administrative costs kept below 15% to maximize impact.</p>
                        <p>Total revenue increased by 25%, thanks to generous donations and successful grant applications.</p>
                        <p>The final quarter saw a strategic investment in eco-friendly technologies, with 30% of our expenditure dedicated to the development of sustainable agricultural practices, demonstrating our focus on long-term environmental health.</p>
                        <p>A year of careful financial stewardship, 2021's budget was directed towards scaling up our conservation efforts, which included a significant 50% increase in funding towards marine conservation projects, underscoring our pledge to protect the oceans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




 
  
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
 

//Transparency
document.addEventListener('DOMContentLoaded', () => {
    const collapsibles = document.querySelectorAll('.collapsible');

    collapsibles.forEach(collapsible => {
        collapsible.addEventListener('click', function() {
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
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
