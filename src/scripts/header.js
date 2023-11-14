const menu = document.querySelector('.header__nav');
const menuButton = document.querySelector('.burger')

menuButton.addEventListener('click', function(){
    this.classList.toggle('active');
    menu.classList.toggle('open');
    document.body.classList.toggle("modal-open");
    
    
})


console.log("header");