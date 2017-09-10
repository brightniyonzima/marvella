/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./quote_carousel');


window.onscroll = function () {
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("main-nav").classList.remove('is-transparent');
    } else {
        document.getElementById("main-nav").classList.add('is-transparent');

    }
}

//toggle mobile menu
document.getElementById("nav-toggle").addEventListener("click", toggleMenu, false);
function toggleMenu() {
    document.getElementById("nav-menu").classList.toggle("is-active");
}


