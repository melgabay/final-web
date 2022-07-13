var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

$("document").ready(() => {
    let id = getUrlParameter('id');
    const destId = $('select[name="destId"]').attr("data-selected");
    $('select[name="destId"]').val(destId);
    const selectedNature = $('select[name="Character"]').attr("data-selected");
    $('select[name="Character"]').val(selectedNature);
    if ($.trim($("#submit-button").text()) == 'Edit') {
        $('input').prop('disabled', true);
        $('select').prop('disabled', true);

    }

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);



    $('#submit-button').click(function(e) {
        var fullName = $('input[name="fullName"]').val();
        if (fullName) {
            if (!fullName.includes(" ")) {
                alert("Full Name: must contain at least one space");
                e.preventDefault();
            }
        }
    });

    let update = getUrlParameter('update');
    console.log(update);
    if (update != false) {
        if (update == 1) {
            $("#mes_text").text("Edit Success");
            $('#myModal').modal('show');
            setTimeout(200);
            $('#myModal').modal('hide');

        } else {
            $("#mes_text").text("Edit Failed");
            $("#myModal").modal('show');
            setTimeout(200);
            $("#myModal").modal('hide');

        }
    }


});