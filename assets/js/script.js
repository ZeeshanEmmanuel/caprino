jQuery("#carousel").owlCarousel({
  autoplay: true,
  rewind: false, /* use rewind if you don't want loop */
  margin: 20,
  loop: false,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4.5
    }
  }
});
AOS.init();