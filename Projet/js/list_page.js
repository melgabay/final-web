

$("document").ready(() => {
    $('.delete_button').click(function() 
    {
        let index=  $('.delete_button').index(this);
        $('.destnation')[index].css("visibility","hidden");

       
    
    })
});
//$(function () {

     //ACTIVATION DU DATEPICKER 
  //  $('.datepicker').datepicker({
    //    clearBtn: true,
      // format: "dd/mm/yyyy"
     //});
//});

