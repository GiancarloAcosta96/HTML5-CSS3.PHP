<?php session_start();

if (isset($_SESSION['usuario'])) {
		require './views-eaa732349046d8416e00a9dec26eb7fd347590fbced3/contenido.view.php';
	}

else {
	header ('Location: login.php');
}

 ?>