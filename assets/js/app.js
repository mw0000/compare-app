

$(function () {
    $("#switchRoundedInfo").click(function () {
        if ($(this).is(":checked")) {
            $(".lang-menu").show();
            $('#main').addClass('is-three-quarters');
            $('#main').addClass('column');
            $("#columns").attr('class', 'columns');
        } else {
            $(".lang-menu").hide();
            $('#main').removeClass('is-three-quarters');
            $('#main').removeClass('column');
            $("#columns").attr('class', 'column');
        }
    });
});


