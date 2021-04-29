/*=================================================
Animar menu
=================================================*/
const menu = document.querySelector('.menu');
const contenedor = document.querySelector('.contenedor-item');

menu.addEventListener('click', () => {
  if (contendor.addEventListener('visible')) {
    contenedor.classList.remove('visible');
  } else {
    contenedor.classList.remove('invisible');
    contenedor.classList.add('animate__animated', 'animate__fadeInDown');
  }
});
