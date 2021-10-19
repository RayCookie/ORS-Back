

//caroousel 1
var slideI = 1;
Slides(slideI);

function plusSlides(n) {
  Slides(slideI += n);
}

function currentSlide(n) {
  Slides(slideI = n);
}

function Slides(n) {
  var i;
  var slides = document.getElementsByClassName("Slides");

  if (n > slides.length) {slideI = 1}
  if (n < 1) {slideI = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideI-1].style.display = "block";

}
// carousel 2
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
