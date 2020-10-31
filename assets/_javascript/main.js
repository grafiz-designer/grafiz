/* Global log(), select(), selectAll(), byId() */

import { contact } from './contact.js';



window.addEventListener("DOMContentLoaded", (event) => {

    console.log("DOM entièrement chargé et analysé");


    contact();


    
    /***************
     * SCROLL ANIMATION
     ***************/

    AOS.init();

       /***************
     * SCROLL NAVBAR
     ***************/
    let header = select('header.header');
    
    let navbar = header.firstElementChild;
    log(navbar);
    let scrollY = window.scrollY;
    window.addEventListener('scroll', function(e){
        
        if(this.scrollY >= 70){
          
    //   navbar.classList.remove('is-fixed-top');
         navbar.classList.add('is-scroll');
        }else{
            navbar.classList.remove('is-scroll');
        }
    });
   






    /***************
     * MENU BURGER
     ***************/

    let links = selectAll('.navbar-end a.navbar-item');
    log(links);
    for(let i = 0; i < links.length; i++){
        links[i].addEventListener('click', (event) => {
            // event.preventDefault();

            
        });
    }

    let headers = selectAll('.accordion-header');
   

    headers.forEach(function(header){
        log(headers);
        header.addEventListener('click', (ev) => {
            event = ev.target || ev.srcElement;
            header.nextElementSibling.classList.toggle('is-active');
        
        })
    })




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
     * WORKS 
     ***************/
    
    
    //pour rajouter un background gris sur les imgs sauf celle qui est survolée
    let item, 
        itemsWork = selectAll('section.works a'),
        cards = selectAll('section.works .card'),
        columns = selectAll('section.works .columns')[0];
        
        log(columns);
   
   
    for(let i = 0; i < itemsWork.length; i++){

        itemsWork[i].addEventListener('mouseenter', function(event){

            item = event.target || event.srcElement;
            log(item.firstElementChild);
            
            for(let i = 0; i < itemsWork.length; i++){
                itemsWork[i].firstElementChild.classList.add('scale');
                
                        
            }
            item.firstElementChild.classList.remove('scale');
            
        }); 
        
    }




















    
});
















