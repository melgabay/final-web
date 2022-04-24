
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
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
});
