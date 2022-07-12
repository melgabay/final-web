let count = 1;

$(document).ready(function() {
    console.log("count");
    $("#count").click(function() { //on click on the button id count
        let form = $("#form-part-two").clone().prependTo("#pre"); //then copy the form number one and append to the end of the form
        count++;

        if (count == 3) { // cant add more than 3 form
            $("#count").css("visibility", "hidden"); //then if we have 3 form, hidden the button add
        }
        return count;
    })

});

function showData(data) {

    const ulFrag = document.createDocumentFragment();
    for (const key in data.Continents) {
        const option = document.createElement('option');
        sHtml = `${data.Continents[key].continent_name}`;
        option.innerHTML = sHtml;
        $("#continents").append(option);
    }
}

fetch("data/continents.json")
    .then(response => response.json())
    .then(data => showData(data));