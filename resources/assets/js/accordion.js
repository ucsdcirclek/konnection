/**
 * Created by carld on 5/17/2018.
 */

var acc = document.getElementsByClassName("accordion"); //Get accordion class elements

for (var i = 0; i < acc.length; i++) { //Iterate through all accordion elements
    acc[i].addEventListener("click", function() { //Add a click event listener to all accordions
        this.classList.toggle("active"); //Adds and removes "active" class when accordion is clicked
        var panel = this.nextElementSibling; //Gets the accordion's div
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px"; //Sets a new height for the panel
        }
    });
}
