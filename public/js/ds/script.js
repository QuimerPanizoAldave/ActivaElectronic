

$("#registro").click(function(){
	var dato = $("#categoria").val();
	var route = "/categori";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{categoria: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.categoria);
			$("#msj-error").fadeIn();
		}
	});
});