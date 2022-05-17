<?php  
	require 'database.php';

	$message = '';

	if (!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
		if ($_POST['password'] == $_POST['password2']) {
			$sql = "INSERT INTO users (user, password) VALUES (:user, :password)";
			$stmt = $conexion->prepare($sql);
			$stmt->bindParam(':user',$_POST['user']);
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$password2 = $_POST['password2'];
			$stmt->bindParam(':password', $password);

			if ($stmt->execute()) {
				$message = 'Usuario creado correctamente.';
				echo "
					<script>
			   			setTimeout(function() {
			        		window.location.replace('home.php');
			    		}, 4000);
		    		</script>
    		        ";
			} else {
				$message = 'Usuario no creado correctamente.';
			}
		}
		else {
			$message = 'Las contraseñas no coinciden';
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
<body class="helvetica-normal" style="background-image: url(assets/images/fondo-signup.png); background-size:cover;" >
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
                    <div class="col-xl-7 col-sm-3 d-flex justify-content-end d-xl-none d-lg-inherit">
                        <i class="bi bi-list fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <a href="gastronomia.php" class="a-custom row my-2 ms-3"><i class="bi bi-house-fill"></i> Inicio</a>
                                <a href="signup.php" class="btn btn-login shadow-sm ms-3 mt-4">CREAR SESIÓN</a>
                                <a href="login.php" class="btn btn-signup shadow-sm ms-2 mt-4">
                                	<i class="bi bi-person-circle me-1"></i>INICIAR SESIÓN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	
	<?php if (!empty($message)): ?>
		<p class="text-center user"><?= $message ?></p>
	<?php endif; ?>
	<div class="container d-flex justify-content-center mt-4">
		<div class="form shadow row align-items-center m-3 rounded-sm vh-80">
			<div class="pte-izda col-6 d-flex align-items-center h-100">
				<img src="assets/images/avatar.png">
			</div>
			<div class="pte-dcha col-6 d-flex align-items-center text-center h-100">
				<form action="signup.php" method="post">
					<input type="text" class="rounded-lg" name="user" placeholder="Usuario" maxlength="9">
					<input type="password" class="rounded-sm" name="password" placeholder="Contraseña">
					<input type="password" class="rounded-sm" name="password2" placeholder="Confirmar contraseña">
					<input type="submit" class="enviar rounded-sm" value="CREAR SESIÓN">
				</form>
			</div>
		</div>
	</div>
</body>
</html>