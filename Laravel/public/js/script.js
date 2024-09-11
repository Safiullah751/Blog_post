// script.js
// script.js

const menuToggle = document.getElementById('menu-toggle');
const navbarMenu = document.getElementById('navbar-menu');

menuToggle.addEventListener('click', () => {
    navbarMenu.classList.toggle('active');
});
