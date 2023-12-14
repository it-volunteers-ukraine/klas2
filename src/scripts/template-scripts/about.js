document.addEventListener("DOMContentLoaded", function () {
	const teamSwiper = new Swiper(".our-team__slider", {
		slidesPerView: 2,
		spaceBetween: 16,
		lazy: {
			loadOnTransitionStart: true,
			loadPrevNext: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			renderBullet: function (index, className) {
				return (
					'<span class="our-team__pagination-span ' + className + '"></span>'
				)
			},
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			576: {
				slidesPerView: 4,
				grid: {
					rows: 2,
				},
			},
		},
	})
})
document.addEventListener("DOMContentLoaded", function () {
	var swiperContainer = document.querySelector(".swiper-container")
	if (swiperContainer) {
		var swiperSlides = swiperContainer.querySelectorAll(".swiper-slide")
		swiperSlides.forEach(function (slide) {
			slide.removeAttribute("role")
			slide.setAttribute("role", "listitem")
		})
	}
})
