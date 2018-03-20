

$(function () {
    $("#switchRoundedInfo").click(function () {
        if ($(this).is(":checked")) {
            $(".lang-menu").fadeIn("slow");
            $('#main').addClass('is-three-quarters');
            $('#main').addClass('column');
            $("#columns").attr('class', 'columns');
        } else {
            $(".lang-menu").fadeOut("slow");
            $('#main').removeClass('is-three-quarters');
            $('#main').removeClass('column');
            $("#columns").attr('class', 'column');
        }
    });

    $('.dropdown').click(function () {

        $(this).toggleClass( "is-active" );

    });

    // dodac podzial na left i right

    $('.dropdown-item-left').click(function() {
        $.get('http://localhost:8000/compare.php', function(data, status){
            //alert("Data: " + data + "\nStatus: " + status);
            $( ".compare-content-data-left" ).empty();
            $( ".compare-content-data-left" ).append( data );
        });

    });


    $('.dropdown-item-right').click(function() {
        $.get('http://localhost:8000/compare.php', function(data, status){
            $( ".compare-content-data-right" ).empty();
            $( ".compare-content-data-right" ).append( data );
        });

    });

});


