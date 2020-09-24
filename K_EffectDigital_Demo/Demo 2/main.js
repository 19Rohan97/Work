//Selectors
let header = document.querySelector(".header");
let hamburgerMenu = document.querySelector(".hamburger-menu");


// To make the Navigation bar light and dark on scroll
window.addEventListener("scroll", function () {
  let windowPosition = window.scrollY > 500;
  header.classList.toggle("active", windowPosition);
});


// To toggle the hamburger menu
hamburgerMenu.addEventListener("click", function () {
  header.classList.toggle("menu-open");
});
