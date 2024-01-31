import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


let hamburger = document.querySelector("#horizontalNav");
let nav = document.querySelector("#nav");

hamburger.addEventListener("click", function () {

    nav.classList.toggle("hidden");
    nav.classList.toggle("flex");




});