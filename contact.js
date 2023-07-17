$(function () {
    $(".form-tt").on('focus', function () {

        $(this).parent(".form-group").addClass('focused');
    });

    $(".form-tt").on('blur', function () {

        $(this).parent(".form-group").removeClass('focused');
    });
});