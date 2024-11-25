<?php
session_start();
if(empty($_SESSION["id"])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
			<?php
			echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
			?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="inicio.php">Inicio</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="constancias.php">Constancias</a>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Educación
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Becas</a>
						<a class="dropdown-item" href="#">Cursos</a>
						<a class="dropdown-item" href="servicios.html">Concursos</a>
					</div>
				</li>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_sesion.php">Salir</a>
			</div>
			<div class="text-center justify-content-center">
				<a class="btn btn-outline-primary" target="_blank" href="https://www.instagram.com/tucvescolar_mx/">Instagram</a>
				<a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
			</div>
		</div>

	</nav>
    <div class="container">
        <h1>Subir Constancias</h1>
        <form action="controlador/upload_controller.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Correo institucional" required>
            <br>
            <input type="file" name="pdf_file" required>
            <br>
            <button type="submit">Subir</button>
        </form>
    </div>
</body>

</html>