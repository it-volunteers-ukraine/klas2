document.addEventListener("DOMContentLoaded",(function(){new Swiper(".our-team__slider",{slidesPerView:2,spaceBetween:16,lazy:{loadOnTransitionStart:!0,loadPrevNext:!0},pagination:{el:".swiper-pagination",clickable:!0,renderBullet:function(e,n){return'<span class="our-team__pagination-span '+n+'"></span>'}},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},breakpoints:{576:{slidesPerView:4,grid:{rows:2}}}})}));