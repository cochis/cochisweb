function cochisWordPress() {
  if (document.querySelector('.swiper')) {
    const opciones = {
      loop: true,
      autoplay: { delay: 3000 },
    }

    var swiper = new Swiper(".mySwiper", {
        loop: true,
      autoplay: { delay: 3000 },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}



// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
if (textWrapper) {
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  
}
const burger = document.querySelector('.burger-menu svg')
  burger?.addEventListener('click', function () {
    const menuPrincipal = document.querySelector('.contenedor-menu')
    menuPrincipal?.classList.toggle('mostrar')
  })
document.addEventListener('DOMContentLoaded', cochisWordPress);



window.onscroll = function () {
  const scroll = window.scrollY
  const barranav = document.querySelector('.barra-navegacion')
  if (scroll > 300) {
 barranav?.classList.add('fixed-top')
  
  } else {
    barranav?.classList.remove('fixed-top')
    
}

  
}
