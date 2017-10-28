$("#slideshow > div:gt(0)").hide();
$("#slideshow2 > div:gt(0)").hide();


setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow');
},  3000);

setInterval(function() {
    $('#slideshow2 > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow2');
},  3000);

