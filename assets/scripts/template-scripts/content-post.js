const newsSwiper=new Swiper(".single-post__slider",{loop:!0,spaceBetween:21,slidesPerView:4,freeMode:!1,watchSlidesProgress:!0,pagination:{el:".single-post__swiper__pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});var newsSwiper2=new Swiper(".single-post__slider2",{loop:!0,spaceBetween:10,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".single-post__swiper__pagination",clickable:!0,renderBullet:function(e,n){return'<span class="single-post__slider2__pagination-span '+n+'"></span>'},dynamicBullets:!1},thumbs:{swiper:newsSwiper}});