$(document).ready(function(){
	
	$('#add-form').hide();
	$.get('stock.php',function(data){
		$('#data-show').html(data);
	})
	

})