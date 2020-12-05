const menuToggle = document.querySelector('#menu-togle');
const mobileNavContainer = document.querySelector('#mobile-nav');
const body = document.querySelector('body');

menuToggle.onclick = function () {
  menuToggle.classList.toggle('menu-icon-active');
  mobileNavContainer.classList.toggle('mobile-nav--active');
  body.classList.toggle('modal-open');
}

/*__________________________________________________________________*/
const header = document.querySelector(".header-overlay");

function checkScroll() {
    let scrollPos = window.scrollY;

    if (scrollPos > 300) {
        header.classList.add("scroll");
        header.classList.remove("no-scroll");
    } else {
        header.classList.add("no-scroll");
        header.classList.remove("scroll");
    }
}

window.addEventListener("scroll", checkScroll);
document.addEventListener("DOMContentLoaded", checkScroll);


/*__________________________________________________________________*/
/* Active MEnu Items*/
window.addEventListener('scroll', () => {
  let scrollDistance = window.scrollY;

  console.log(scrollDistance);

  document.querySelectorAll('section').forEach((el, i) => {
      if (el.offsetTop - document.querySelector('.header').clientHeight <= scrollDistance) {
          document.querySelectorAll('nav a').forEach((el) => {
              if (el.classList.contains('nav__link-active')) {
                  el.classList.remove('nav__link-active');
              }
          });

          document.querySelectorAll('nav li')[i].querySelector('a').classList.add('nav__link-active')
      }
  });
});
/* /Active MEnu Items*/


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

