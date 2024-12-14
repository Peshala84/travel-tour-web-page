let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick= ()=>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll= ()=>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {

  grabCursor: true,
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItems = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  for(var i= currentItems; i < currentItems + 3; i++){
      boxes[i].style.display = 'inline-block';
  };
  currentItems += 3;
  if(currentItems >= boxes.length){
      loadMoreBtn.style.display = 'none';
  }
}