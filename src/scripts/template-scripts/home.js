$(document).ready(function () {
	console.log("home page");

	$(".slider__inner").slick({
		slidesToShow: 3,
		
		slidesToScroll: 1,
		centerMode: true,
		speed: 2000,
		arrows: false,
		dots: false,
		fade: false,
		//easing:'ease-in',
		Infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		variableWidth: true,
	});


// numbers count
const time = 3000;
const step = 1;

function countNum(num, e) {
  let n = 0;
  let t = Math.round(time / (num / step));
  let interval = setInterval(() => {
    n = n + step;
    if (n == num) {
      clearInterval(interval);
    }
    e.innerHTML = n;
  }, t);
}

const countArr = document.querySelectorAll("#count");
countArr.forEach(e => {
    const amountEl = e.dataset.amount;
    countNum(amountEl, e)
  });

  
  //parallax
window.onload = function () {
  const parallax = document.getElementById("mouse-parallax")
  
  if (parallax) {
    const bgImage = document.getElementById("mouse-parallax-bg");
    bgImage.classList.add("parallax");
  }
}

});
