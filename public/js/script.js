$("#registro").click(function(){
	var dato = $("#categoria").val();
	var dato1 = $("#slug").val(); 
	var dato2 = $("#descripcion").val();
	var file = $("#imagen").val();  
	var route = "/categori";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{categoria: dato,slug: dato1,descripcion: dato2,imagen: file},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.categoria);
			$("#msj-error").fadeIn();
		}
	});
});