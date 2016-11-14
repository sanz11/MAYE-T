$(function(){
	
	$('.ver').on('click',function(){
		$('#emailmodal').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});

function ver(email,nom){
    $('#nombrems').val(nom);
	$('#emailms').val(email);
}

