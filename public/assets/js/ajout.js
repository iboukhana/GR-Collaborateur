	

    $(document).ready(function() {
		$(".sorti").hide();
        $("#date_sortie_desactive").click(function(){

        $(".sorti").slideDown();});
		$("#date_sortie_active").click(function(){

			$(".sorti").slideUp();})
		});


$(document).on('click', 'li', function(){  
	$('#projet_id').val($(this).text());  
	$('#projet').fadeOut();  
}); 

