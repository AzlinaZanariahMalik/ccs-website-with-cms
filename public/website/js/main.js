//for navigation scroll add and hide color
const navColor = document.querySelector('.navbar');

window.addEventListener('scroll',()=>{
  if(window.scrollY >= 60) {
    navColor.classList.add('navbar-scrolled');
  } else if (window.scrollY < 60){
    navColor.classList.remove('navbar-scrolled');
  }
});

