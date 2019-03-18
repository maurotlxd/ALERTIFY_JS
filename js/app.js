$(document).ready(function(){

	$("#agregar").on("click",function(event){
		event.preventDefault();
		alertify.confirm('Enviar Datos', 'Desea Procesar los datos ?', function(){ 	
		$.ajax({
			method: "POST",
			url: "backend/getData.php",
			data : $("#frmEjemplo").serialize(),
			success:function(response){
				
				var datos = JSON.parse(response);
				var html = "";
				html += "<table class='table table-bordered'>"
				html += "<tr><th>Nombre</th><th>Apellidos</th></tr>"
				html += "<tr><td>" + datos.nombre + "</td><td>" + datos.apellidos + "</td></tr>"
				html += "</table>"
				
					alertify.alert('Operacion Exitosa', 'Operacion Completada', function(){
						$("#result").html(html);
					});
				
		}
		});

}, function(){ 
	alertify.error('Cancel')
});
		
	});



});