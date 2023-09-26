//animation script au scroll
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square = entry.target.querySelector('.div-animated');
  
      if (entry.isIntersecting) {
        square.classList.add('title-animated');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square.classList.remove('title-animated');
    });
  });
  
  observer.observe(document.querySelector('#story-title'));
  observer.observe(document.querySelector('#studio-title'));

//script carrousel
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  spaceBetween:-10,
  coverflowEffect: {
    rotate: 160,
    stretch: 0,
    depth: 500,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});