<?php session_start();

	if (isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	$errores = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512', $password);

	

		try {
			$conexion = new PDO('mysql:host=localhost; dbname=registro_usuarios', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();;
		}

		$stmnt = $conexion->prepare('SELECT * FROM tb_usuarios WHERE username = :username and password = :password');
		$stmnt -> execute(array(
			':username' => $username, 
			':password' => $password
		));

		$resultado = $stmnt->fetch();

		if ($resultado == false) {
			$_SESSION['usuario'] = $username;
			header('Location: index.php');
		}else{
			$errores .= '<li>Datos incorrectos</li>';
		}

		}

	require 'views-eaa732349046d8416e00a9dec26eb7fd347590fbced3/index.php';

 ?>