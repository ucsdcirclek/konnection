// Tracks current slide image to display
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
    // Set array of slides
    var slides = document.getElementsByClassName("mySlides");

    // Set the array of dots on bottom of slideshow
    var dots = document.getElementsByClassName("famSlideDot");

    // Resets slideIndex to beginning if at final pic
    if (n > slides.length) {slideIndex = 1}

    // Sets slideIndex to final pic if going prev at start pic
    if (n < 1) {slideIndex = slides.length}

    // Displays the images
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Displays correct dot corresponding to the slideshow pic
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    //Displays current slide image and active dot
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}