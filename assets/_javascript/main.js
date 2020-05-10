import { log, select, selectAll, byId } from './_utilities.js';



window.addEventListener("DOMContentLoaded", (event) => {
    
    console.log("DOM entièrement chargé et analysé");
    
    /***************
     * SCROLL ANIMATION
     ***************/

    AOS.init();


    /***************
     * MENU BURGER
     ***************/

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(selectAll('.navbar-burger'), 0);
    
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        
        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
                
                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = byId(target);
                
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
                
            });
        });
    }


    /***************
     * SCROLL HEADER
     ***************/
    


    let header = select('header.header');
    let navbar = header.firstElementChild;
    let menu = select('.navbar-menu');
    let hero = navbar.nextElementSibling;


    window.addEventListener('scroll', function(){

        let value = window.scrollY;

        if(value >= 10){
            hero.classList.add('is-black-1');

        }else{
            hero.classList.remove('is-black-1');
            hero.classList.add('is-normal');
        }

        if(value >= 150){
            hero.classList.add('is-black-2');
            navbar.classList.add('is-scroll');
            navbar.classList.remove('is-spaced');
            menu.classList.add('is-scroll');
         

        }else{
            hero.classList.remove('is-black-1');
            navbar.classList.remove('is-scroll');
            navbar.classList.add('is-spaced');
        }


        if(value >= 300){
            hero.classList.add('is-black-3');
            document.html.classList.add('is-scale');

        }else{
            hero.classList.remove('is-black-2');
        }


        if(value >= 400){
            hero.classList.add('is-black-4');
            
        }else{
            hero.classList.remove('is-black-3');
        }



        
     

     

        
      
        
    });


    
});

