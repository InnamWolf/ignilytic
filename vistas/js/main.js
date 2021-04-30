/*=================================================
Animar menu
=================================================*/
const menu = document.querySelector('.menu');
const contenedor = document.querySelector('.contenedor-item');

menu.addEventListener('click', () => {
  if (contenedor.classList.contains('activo')) {
    contenedor.classList.remove('activo');
    contenedor.classList.remove('animate__animated', 'animate__fadeInDown');
  } else {
    contenedor.classList.add('activo');
    contenedor.classList.add('animate__animated', 'animate__fadeInDown');
  }
});
