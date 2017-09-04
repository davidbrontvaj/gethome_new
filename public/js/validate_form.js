$(function(){
    $('.property-form').find('input,select,textarea').attr('disabled',true);
	$('.initial-input').removeAttr('disabled');
	$('.property-form input,.property-form select,.property-form textarea').on('click keydown pase keyup',function() {
        if ($(this).val()!=="") {
            $(this).parents('.form-group').nextAll().find("input,select,textarea").eq(0).removeAttr('disabled');
            if ($(this).hasClass( "last-input-item" )){
                $(this).parents('.box-body').next().next().find(".form-group").eq(0).find("input,select,textarea").eq(0).removeAttr('disabled');
            }
        }
	});
});