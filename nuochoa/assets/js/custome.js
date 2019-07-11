$(document).ready(function () {

  var swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  // AOS.init();

  $('.btn-menu').click(function () {
    $('.categories-menu-mobile-hide').addClass('categories-menu-mobile-hide-active', 200);
  })
  $('.close-nav-mobile').click(function () {
    $('.categories-menu-mobile-hide').removeClass('categories-menu-mobile-hide-active', 200);
  })

})