
const newsSwiper = new Swiper(".single-post__slider", {
    loop: true,
    spaceBetween: 21,
    slidesPerView: 4,
    slidesPerGroup: 4,
    freeMode: false,
    watchSlidesProgress: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
				return (
					'<span class="single-post__slider__pagination-span ' + className + '"></span>'
				)
			},
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var newsSwiper2 = new Swiper(".single-post__slider2", {
    loop: false,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return (
            '<span class="single-post__slider2__pagination-span ' + className + '"></span>'
          )
        },
    },
    thumbs: {
        swiper: newsSwiper,
    },
  });