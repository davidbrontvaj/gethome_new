//$(function(){
 //   $('.property-form').find('input,select,textarea').attr('disabled',true);
//	$('.initial-input').removeAttr('disabled');
//	$('.property-form input,.property-form select,.property-form textarea').on('click keydown pase keyup',function() {
    //    if ($(this).val()!=="") {
    //        $(this).parents('.form-group').nextAll().find("input,select,textarea").eq(0).removeAttr('disabled');
    //        if ($(this).hasClass( "last-input-item" )){
    //            $(this).parents('.box-body').next().next().find(".form-group").eq(0).find("input,select,textarea").eq(0).removeAttr('disabled');
     //       }
    //    }
	//});
//});



$( document ).ready(function() {
    $(".innactiveproperty").click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "/inactiveproperty",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: { 
            title: $(this).parents(".parent").find(".titleofproperty").text(),
            property_id: $(this).parents(".parent").attr("data-id")// < note use of 'this' here
        },
        success: function(result) {
            alert('Inzerat bol nahlaseny,yea!');
        },
        error: function(result) {
            alert('error');
        }
    });
});
});

