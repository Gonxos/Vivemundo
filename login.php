<?php 

	session_start();

	if (isset($_SESSION['user_id'])) {
		header('Location: home.php');
	}

	require 'database.php';

	if (!empty($_POST['user']) && !empty($_POST['password'])) {
		$records = $conexion->prepare('SELECT cod_user, user, password FROM users WHERE user=:user');
		$records->bindParam(':user', $_POST['user']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			$_SESSION['user_id'] = $results['cod_user'];
			header('Location: bienvenida.html');
		} else {
			$message = 'El usuario o la contraseña son incorrectos.';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vive Mundo - Vive la vida en los mejores sitios del mundo.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/log-sign.css">
    <link rel="shurtcut icon" href="assets/images/avatar.png">
</head>
<body class="helvetica-normal" style="background-image: url(assets/images/fondo-signup.png); background-size:cover;">
	<nav class="navbar header-log shadow-sm">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-sm-9">
                            <a href="home.php">
                                <img src="assets/images/Logo.png" class="img-fluid w-40">
                            </a>
                        </div>
                        <div class="col-xl-7 col-sm-4 d-flex justify-content-end d-xs-none">
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown ms-1 d-xs-none">
                                    <a class="nav-link dropdown-toggle-split text-dark-blue" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PÁGINAS<i class="bi bi-chevron-down ms-1"></i></a>
                                    <ul class="dropdown-menu dropdown-content">
                                        <li><a class="dropdown-item" href="pais.php">Paises</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="home.php"><i class="bi bi-house-fill"></i> Inicio</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown ms-1">
                                    <a class="nav-link text-dark-blue" href="contactar.php">CONTÁCTENOS</a>
                                </li>
                                <span class="fs-4 ms-1 text-muted">|</span>
                                <div class="d-flex">
                                    <div class="col-xl-6">
                                        <a href="signup.php" class="btn btn-login shadow-sm ms-3">CREAR SESIÓN</a>
                                    </div>
                                    <div class="col-xl-7">
                                        <a href="login.php" class="btn btn-signup shadow-sm ms-2">
                                            <i class="bi bi-person-circle me-1"></i>INICIAR SESIÓN
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
	
	<?php if (!empty($message)): ?>
		<p class="text-center user"><?= $message ?></p>
	<?php endif; ?>

	<div class="container d-flex justify-content-center mt-4 fondo-form">
		<div class="form shadow row m-3 rounded-sm vh-80">
			<div class="pte-izda col-6 d-flex align-items-center h-100 d-xs-none">
				<img src="assets/images/avatar.png">
			</div>
			<div class="pte-dcha col-6 d-flex align-items-center text-center h-100">
				<form action="login.php" method="post">
					<input type="text" name="user" placeholder="Introduce tu nombre de usuario">
					<input type="password" name="password" placeholder="Introduce tu contraseña">
					<input type="submit" class="enviar rounded-sm" value="INICIAR SESIÓN">
				</form>
			</div>
		</div>
	</div>

</body>
</html>