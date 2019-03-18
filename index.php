<!DOCTYPE html>
<html>
<head>
	<title>Alertify</title>
	<link rel="stylesheet" type="text/css" href="css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="css/themes/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div class="container">
		
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<form action="" method="post" name="frmEjemplo" id="frmEjemplo">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" id="nombre">
				</div>
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" class="form-control" id="apellidos">
				</div>
				<div class="form-group">
					
					<input type="submit" name="nombre" class="btn btn-primary" value="Agregar" id="agregar">
				</div>
				</form>

				<div id="result"></div>
			</div>
			<div class="col-lg-4"></div>
			
		</div>
	</div>


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/alertify.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>