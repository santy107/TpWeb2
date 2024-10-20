// Variables
let nodoHeader = document.querySelector("#header");
let nodoBtnMenuDesplegable = document.querySelector('#header-btn-menudesplegable');
let nodoSideMenuDesplegable = document.querySelector('#header-side-menudesplegable');
let nodoBtnTema = document.querySelector('#header-tema-contenido-btn');
let nodoFooter = document.querySelector("#footer");

// Eventos
nodoBtnMenuDesplegable.addEventListener('click', function() { 
    // Activa y desactiva el desplazamiento del menu
    nodoSideMenuDesplegable.classList.toggle('active');
});

nodoBtnTema.addEventListener('click', function() {
    // Desliza el boton al hacer click
    nodoBtnTema.classList.toggle('derecha');
});

nodoBtnTema.addEventListener('click', function() {
    // Activa y desactiva el modo de la pantalla entre predeterminado y oscuro
    nodoHeader.classList.toggle('oscuro');
    nodoSideMenuDesplegable.classList.toggle('oscuro');
    nodoFooter.classList.toggle('oscuro');
});
