$(document).ready(function(){
    console.log("home page");	    console.log("home page");

   $('.slider__inner').slick({
    slidesToShow:3,
    slidesToScroll: 1,
    centerMode: true,
    speed:2000,
    arrows: false,
    dots:false,
    fade: false,
    //easing:'ease-in',
    Infinite: true,
    autoplay:true,
    autoplaySpeed:2000,
    pauseOnFocus:false,
    pauseOnHover:false,
    pauseOnDotsHover:false,
    variableWidth:true,

   });

});
