console.log(Swiper)
const swiper = new Swiper("#our-team__slider", {
	slidesPerView: 2,
	spaceBetween: 16,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
		slideToClickedSlide: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
})
