$(function() {
    $(".imgHover").hover(
        function() {
            $(this).children("a").fadeTo(200, 0.85).end().children(".hover").show();
        },
        function() {
            $(this).children("a").fadeTo(200, 1).end().children(".hover").hide();
        });
    $(".toggle").click(function(){
        $(this).find('i').toggleClass('fa-plus fa-minus');
    });
    
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});


