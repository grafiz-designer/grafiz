/* Global log(), select(), selectAll(), byId() */

import { form } from './form-ajax.js';

window.addEventListener("DOMContentLoaded", event => {

    console.log("DOM entièrement chargé et analysé");

    /***************
     * SCROLL ANIMATION
     ***************/

    AOS.init();

    /***************
     * MENU BURGER
     ***************/

    // let links = selectAll('.navbar-end a.navbar-item');
    // log(links);
    // for(let i = 0; i < links.length; i++){
    //     links[i].addEventListener('click'), (event) => {
    //         event.preventDefault();
    //         log(event.target);

    //     };
    // }


    /***************
     * MENU BURGER
     ***************/

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(selectAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
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
    // let menu = select('.navbar-menu');
    let hero = navbar.nextElementSibling;
    let waves = select('.wave').parentElement;
    let main = select('main');
    let logo = select('.hero h1');
    let scrollPlay = false;

    window.addEventListener('scroll', function () {

        let scrollY = window.scrollY;
        var largeur = window.innerWidth;

        if (largeur < 769) {

            if (scrollY >= 70) {
                navbar.classList.add('is-scroll');
                navbar.classList.remove('is-spaced');
            } else {
                navbar.classList.remove('is-scroll');
                navbar.classList.add('is-spaced');
            }

            if (scrollY >= 150) {
                document.html.classList.add('is-scale');
            }

            // sinon le viewport est tablet ou desktop
        } else {

            if (scrollY >= 10) {
                navbar.classList.add('is-scroll');
                navbar.classList.remove('is-spaced'); //réduis du margin sur la navbar fixe
            }

            if (scrollY <= 150) {
                navbar.classList.remove('is-scroll');
            }

            if (scrollY >= 350) {
                main.classList.add('is-translate');
            }
        }
    });

    /***************
    * WORKS 
    ***************/

    //pour rajouter un background gris sur les imgs sauf celle qui est survolée
    let item,
        itemsWork = selectAll('section.works .image'),
        columns = select('.columns');

    for (let i = 0; i < itemsWork.length; i++) {

        itemsWork[i].addEventListener('mouseenter', function (event) {

            item = event.target || event.srcElement;

            for (let i = 0; i < itemsWork.length; i++) {}

            // itemsWork[i].classList.add('is-gray');
            // itemsWork[i].style.transform = "scale(0.8)";

            // item.classList.remove('is-gray');
        });
    }

    // enlève le background gris dès que la souris sort des images
    columns.addEventListener('mouseleave', event => {

        for (let i = 0; i < itemsWork.length; i++) {

            itemsWork[i].classList.remove('is-gray');
        }
    });

    // formulaire

    let myForm = document.getElementById('myForm');

    myForm.addEventListener('submit', function (e) {
        e.preventDefault();
    });
});