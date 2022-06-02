"use strict";

$("document").ready(function () {
  $('.delete_button').click(function () {
    var index = $('.delete_button').index(this);
    $('.destnation').eq(index).css("display", "none");
  });
});
jQuery(document).ready(function ($) {
  $(".clickable-row").click(function () {
    window.location = $(this).data("href");
  });
});