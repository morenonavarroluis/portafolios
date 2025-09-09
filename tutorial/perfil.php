<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
</head>
<body>
	<?php include 'cone.php';
	session_start();
	if (isset($_SESSION['id'])) {
		
	}else{
		?>
		<script type="text/javascript">
			window.location = "./";
		</script>
		<?php 
	}
	$id = $_SESSION['id'];
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'];
	 ?>

	 <div class="container">
	 	<div class="row">
	 		<div class="col-mg-4"></div>
	 		<div class="col-mg-4">
	 			<h1><?php echo $nombre; ?></h1>
	 			<h5><?php echo $email; ?></h5>
	 			<img src="<?php echo $foto; ?>" width="200px">
	 			<a href="cambiarfoto.php">Cambiar foto de perfil</a>
	 		</div>

	 	</div>
	 </div>
</body>
</html>