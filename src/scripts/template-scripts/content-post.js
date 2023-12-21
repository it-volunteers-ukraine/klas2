
const newsSwiper = new Swiper(".single-post__slider", {
    spaceBetween: 21,
    slidesPerView: 4,
    freeMode: true,
    preloadImages: false,
    lazy: {
    loadOnTransitionStart: false,
    loadPrevNext: true,
  },
    lazyPreloadPrevNext: 1,
    watchSlidesProgress: true,
    keyboard: {
            enabled: true,
        },
  });

  const newsSwiper2 = new Swiper(".single-post__slider2", {
    spaceBetween: 10,
    preloadImages: false,
    lazy: true,
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
    },
    keyboard: {
            enabled: true,
        },
    thumbs: {
        swiper: newsSwiper,
    },
  });

  lightbox.option({
    alwaysShowNavOnTouchDevices: true,
    wrapAround: true,
    disableScrolling: true,
    wrapAround: true,
    positionFromTop: 60,
  });
  
  //dynamic bullets width
const bulletContainer = document.querySelector('.single-post__swiper__pagination');
const bulletEls = document.querySelectorAll('.single-post__slider2__pagination-span');

if(bulletContainer&&bulletEls) {
const bulletsCount = bulletContainer.childElementCount;
const bulletContainerWidth = bulletContainer.offsetWidth;

function calcFunc (bulletsCount, bulletContainerWidth) {
  const bulletWidth = ((bulletContainerWidth - ((bulletsCount-1) * 8)) / bulletsCount);
  return Math.round(bulletWidth);
}

bulletEls.forEach((bulletEl) => bulletEl.style.width = `${calcFunc (bulletsCount, bulletContainerWidth)}px`);
}