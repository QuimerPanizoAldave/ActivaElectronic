$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/categori";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.categoria+"</td><td>"+value.slug+"</td><td>"+value.descripcion+"</td><td>"+value.imagen+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}
function Eliminar(btn){
	var route = "/categori/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});
}


function Mostrar(btn){
	var route = "/categori/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#categoria").val(res.categoria);
		$("#slug").val(res.slug);
		$("#descripcion").val(res.descripcion);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#categoria").val();
	var dato1 = $("#slug").val();
	var dato2 = $("#descripcion").val();
	var dato3 = $("#imagen").val();
	var route = "/categori/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {categoria: dato, slug:dato1, descripcion:dato2, imagen:dato3},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});