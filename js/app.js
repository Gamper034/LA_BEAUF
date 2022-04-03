// const menu = document.querySelector('.liste-nav');
// const btnMenu = document.querySelector('.btn-toggle-container');

// btnMenu.addEventListener('click', function(){
//     menu.classList.toggle('active-menu');
// })

function navbar() {
    var x = document.getElementById("list-nav");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}