<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Ticket &raquo; Agregar datos</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
				$Id 			=mysqli_real_escape_string($con,(strip_tags($_POST["Id"],ENT_QUOTES)));
				$Nombre		     = mysqli_real_escape_string($con,(strip_tags($_POST["Nombre"],ENT_QUOTES)));
				$IdDocumento	 = mysqli_real_escape_string($con,(strip_tags($_POST["IdDocumento"],ENT_QUOTES)));
				$NDocumento	 = mysqli_real_escape_string($con,(strip_tags($_POST["NDocumento"],ENT_QUOTES)));
				$Direccion	     = mysqli_real_escape_string($con,(strip_tags($_POST["Direccion"],ENT_QUOTES)));
				$FNacimiento		 = mysqli_real_escape_string($con,(strip_tags($_POST["FNacimiento"],ENT_QUOTES)));
				
			

				$cek = mysqli_query($con, "SELECT * FROM tickers WHERE Id='$Id'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO tickers( Nombre, IdDocumento, NDocumento, Direccion, FNacimiento)
															VALUES('$Nombre', '$IdDocumento', '$NDocumento', '$Direccion', '$FNacimiento')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
				}
			}
			?>
			<div class="contenedor">
			<form  class="form-horizontal" action="" method="post">

				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input  type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de documento</label>
					<div class="col-sm-3">
						<select name="IdDocumento" class="form-control">
							<option value=""> ----- </option>
                           <option value="1">Registro Civil</option>
							<option value="2">Tarjeta de Identidad</option>
							
							 <option value="3">Cédula de Ciudadanía</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">N° de Documento</label>
					<div class="col-sm-4">
						<input type="number" name="NDocumento" class="form-control" placeholder="N° de Documento">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						<input type="text" name="Direccion" class="form-control" placeholder="Dirección"></input>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de Nacimiento</label>
					<div class="col-sm-3">
						<input type="date" name="FNacimiento" class="form-control" placeholder="00-00-0000" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>
