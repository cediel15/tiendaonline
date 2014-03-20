<?php include "php/cabecera.php" ?>

	<br> Por favor ingresa tus datos de usuario: <br><br>

	<form action = "php/logcliente.php" method = "POST">
		<input type = "text" name = "usuario" placeholder = "usuario">
		<input type = "text" name = "contrasena" placeholder = "clave">
		<input type = "submit">
	</form>

<?php include "php/piedepagina.php" ?>