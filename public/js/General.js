$(function() {
    
    // Navbar Scroll

    $(document).scroll(function() {
        var $nav = $(".sticky-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });



    // Animated Flash Message


    setTimeout(function(){
        $('.flashanimated').slideUp(600);
    }, 2500);


    $('#clientspayebtn').click(function(){
        $('#clientspaye').collapse('toggle');
    });
    $('#clientsnonpayebtn').click(function(){
        $('#clientsnonpaye').collapse('toggle');
    });
    $('#themechangebtn').click(function(){
        $('#themechange').collapse('toggle');
    });
});




// Sécurité d'informations

jQuery(document).keydown(function(event){
    if(event.keyCode == 123 || (event.ctrlKey && event.shiftKey && event.keyCode == 'I'.charCodeAt(0)) || (event.ctrlKey && event.shiftKey && event.keyCode == 'J'.charCodeAt(0)) || (event.ctrlKey && event.keyCode == 'U'.charCodeAt(0)) || (event.ctrlKey && event.shiftKey && event.keyCode == 'C'.charCodeAt(0))) {
        return false;
    }
});

// jQuery(document).contextmenu(function(){
//     return false;
// });


