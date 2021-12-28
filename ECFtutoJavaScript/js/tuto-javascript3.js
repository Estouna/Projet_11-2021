//BOUTON NEW PLAYER
let para = document.querySelector('.p-exempleJs');
// Ajout d'un "écouteur d'évènement" (event listener) pour que le clic sur le paragraphe exécute le bloc de codes updateName() //
para.addEventListener('click', updateName);
// Ajout de la fonction updateName() qui demande à l'utilisateur un nouveau nom et l'insère dans le paragraphe pour mettre à jour l'affichage
function updateName(){
  let name = prompt('Enter a new name');
  para.textContent = 'PLAYER 1: ' + name;
}



//MENU BURGER
const spinContainer = document.querySelector(".spin-container");
const btn = document.querySelector(".btn");
const blockNav = document.getElementById("block-nav");


btn.addEventListener("click", () => {
    spinContainer.classList.toggle("active");
    btn.classList.toggle("active");
    blockNav.classList.toggle("active");
});
