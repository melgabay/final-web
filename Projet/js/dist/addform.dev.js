"use strict";

var count = 1;
$(document).ready(function () {
  console.log("count");
  $("#count").click(function () {
    //on click on the button id count
    $("#form").clone().prependTo("#pre"); //then copy the form number one and append to the end of the form

    count++;

    if (count == 3) {
      // cant add more than 3 form
      $("#count").css("visibility", "hidden"); //then if we have 3 form, hidden the button add
    }

    return count;
  });
});