//MENU BURGER
const spinContainer = document.querySelector(".spin-container");
const btn = document.querySelector(".btn");
const blockNav = document.getElementById("block-nav");


btn.addEventListener("click", () => {
    spinContainer.classList.toggle("active");
    btn.classList.toggle("active");
    blockNav.classList.toggle("active");
});