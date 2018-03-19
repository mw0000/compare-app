

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

});


