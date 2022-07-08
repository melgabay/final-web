let count = 1;

$(document).ready(function () {
    console.log("count");
    $("#count").click(function () { //on click on the button id count
        let form = $("#form-part-two").clone().prependTo("#pre"); //then copy the form number one and append to the end of the form
         count++;

         $(document).ready(function() {
            $(".formpage").css({
            "height": "100%",
            "padding-bottom": "2%",
            });
        });
        
         if (count == 3) { // cant add more than 3 form
             $("#count").css("visibility", "hidden");  //then if we have 3 form, hidden the button add
         }
         return count;
     })

    // $("#count").click(function () { //on click on the button id count

    //     let form = $("#form-part-two").clone().reset(); // copy the form number one and then reset him
    //     $("#form-part-two").appendChild(form); // append the new form to the last form         

    //     count++;

    //     if (count == 3) { // cant add more than 3 form
    //         $("#count").css("visibility", "hidden");  //then if we have 3 form, hidden the button add
    //     }
    //     return count;
    // })

});


    // $("#count").click(function () { //on click on the button id count
    //    let form = $("#form-part-two").clone().prependTo("#pre"); //then copy the form number one and append to the end of the form
    //     count++;
    //     if (count == 3) { // cant add more than 3 form
    //         $("#count").css("visibility", "hidden");  //then if we have 3 form, hidden the button add
    //     }
    //     return count;
    // })


// const node = document.createElement("li");
// const textnode = document.createTextNode("Water");
// node.appendChild(textnode);
// document.getElementById("myList").appendChild(node);

// let form = $("#form-part-two").clone().reset(); //then copy the form number one and then reset him

// $("#form-part-two").appendChild(form); // append the new form to the last form