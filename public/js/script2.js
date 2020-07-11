$(document).ready(function(){
    Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
    var route = "http://localhost:8000/especialistass";

    $("#datos").empty();
    $.get(route, function(res){
    	$(res).each(function(key, value){
            tablaDatos.append("<tr><td>"+value.cedula+"</td><td>"+value.nombre+"</td><td>"+value.apellidos+"</td><td>"+value.email+"</td><td>"+value.especialidad+"</td><td>"+value.organizacion+"</td><td>"+value.estado+"</td><td>"+value.ciudad+"</td><td>"+value.postal+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-success ' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></button> <button value="+value.id+" OnClick='Eliminar(this);' class='btn btn-danger '><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button></td></tr>");
    	});
    });
}

function Eliminar(btn){

	  var route = "http://localhost:8000/especialista/"+btn.value+"";
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
	
	var route = "http://localhost:8000/especialista/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#cedula").val(res.cedula);
		$("#nombre").val(res.nombre);
		$("#apellidos").val(res.apellidos);
        $("#email").val(res.email);
        $("#especialidad").val(res.especialidad);
        $("#organizacion").val(res.organizacion);
        $("#estado").val(res.estado);
        $("#ciudad").val(res.ciudad);
        $("#postal").val(res.postal);
        $("#id").val(res.id);
	});
} 

$("#actualizar").click(function(){
	  var value =  $("#id").val();
      var dato1 =  $("#cedula").val();
	  var dato2 = 	$("#nombre").val();
	  var dato3 = 	$("#apellidos").val();
      var dato4 =   $("#email").val();
      var dato5 =   $("#especialidad").val();
      var dato6 =   $("#organizacion").val();
      var dato7 =   $("#estado").val();
      var dato8 =   $("#ciudad").val();
      var dato9 =   $("#postal").val();
      var route = "http://localhost:8000/especialista/"+value+"";
      var token = $("#token").val();

      $.ajax({
      	url: route,
      	headers: {'X-CSRF-TOKEN': token},
      	type: 'PUT',
      	dataType: 'json',
      	data: {cedula: dato1, nombre: dato2, apellidos: dato3, email: dato4, especialidad: dato5, organizacion: dato6, estado: dato7, ciudad: dato8, postal: dato9},
      	success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
      });
        
})