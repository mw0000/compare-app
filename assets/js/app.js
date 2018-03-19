

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

    $('.dropdown-item').click(function() {

        console.log($(this).attr('class').split(' ')[1]);
        
        $.get('http://localhost:8000/compare.php', function(data, status){
            //alert("Data: " + data + "\nStatus: " + status);
            $( ".compare-content-data" ).empty();
            $( ".compare-content-data" ).append( data );
        });

        

    });

});


