
$("document").ready(() => {
    $('.delete_button').click(function() 
    {
        let index=  $('.delete_button').index(this);
        $('.destnation').eq(index).css("display", "none");

       
    
    })
});

// PAGE FORM.HTML
$(function () {

  // ACTIVATION DU DATEPICKER 
  $('.datepicker').datepicker({
      clearBtn: true,
      format: "dd/mm/yyyy"
  });

});

