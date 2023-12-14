
const newsSwiper = new Swiper(".single-post__slider", {
    spaceBetween: 21,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
      el: '.single-post__swiper__pagination',
      clickable: true,
    },
  });

  var newsSwiper2 = new Swiper(".single-post__slider2", {
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
        // dynamicBullets: true,
    },
    thumbs: {
        swiper: newsSwiper,
    },
  });