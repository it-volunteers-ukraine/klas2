
const newsSwiper = new Swiper(".single-post__slider", {
    loop: true,
    spaceBetween: 21,
    slidesPerView: 4,
    freeMode: false,
    watchSlidesProgress: true,
    pagination: {
      el: '.single-post__swiper__pagination',
      clickable: true,
      
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var newsSwiper2 = new Swiper(".single-post__slider2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: '.single-post__swiper__pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return (
            '<span class="single-post__slider2__pagination-span ' + className + '"></span>'
          )
        },
        dynamicBullets: false,
    },
    thumbs: {
        swiper: newsSwiper,
    },
  });