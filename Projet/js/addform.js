let count = 1;
let jsondata;
let continentSelected;

function showData(data) {
    jsondata = data;
    const ulFrag = document.createDocumentFragment();
    for (const key in data.Continents) {
        const option = document.createElement('option');
        sHtml = `${data.Continents[key].continent_name}`;
        option.innerHTML = sHtml;
        option.setAttribute('value', `${data.Continents[key].continent_id}`);
        $("#continents").append(option);
    }
};


$(document).ready(function() {

    fetch("data/continents.json")
        .then(response => response.json())
        .then(data => showData(data));


    $("#count").click(function() { //on click on the button id count
        let newForm = $("#form-part-two").clone();


        newForm.find('select').each(function() {
            let selectName = ($(this).attr('name'));
            if (String(selectName).indexOf("inputCountry") >= 0) {
                console.log($(this));
                console.log($(this).attr('name'));
                $(this).attr('name', 'inputCountry' + (count + 1));
            }

            newForm.prependTo("#pre"); //then copy the form number one and append to the end of the form

            count++;

            $("#NumDest").val(count);

            if (count == 4) { // cant add more than 3 form
                $("#count").css("visibility", "hidden"); //then if we have 3 form, hidden the button add
            }
            return count;
        });








    });
    $("#inputCountry").live('change', function() {
        console.log("kldfkalfkdsfdksl");
        for (const key in jsondata.Continents[continentSelected].countries) {
            if (`${jsondata.Continents[continentSelected].countries[key].country_name}` == $('.form-select.country').find(":selected").text()) {
                for (const keyC in jsondata.Continents[continentSelected].countries[key].areas) {
                    sHtml = `${jsondata.Continents[continentSelected].countries[key].areas[keyC].area_name}`;
                    console.log(sHtml);
                    const input = document.createElement('input');
                    input.setAttribute('value', `${jsondata.Continents[continentSelected].countries[key].areas[keyC].area_name}`);
                    input.innerHTML = sHtml;
                    $("#areas").html(input);


                }

            }
        }


    });


    $('body').on('change', "#continents", function() {

        for (const key in jsondata.Continents) {
            if (`${jsondata.Continents[key].continent_name}` == $("#continents").find(":selected").text()) {
                continentSelected = $("#continents").find(":selected").val();
                continentSelected--;
                const option = document.createElement('option');
                for (const keyC in jsondata.Continents[key].countries) {
                    sHtml = `${jsondata.Continents[key].countries[keyC].country_name}`;
                    option.setAttribute('value', `${jsondata.Continents[key].countries[keyC].country_name}`);
                    option.innerHTML = sHtml;
                    console.log(option);
                    $('.form-select.country').html(option);

                }

            }
        }


    });



});