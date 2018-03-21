$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/categori";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.categoria+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://localhost:8000/categori/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#categoria").val(res.categoria);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#categoria").val();
	var route = "http://localhost:8000/categori/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {categoria: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});