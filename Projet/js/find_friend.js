function loadDoc(pageUrl) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {

    }
    xhttp.open("GET", pageUrl);
    xhttp.send();

}

$("document").ready(() => {



    let qstr = { "month": null, "year": null, "dest": null, "char": null, "ages": null };

    $('body').on('change', 'input[name="date"]', function() {
        let month = $('input[name="date"]').val().substring(0, 2);
        let year = $('input[name="date"]').val().substring(3, 8);
        qstr["dateMonth"] = '&dateMonth="' + month + '"';
        qstr["dateYear"] = '&dateYear="' + year + '"';

    });


    $('body').on('change', 'select[name="destId"]', function() {
        let destId = $('select[name="destId"]').val();
        qstr["dest"] = '&dest="' + destId + '"';
    });


    $('body').on('change', 'select[name="ages"]', function() {
        let ages = $('select[name="ages"]').val();
        qstr["ages"] = '&ages=' + ages + '';
    });

    $('body').on('change', 'select[name="charactere"]', function() {
        let charactere = $('select[name="charactere"]').val();
        qstr["char"] = '&char=' + charactere + '';
    });

    $(".btn").eq(0).click(function() {

        let str = "?id=1";

        for (const x in qstr) {
            if (qstr[x] != undefined && qstr[x] != NaN) {
                str += qstr[x];
            }

        }

        if (str != "") {
            console.log(str);
            loadDoc('SearchFriend.php' + str);
            xhttp.onload = function() {
                $("#friend_result").html(this.responseText);

            }
        }
    });
    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);

});