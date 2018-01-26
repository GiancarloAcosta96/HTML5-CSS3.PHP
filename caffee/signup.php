<?php session_start();

	if (isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		$errores = '';


		if (empty($username) or empty($email) or empty($telephone) or empty($password) or empty($password2)) {
			$errores .= '<li>Completa todos los campos</li>';
		}

		else{
			try {
				
				$conexion = new PDO('mysql:host=localhost; dbname=registro_usuarios', 'root', '');

			} catch (PDOException $e) {
				echo "Error: ". $e->getMessage();
			}


			$stmnt = $conexion->prepare('SELECT * FROM tb_usuarios WHERE username = :username LIMIT 1');
			$stmnt->execute(array(':username' => $username));

			$resultado = $stmnt->fetch();

			if ($resultado != false) {
				$errores .= '<li>El nombre de usuario ya existe</li>';
			}

			$password = hash('sha512', $password);
			$password2 = hash('sha512', $password2);

			if ($password != $password2) {
				$errores .= '<li>Las contraseñas no coinciden</li>';
			}


		}


			if ($errores == '') {
				$stmnt = $conexion->prepare('INSERT INTO tb_usuarios (id, username, email, telephone, password) VALUES 
					(null, :username, :email, :telephone, :password)');
				 $stmnt->execute(array(
				 	':username'=>$username, 
				 	':email' =>$email, 
				 	':telephone' => $telephone, 
				 	':password'=> $password));	

				 header('Location: login.php');
			}

	}

	require './views-eaa732349046d8416e00a9dec26eb7fd347590fbced3/registro.php';

 ?>