/*=================================================
Animar menu
=================================================*/
const menu = document.querySelector('.menu');
const contenedor = document.querySelector('.contenedor-item');

menu.addEventListener('click', () => {
  if (contenedor.classList.contains('inactivo')) {
    contenedor.classList.remove('inactivo');
    contenedor.classList.add('activo');
    contenedor.classList.add('animate__animated', 'animate__fadeInDown');
  } else {
    contenedor.classList.add('inactivo');
    contenedor.classList.remove('animate__animated', 'animate__fadeInDown');
    contenedor.classList.remove('activo');
  }
});
