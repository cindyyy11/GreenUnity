

window.addEventListener("load", () => {
  /* preloader */ 
  document.querySelector(".js-preloader").classList.add("loaded");
  document.querySelector(".js-preloader .js-bg-item").addEventListener("transitionend", () => {
    document.querySelector(".js-preloader").style.display = "none";
  })
});

  /* Search Bar JavaScript */
  const toggleSearch = (search, button) => {
    const searchBar = document.getElementById(search),
          searchButton = document.getElementById(button);

    searchButton.addEventListener('click', () => {
        searchBar.classList.toggle('show-search');
    });
}
toggleSearch('search-bar', 'search-button');


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




