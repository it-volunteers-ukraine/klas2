const newsSwiper=new Swiper(".single-post__slider",{spaceBetween:21,slidesPerView:4,freeMode:!0,watchSlidesProgress:!0,keyboard:{enabled:!0}});var newsSwiper2=new Swiper(".single-post__slider2",{spaceBetween:10,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".single-post__swiper__pagination",clickable:!0,renderBullet:function(e,n){return'<span class="single-post__slider2__pagination-span '+n+'"></span>'}},keyboard:{enabled:!0},thumbs:{swiper:newsSwiper}});lightbox.option({alwaysShowNavOnTouchDevices:!0,wrapAround:!0,disableScrolling:!0,wrapAround:!0,positionFromTop:60});const bulletContainer=document.querySelector(".single-post__swiper__pagination"),bulletEls=document.querySelectorAll(".single-post__slider2__pagination-span"),bulletsCount=bulletContainer.childElementCount,bulletContainerWidth=bulletContainer.offsetWidth;function calcFunc(e,n){const t=(n-10*(e-1))/e;return Math.round(t)}bulletEls.forEach((e=>e.style.width=`${calcFunc(bulletsCount,bulletContainerWidth)}px`));