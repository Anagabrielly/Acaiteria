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
	<meta name="description">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-image: url("backgroud.jpg");
			background-size: cover;
			background-attachment: fixed;
		}
		.login-page{
			border-radius: 27px 27px 27px 27px;
			-moz-border-radius: 27px 27px 27px 27px;
			-webkit-border-radius: 27px 27px 27px 27px;
			border: 0px solid #000000;
			position:relative;
			background-color: rgba(107,71,126,0.8);
			float:center;
			margin-left:200px;
			margin-right:200px;
			margin-top:150px;
			-webkit-box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
			-moz-box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
			box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
		}
		
		.susa
		{
			border-radius: 27px 27px 27px 27px;
			-moz-border-radius: 27px 27px 27px 27px;
			-webkit-border-radius: 27px 27px 27px 27px;
			border: 0px solid #000000;
			-webkit-box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
			-moz-box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
			box-shadow: 1px 0px 127px 19px rgba(107,71,126,1);
		}
		h1{
			font-color:White;
			border: 1px solid #fffffff;
			text-align: center;
		}
		small{
			font-color:black;
		}



	</style>

</head>
<body>
	<div class="login-page">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-6">
				<h1>...Açai Por Aqui...</h1>
			
				<a href="test.html" class="btn btn-lg btn-default btn-block">Login</a>
				<button type="button" class="btn btn-lg btn-default btn-block" data-toggle="modal" data-target="#myModal">Criar conta</button>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog teste">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="" action="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group"> 
									
								</div>
							</div>
						</div>
						
						
						
						
						
					 <button type=submit class="btn btn-lg btn-default btn-block"></button> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>