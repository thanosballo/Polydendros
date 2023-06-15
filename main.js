const toogle = document.querySelector('.toogle');
const navigation = document.querySelector('.navmenu');

toogle.addEventListener('click',() => {
    toogle.classList.toggle('open');
    navigation.classList.toggle('open');
});


document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    toogle.classList.remove('open');
    navigation.classList.remove('open');
}));

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });