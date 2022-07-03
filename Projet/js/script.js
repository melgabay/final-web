$("document").ready(() => {
    $(".edit").click(function () {

        if ($(".edit").attr('id') == "edit_button") {
            $('input[name="begin"]').prop('disabled', false);
            $('input[name="end"]').prop('disabled', false);
            $('select[name="Ages"]').prop('disabled', false);
            $('select[name="Character"]').prop('disabled', false);
            $('input[name="dest1_ares[]').css("visibility", "visible");
            $('input[name="dest2_ares[]').css("visibility", "visible");
            $('input[name="dest3_ares[]').css("visibility", "visible");
            $('input[name="dest4_ares[]').css("visibility", "visible");
            $('#Save-Button').css("visibility", "visible");
            $(".btn").eq(1).html('Save');
            $(".edit").attr('id', 'save_button');
        } else if ($(".edit").attr('id') == "save_button") {
            $('input[name="begin"]').prop('disabled', true);
            $('input[name="end"]').prop('disabled', true);
            $('select[name="Ages"]').prop('disabled', true);
            $('select[name="Character"]').prop('disabled', true);
            let Cheaks = $('.form-check-input');
            let ClassCheack = $('.form-check');
            let numberOfCheaks = Cheaks.length;
            for (i = 0; i < numberOfCheaks; i++) {
                if (!Cheaks.eq(i).is(':checked')) {
                    ClassCheack.eq(i).css("display", "none");
                }
            }
            $('input[name="dest1_ares[]').css("visibility", "hidden");
            $('input[name="dest2_ares[]').css("visibility", "hidden");
            $('input[name="dest3_ares[]').css("visibility", "hidden");
            $('input[name="dest4_ares[]').css("visibility", "hidden");
            $(".btn").eq(1).html('Edit');
            $(".edit").attr('id', 'edit_button');

        }


    })

    const selectedAges = $('select[name="Ages"]').attr("data-selected");
    $('select[name="Ages"]').val(selectedAges);
    const selectedNature = $('select[name="Character"]').attr("data-selected");
    $('select[name="Character"]').val(selectedNature);

});



(function () {
    if (document.getElementsByClassName("destnation").length == 1) {
        document.getElementsByClassName("trip_destnations")[0].style.justifyContent = "center";
        document.getElementsByClassName("destnation")[0].style.width = "50%";
    }
})();


jQuery(document).ready(function ($) {
    $(".clickable-row").click(function () {
        window.location = $(this).data("href");
    });
});

$(document).ready(function () {
    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
})



