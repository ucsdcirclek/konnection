// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementsByClassName("ModalLogin")[0];
var btn2 = document.getElementsByClassName("ModalLogin")[1]; //The login button on the home page


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the HTML element
var scroll = document.getElementsByTagName("html")[0];

//Gets all elements with class name loginTab and hides them
function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("loginTab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
}

// When the user clicks on the button, open the modal (make the modal visible)
btn.onclick = function() {
    modal.style.display = "block"
    scroll.style.overflow = "hidden"; //Disables scrolling when modal is open
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    scroll.style.overflow = "auto"; //Re enables scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        scroll.style.overflow = "auto"; //Re enables scrolling
    }
}

btn2.onclick = function() {
    modal.style.display = "block"
    scroll.style.overflow = "hidden"; //Disables scrolling when modal is open
}


//Adapted from ode from w3schools.com