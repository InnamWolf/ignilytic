/*=================================================
Animar menu
=================================================*/
$(document).ready(function () {
  $('.menu').click(function () {
    $('.contenedor-item').toggle();
  });
});

/*=================================================
Carrusel
=================================================*/
$('.owl-carousel').owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  center: true,
  items: 1,
  margin: 12,
  /* responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
  }, */
});
