<!DOCTYPE html>
<html>
<head>
	<title>Caffee - Crea una cuenta</title>
	<LINK REL=StyleSheet HREF="./styles-css-eaa732349046d8416e00a9dec26eb7fd347590fbced3/styles-registro-eaa732349046d8416e00a9dec26eb7fd347590fbced3.css" TYPE="text/css" MEDIA=screen>

	<meta charset="utf-8">
	<link rel="stylesheet" href="./material-eaa732349046d8416e00a9dec26eb7fd347590fbced3/material.min.css">
	<link rel="stylesheet" href="./material-eaa732349046d8416e00a9dec26eb7fd347590fbced3/material.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="./js-eaa732349046d8416e00a9dec26eb7fd347590fbced3/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:500">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />

	<script type="text/javascript" src="./js-eaa732349046d8416e00a9dec26eb7fd347590fbced3/java.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/icons/favicon.ico" />

</head>


<body>

	<header>
		
		<div class="wrapper">
		<nav>
			<div class="logo"><a href="./login.php"><img class="logoG" src="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/logo.png" width="64" height="64"></a></div>
			<div class="titulo">CREA UNA CUENTA</div>

			<ul>
				<li class="pregunta">¿Ya tienes cuenta?</li>
				<li><a href="./login.php"><button id="btnIngresar" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Ingresa</button></a></li>
			</ul>
		</nav>
		</div>

	</header>
	

		<div class="wrap">

			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login" class="formulario">

							

							<lable></lable>
        					<input type="text" class="username" name="username" 
               				placeholder="Nombre de usuario" required autofocus=""/>
        					<lable></lable>
        					<input type="email" class="email" name="email" 
               				placeholder="Correo" required/>
               				<lable></lable>
        					<input type="number" class="telephone" name="telephone" 
               				placeholder="Número de celular" required/>
        					<lable></lable>
        					<input type="password" class="password" name="password" 
               				placeholder="Contraseña" required/>
               				<lable></lable>
        					<input type="password" class="password2" name="password2" 
               				placeholder="Repetir contraseña" required/>


               				<div class="checkbox" style="margin-top: -20px">
							   <input type="checkbox" name="checkbox" id="checkbox1">
							   <label class="checkbox1" for="checkbox1">Acepto los <a class="terminos" target="_blank" href="#">términos y condiciones</a></label>

							   <?php if (!empty($errores)):?>
							   	<br>
							   <div class="error">
							   	
							   	<ul style="list-style: none; color:#ff0000">
							   		
							   		<?php echo $errores; ?>

							   	</ul>

							   </div>


							<?php endif;?>

							   <input type="submit" onclick="login.submit()" 
               						class="form-btn"
               						value="Regístrate" />

							</div>

							


			</form>

		</div>



</body>
</html>