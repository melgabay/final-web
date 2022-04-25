
(function () {
    if (window.matchMedia("(max-width: 760px)").matches) {
        document.getElementsByClassName("hamburger")[0].style.visibility = 'visible';
        console.log("blabla");
    } else {
        console.log("bobo");
        document.getElementsByClassName("hamburger")[0].style.visibility = 'hidden';


    }
})();


$(function () {

    // ACTIVATION DU DATEPICKER 
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });

});
