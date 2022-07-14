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
        });

        newForm.find('input').each(function() {
            let selectName = ($(this).attr('name'));
            if (String(selectName).indexOf("areas") >= 0) {
                console.log($(this));
                console.log($(this).attr('name'));
                $(this).attr('name', 'areas' + (count + 1) + '[]');
            }
        });



        newForm.prependTo("#pre"); //then copy the form number one and append to the end of the form

        count++;

        $("#NumDest").val(count);

        if (count == 4) { // cant add more than 3 form
            $("#count").css("visibility", "hidden"); //then if we have 3 form, hidden the button add
        }
        return count;
    });


    $('body').on('change', "#inputCountry", function() {
        for (const key in jsondata.Continents[continentSelected].countries) {
            if (`${jsondata.Continents[continentSelected].countries[key].country_name}` == $('.form-select.country').find(":selected").text()) {
                for (const keyC in jsondata.Continents[continentSelected].countries[key].areas) {
                    sHtml = `${jsondata.Continents[continentSelected].countries[key].areas[keyC].area_name}`;
                    console.log(sHtml);
                    const input = document.createElement('input');
                    const label = document.createElement('label');
                    const div = document.createElement('div');
                    div.setAttribute('class', 'form-check');
                    label.setAttribute('value', `${jsondata.Continents[continentSelected].countries[key].areas[keyC].area_name}`);
                    input.setAttribute('value', `${jsondata.Continents[continentSelected].countries[key].areas[keyC].area_name}`);
                    input.setAttribute('class', 'form-check-input');
                    input.setAttribute('type', 'checkbox');
                    let id = 1;
                    input.setAttribute('id', 'checkbox');
                    label.setAttribute('for', 'checkbox');
                    id++;
                    input.setAttribute('name', 'areas1[]');
                    label.setAttribute('class', 'form-check-label');
                    label.setAttribute('class', 'flexCheckDefault');
                    label.innerHTML = sHtml;
                    div.append(input);
                    div.append(label);

                    $("#areas").append(div);


                }

            }
        }


    });


    $('body').on('change', "#continents", function() {

        for (const key in jsondata.Continents) {
            if (`${jsondata.Continents[key].continent_name}` == $("#continents").find(":selected").text()) {
                continentSelected = $("#continents").find(":selected").val();
                continentSelected--;
                for (const keyC in jsondata.Continents[key].countries) {
                    let option = document.createElement('option');
                    sHtml = `${jsondata.Continents[key].countries[keyC].country_name}`;
                    option.setAttribute('value', `${jsondata.Continents[key].countries[keyC].country_name}`);
                    option.innerHTML = sHtml;
                    console.log(option);
                    $('.form-select.country').append(option);

                }

            }
        }


    });



});