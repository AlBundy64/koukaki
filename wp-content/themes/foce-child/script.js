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