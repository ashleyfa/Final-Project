$(function() {
    $(".imgHover").hover(
        function() {
            $(this).children("a").fadeTo(200, 0.85).end().children(".hover").show();
        },
        function() {
            $(this).children("a").fadeTo(200, 1).end().children(".hover").hide();
        });
});