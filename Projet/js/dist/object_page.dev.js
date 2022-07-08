"use strict";

$("document").ready(function () {
  console.log("45656");
  $(".btn").click(function () {
    $('input[name="begin"]').prop('disabled', false);
    $('input[name="end"]').prop('disabled', false);
    $('select[name="Ages"]').prop('disabled', false);
    $('select[name="Character"]').prop('disabled', false);
    $('input[name="dest1_ares[]').css("visibility", "visible");
    $('input[name="dest2_ares[]').css("visibility", "visible");
    $('input[name="dest3_ares[]').css("visibility", "visible");
    $('input[name="dest4_ares[]').css("visibility", "visible");
    $('#Save-Button').css("visibility", "visible");
  });
  var selectedAges = $('select[name="Ages"]').attr("data-selected");
  $('select[name="Ages"]').val(selectedAges);
  var selectedNature = $('select[name="Character"]').attr("data-selected");
  $('select[name="Character"]').val(selectedNature);
});

(function () {
  if (document.getElementsByClassName("destnation").length == 1) {
    document.getElementsByClassName("trip_destnations")[0].style.justifyContent = "center";
    document.getElementsByClassName("destnation")[0].style.width = "50%";
  }
})();