$("#registro").click(function(){
	var dato1 = $("#cedula").val();
	var dato2 = $("#nombre").val();
	var dato3 = $("#apellidos").val();
	var dato4 = $("#email").val();
	var dato5 = $("#password").val();
	var dato6 = $("#especialidad").val();
	var dato7 = $("#organizacion").val();
	var dato8 = $("#estado").val();
	var dato9 = $("#ciudad").val();
	var dato10 = $("#postal").val();
	var dato11 = $("#id_rol").val();
	var route = "http://localhost:8000/especialista";
	var token = $("#token").val();

	$.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type : 'POST',
        dataType: 'json',
        data:{cedula: dato1, nombre: dato2, apellidos: dato3, email: dato4, password: dato5, especialidad: dato6, organizacion: dato7, estado: dato8, ciudad: dato9, postal: dato10, id_rol: dato11},

        success:function(){
        	$("#msj-success").fadeIn();
        }
	});
});