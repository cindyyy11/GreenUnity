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
   <title>Terms & Condition Website</title>

   <link rel="stylesheet" type="text/css" href="Terms.css">
   <link rel="icon" href="../Index/Green Unity Logo.png">
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
          <a href="login-sign.php"><i class="ri-user-fill"></i>Login / Sign Up</a>
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
<br><br><br>
 <!-- header end -->

   <!--Terms & Conditions section start -->
   <div class="wrapper flex_align_justify">
      <div class="tc_wrap">
          <div class="tabs_list">
            <ul>
              <li data-tc="tab_item_1" class="active">Eco-Friendly Practices</li>
              <li data-tc="tab_item_2">Community Engagement Rules</li>
              <li data-tc="tab_item_3">Sustainable Use Policy</li>
              <li data-tc="tab_item_4">Volunteer Participation Agreement</li>
              <li data-tc="tab_item_5">Legal and Environmental Compliance</li>
            </ul>
          </div>
          <div class="tabs_content">
             <div class="tab_head">
               <h2>Terms & Conditions</h2>
             </div>
             <div class="tab_body">
               <div class="tab_item tab_item_1">
                   <h3>Eco-Friendly Practices</h3>
                   <p>Participants must adhere to sustainable and eco-friendly practices during all Green Unity events and activities, minimizing waste and avoiding harm to natural habitats.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
               </div>
               <div class="tab_item tab_item_2" style="display: none;">
                   <h3>Community Engagement Rules</h3>
                 <p>Community members are encouraged to contribute positively, share knowledge, and respect all participants' opinions to foster a supportive and inclusive environment.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
               </div>
               <div class="tab_item tab_item_3"  style="display: none;">
                   <h3>Sustainable Use Policy</h3>
                   <p>Green Unity projects must focus on sustainable use of resources, promoting conservation and responsible management of environmental assets.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At fugit praesentium reiciendis aut debitis minima earum fugiat quam aspernatur qui. Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
               </div>
               <div class="tab_item tab_item_4"  style="display: none;">
                   <h3>Volunteer Participation Agreement</h3>
                 <p>Volunteers agree to participate in activities in a safe, respectful manner, and comply with all guidance provided by project leaders to ensure the safety and effectiveness of projects.</p>
               </div>
               <div class="tab_item tab_item_5"  style="display: none;">
                   <h3>Legal and Environmental Compliance</h3>
                 <p>All activities undertaken under Green Unity must comply with local, national, and international laws, particularly those relating to environmental protection and conservation.</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias nemo eius aspernatur doloremque laboriosam velit, consequatur nesciunt, ipsum facere autem, dicta quam consectetur! Nostrum quae odit adipisci omnis asperiores!</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias nemo eius aspernatur doloremque laboriosam velit, consequatur nesciunt, ipsum facere autem, dicta quam consectetur! Nostrum quae odit adipisci omnis asperiores!</p>
               </div>
             </div>
             <div class="tab_foot flex_align_justify">
               <button class="decline">
                 Decline
               </button>
               <button class="agree" onclick="window.location.href='login-sign.php'">
                 Agree
               </button>
             </div>
          </div>
      </div>
   </div>
    <!--Terms & Conditions section end -->
   <br><br>
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


    /* Search Bar JavaScript */
    const toggleSearch = (search, button) => {
        const searchBar = document.getElementById(search),
              searchButton = document.getElementById(button);

        searchButton.addEventListener('click', () => {
            searchBar.classList.toggle('show-search');
        });
    }
    toggleSearch('search-bar', 'search-button');

/* Terms and Condition */
var tab_lists = document.querySelectorAll(".tabs_list ul li");
var tab_items = document.querySelectorAll(".tab_item"); 

tab_lists.forEach(function(list){
  list.addEventListener("click", function(){
    var tab_data = list.getAttribute("data-tc");
    
    tab_lists.forEach(function(list){
      list.classList.remove("active");
    });
    list.classList.add("active");
    
    tab_items.forEach(function(item){
      var tab_class = item.getAttribute("class").split(" ");
      if(tab_class.includes(tab_data)){
        item.style.display = "block";
      }
      else{
        item.style.display = "none";
      }
      
    })
    
  })
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
