//Funcion para hacer el header mas pequeño a la hora de scrollear

window.onscroll = function() {

  scroll = document.documentElement.scrollTop;

  header = document.getElementById('header');

  if(scroll > 20){
    header.classList.add('nav-mod');
  }else if(scroll < 20){
    header.classList.remove('nav-mod');
  }
}

//Funcion para aparecer un menu responsive

document.getElementById("btn_menu").addEventListener("click", mostrar_menu);

menu = document.getElementById("header");
nav = document.getElementById("nav");
body = document.getElementById("contenedor-all");

function mostrar_menu(){
  nav.classList.toggle('move_nav');
  menu.classList.toggle('move-content');
  body.classList.toggle('move-content');
}

window.addEventListener("resize", function(){
  if(window.innerWidth > 760){
    menu.classList.remove('move-content');
    body.classList.remove('move-content');
    nav.classList.remove('move_nav');
  }
})