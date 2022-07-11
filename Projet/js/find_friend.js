function loadDoc(pageUrl) {
    xhttp.onload = function() {
        console.log(this.responseText);;
    }
    xhttp.open("GET", pageUrl);
    xhttp.send();
}

$("document").ready(() => {

    let qstr = { "month": null, "year": null };

    $('body').on('change', 'input[name="date"]', function() {
        let month = $('input[name="date"]').val().substring(0, 2);
        let year = $('input[name="date"]').val().substring(3, 8);
        qstr["dateMonth"] = '?dateMonth="' + month + '"';
        qstr["dateYear"] = '&dateYear="' + year + '"';

    });
    $(".btn").eq(0).click(function() {

        let str = "";

        for (const x in qstr) {
            if (qstr[x] != undefined && qstr[x] != NaN) {
                str += qstr[x];
            }

        }

        console.log(str);
        if (str != "") {
            loadDoc('SearchFriend.php' + str);
            xhttp.onload = function() {
                console.log(this.responseText);
                if ((this.responseText) == 1) {
                    successEdit = 1;
                    console.log(this.responseText);


                }
            }
        }
    });


});