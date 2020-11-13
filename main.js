// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById("modal-wrapper");
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

var slideshow1 = document.getElementById("slideshow1");//Get the essay slide
slideshow1.currentSlideIndex = 1;
showSlides(slideshow1.currentSlideIndex, slideshow1);

var slideshow2 = document.getElementById("slideshow2");//Get the job interview slide
slideshow2.currentSlideIndex = 1;
showSlides(slideshow2.currentSlideIndex, slideshow2);

var slideshow3 = document.getElementById("slideshow3");//Get the oral presentation slide
slideshow3.currentSlideIndex = 1;
showSlides(slideshow3.currentSlideIndex, slideshow3);

function plusSlides(n, slideshow) {
  showSlides((slideshow.currentSlideIndex += n), slideshow);//Go next presentation slide
}

function currentSlide(n, slideshow) {
  showSlides((slideshow.currentSlideIndex = n), slideshow);//Current presentation slide
}

function showSlides(n, slideshow) {//Slideshow
  var i;
  var slides = slideshow.getElementsByClassName("mySlides");
  var dots = slideshow.getElementsByClassName("dot");

  if (n > slides.length) {//Current slideshow
    slideshow.currentSlideIndex = 1;
  }
  if (n < 1) {
    slideshow.currentSlideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");//Show active current slideshow
  }
  slides[slideshow.currentSlideIndex - 1].style.display = "block";//Display style slideshow
  dots[slideshow.currentSlideIndex - 1].className += " active";//Display style slideshow
}
