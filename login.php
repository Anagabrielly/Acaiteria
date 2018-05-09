<?php
	if (isset($_POST['enviar'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->logar($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Acaíteria</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.1/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
	<form method="POST">
		<input type="text" name="login">
		<input type="password" name="senha">
		<input type="submit" name="enviar">
	</form>
</body>
</html>