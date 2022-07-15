const xhttp = new XMLHttpRequest();

function loadDoc(pageUrl) {

    xhttp.open("GET", pageUrl);
    xhttp.send();

}

$("document").ready(() => {



    let qstr = { "StartDate": null, "EndDate": null, "Name": null, "age": null, "Nuture": null, "Budjet": null };


    let dateStart = $('input[name="dateStart"]').val();
    qstr["StartDate"] = '&dateStart="' + dateStart + '"';
    let dateEnd = $('input[name="dateEnd"]').val();
    qstr["EndDate"] = '&dateEnd="' + dateEnd + '"';
    let Name = $('input[name="continent"]').val();
    qstr["Name"] = '&Name="' + Name + '"';
    let age = $('input[name="age"]').val();
    qstr["age"] = '&age="' + age + '"';
    let type = $('input[name="type"]').val();
    qstr["Nuture"] = '&type="' + type + '"';
    let amount = $('input[name="amount"]').val();
    qstr["Budjet"] = '&amount="' + amount + '"';


    $(".btn").eq(0).click(function() {
        let str = "?id=1";

        for (const x in qstr) {
            if (qstr[x] != undefined && qstr[x] != NaN) {
                str += qstr[x];
            }

        }

        console.assert("dsds");

        if (str != "") {
            console.log(str);
            loadDoc('Create_Trip.php' + str);
            xhttp.onload = function() {
                console.assert(true, this.responseText);

            }
        }
    });


});