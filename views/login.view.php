<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="fonts/font-Raleway.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar Sesión</title>

</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border">
		
		<form action=
		"<?php
           echo htmlspecialchars($_SERVER['PHP_SELF']);
		?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>
		
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
				
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<?php if (!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>

			<?php endif; ?>

		</form>

			<p class="texto-registrate">
				¿ Aun no tienes cuenta?
				<a href="registrate.php">Registrate</a>
			</p>
			
	</div>
	
</body>
</html>