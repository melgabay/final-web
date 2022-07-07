const xhttp = new XMLHttpRequest();


function loadDoc(pageUrl) {
    xhttp.onload = function() {
        console.log(this.responseText);;
    }
    xhttp.open("GET", pageUrl);
    xhttp.send();
}
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

function BackToList() {
    window.location.replace("list_page.php");
};


$("document").ready(() => {

    let qstr = { "begin": null, "end": null, "Ages": null, "Characher": null };

    $('body').on('change', 'input[name="begin"]', function() {
        qstr["begin"] = '&begin="' + ($('input[name="begin"]').val()) + '"';

    });

    $('body').on('change', 'input[name="end"]', function() {
        qstr["end"] = '&end="' + ($('input[name="end"]').val()) + '"';
    });

    $('body').on('change', 'select[name="Ages"]', function() {
        qstr["Ages"] = '&ages=' + ($('select[name="Ages"]').val());
    });

    $('body').on('change', 'select[name="Character"]', function() {
        qstr["Characher"] = '&character=' + ($('select[name="Character"]').val());
    });

    $(".edit").click(function() {
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
            //save update in db
            let str = "";
            for (const x in qstr) {
                if (qstr[x] != undefined && qstr[x] != NaN) {
                    str += qstr[x];
                }

            }
            let id = getUrlParameter('prodId');
            if (str != "") {
                loadDoc('UpdateObject.php?prodId=' + id + str);
                console.log('UpdateObject.php?prodId=' + id + str);
            }
            /*xhttp.onload = function() {
                if ((this.responseText) == 1) {
                    $("#mes_text").text("Edit Succeeded");
                    location.reload();

                } else {
                    $("#mes_text").text("Edit Failed");
                    location.reload();
                }
            } */









            $('input[name="begin"]').prop('disabled', true);
            $('input[name="end"]').prop('disabled', true);
            $('select[name="Ages"]').prop('disabled', true);
            $('select[name="Character"]').prop('disabled', true);
            let Cheaks = $('.form-check-input');
            let ClassCheack = $('.form-check');
            let numberOfCheaks = Cheaks.length;
            let Areas1 = [];
            let Areas2 = [];
            let Areas3 = [];
            let Areas4 = [];
            let dest = [Areas1, Areas2, Areas3, Areas4]

            for (i = 0; i < numberOfCheaks; i++) {
                if (!Cheaks.eq(i).is(':checked')) {
                    ClassCheack.eq(i).css("display", "none");
                    console.log(Cheaks.eq(i).val());
                    switch (Cheaks.eq(i).val()) {
                        case '1':
                            dest[1].push(Cheaks.eq(i).attr('id'));
                            break;
                        case '2':
                            dest[2].push(Cheaks.eq(i).attr('id'));
                            break;
                        case '3':
                            dest[3].push(Cheaks.eq(i).attr('id'));
                            console.log(dest[3].length);
                            break;
                        case '4':
                            dest[4].push(Cheaks.eq(i).attr('id'));
                            break;
                    }
                }

            }
            console.log(dest);
            let AreaId = 0;
            for (i = 0; i < 4; i++) {
                console.log("i= " + i);
                if ((dest[i].length) != 0) {
                    $.ajax({
                        type: 'GET',
                        url: 'DeleteAreas.php',
                        data: {
                            Id: i,
                            array: dest[i]
                        },
                        error: function(data) {
                            console.log(data);
                        },
                        success: function(data) {
                            console.log(data);

                        }
                    })

                }


            }

            $('input[name="dest1_ares[]').css("visibility", "hidden");
            $('input[name="dest2_ares[]').css("visibility", "hidden");
            $('input[name="dest3_ares[]').css("visibility", "hidden");
            $('input[name="dest4_ares[]').css("visibility", "hidden");
            $(".btn").eq(1).html('Edit');
            $(".edit").attr('id', 'edit_button');

        }



    });
    const selectedAges = $('select[name="Ages"]').attr("data-selected");
    $('select[name="Ages"]').val(selectedAges);
    const selectedNature = $('select[name="Character"]').attr("data-selected");
    $('select[name="Character"]').val(selectedNature);
    $("#delete_button_mes").click(function() {
        loadDoc("GET", 'DeleteObject.php?prodId=' + id);
        xhttp.onload = function() {
            console.log((this.responseText));
            if ((this.responseText) == 1) {
                $("#mes_text").text("Delete Succeeded");
                $(".btn").css("visibility", "hidden");
                const myTimeout = setTimeout(BackToList, 2000);
            } else {
                $("#mes_text").text("Delete Failed");
                $(".btn").css("visibility", "hidden");
                location.reload();
            }
        }




    });

    $("#delete_button").click(function() {
        $("#myModal").modal('show');

    });



    (function() {
        if (document.getElementsByClassName("destnation").length == 1) {
            document.getElementsByClassName("trip_destnations")[0].style.justifyContent = "center";
            document.getElementsByClassName("destnation")[0].style.width = "50%";
        }
    });


    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
});