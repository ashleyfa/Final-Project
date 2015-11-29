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


    $("#button").click(function() {
        var w = document.getElementById('elem_url').value;
        if (w == null || w == "") {
            document.getElementById('elem_url').style.background = "red";
            document.getElementById("alert_message").style.display = 'block';
            document.getElementById("all_error").style.display = 'block';
        }
        else{
            $.get(document.getElementById("elem_url").value, function(data){
                var $data = $('<div>').html( data );
                document.getElementById("link_count").innerHTML = "Number of links = " + $data.find('a[href]').length;
            });
        }
    });

});
