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
	<title>Cambiar foto de perfil</title>
</head>
<body>
	<?php session_start(); $foto = $_SESSION['id'];
	$id = $_SESSION['id'];
	include 'cone.php';
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
	$valores = mysqli_fetch_array($consulta);
	$nombre = $valores['nombre'];
	$email = $valores['email'];
	$foto = $valores['foto'] ?>
	<h1>Cambia tu foto de perfil</h1>
	<img src="<?php ; echo $foto; ?>">
	<form action="foto.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email" value="<?php echo $email; ?>" style="display: none;">
		Ingresa tu nuerva foto de perfil
		<input type="file" name="nfoto">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
</body>
</html>