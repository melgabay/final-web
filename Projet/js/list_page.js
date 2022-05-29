$("document").ready(() => {
    console.log("dsds");
    $('.delete_button').click(function() {
        let index = $('.delete_button').index(this);
        $('.destnation').eq(index).css("display", "none");



    })
});
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});