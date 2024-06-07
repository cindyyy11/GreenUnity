

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





/* schedule tabs */ 

function scheduleTabs(){
  const tabs = document.querySelectorAll(".js-schedule-tab");

  tabs.forEach((tab) => {
     tab.addEventListener("click", () => {
        if(tab.classList.contains("active")){
         return;
        }
        document.querySelector(".js-schedule-tab.active").classList.remove("active");
        tab.classList.add("active");
        const target = tab.getAttribute("data-target");
        document.querySelector(".js-schedule-table.active").classList.remove("active");
        document.querySelector(target).classList.add("active");
     });
  });
}
scheduleTabs();


/* history of GreenUnity section */ 

(function () {
  "use strict";
  var items = document.querySelectorAll(".timeline li");

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();
