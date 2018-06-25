<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuarios</title>
</head>
<body>
	<div class="page-wrapper">
		<?php echo form_open('usuarios/registrar'); ?>
			<label for="">Usuarios</label>
			<input type="text">
			<input type="submit" value="registrar">
		<?php echo form_close(); ?>
	</div>	
</body>
</html>		
