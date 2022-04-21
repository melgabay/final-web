
(function () {
    if (window.matchMedia("(max-width: 760px)").matches) {
        document.getElementsByClassName("hamburger")[0].style.visibility = 'hidden';
        console.log("blabla");
    } else {
        console.log("bobo");
        document.getElementsByClassName("hamburger")[0].style.visibility = 'visible';


    }
})();


(function () {
    if (document.getElementsByClassName("destnation").length == 1) {
        document.getElementsByClassName("trip_destnations")[0].style.justifyContent = "center";
        document.getElementsByClassName("destnation")[0].style.width = "50%";
    }
})();

