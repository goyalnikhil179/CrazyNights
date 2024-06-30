console.log('hi main js is running');
var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide() {
  if (index < 0) {
    index = slides.length - 1;
  }

  if (index > slides.length - 1) {
    index = 0;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }

  slides[index].style.display = "block";
  dot[index].classList.add("active");

  index++;

  setTimeout(changeSlide, 7000);
}

changeSlide();
var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logo-slider").appendChild(copy);
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 3,
    autoplay: true,
    margin: 30,
    loop: true,
    dots: true,
    //      nav:true,
    //      navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ]
  });
});
function hideLoader() {
  const loader = document.querySelector(".loading");
  loader.classList.add("hidden");
}

// Example usage: hide the loader after 3 seconds
setTimeout(hideLoader, 5000);