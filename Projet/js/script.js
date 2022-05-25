
$("document").ready(() => {
    $('.edit_button').click(function() 
    {
        let index=  $('.edit_button').index(this);
        if(index ==0)
        {
            $('input[name="begin"]').prop('disabled', false);
            $('input[name="end"]').prop('disabled', false);
         }
         if(index ==1)
         {
            $('select[name="Ages"]').prop('disabled', false);

         }
         if(index ==2)
         {
            $('select[name="Character"]').prop('disabled', false);
        }
        if(index >2)
        {
            index=index-2;
            if(index ==1)
            {
                $('input[name="dest1_ares[]').css("visibility", "visible");
            }  
            if(index ==2)
            {
                $('input[name="dest2_ares[]').css("visibility", "visible");
            } 
            if(index ==3)
            {
                $('input[name="dest3_ares[]').css("visibility", "visible");
            }  
            if(index ==4)
            {
                $('input[name="dest4_ares[]').css("visibility", "visible");
            }   
        }
        $('#Save-Button').css("visibility", "visible");
    })
    $('select[name="Ages"]')


});



(function () {
    if (document.getElementsByClassName("destnation").length == 1) {
        document.getElementsByClassName("trip_destnations")[0].style.justifyContent = "center";
        document.getElementsByClassName("destnation")[0].style.width = "50%";
    }
})();

