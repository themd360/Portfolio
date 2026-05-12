const menuBtn = document.getElementById("menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

const themeBtn = document.getElementById("theme-btn");

themeBtn.addEventListener("click", () => {

    document.body.classList.toggle("light-mode");

});