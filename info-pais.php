<?php 
    session_start();

    require 'database.php';
    require 'database-paises.php';

    if(isset($_SESSION['user_id'])) {
        $records = $conexion->prepare('SELECT cod_user, user, password FROM users WHERE cod_user = :cod_user');
        $records->bindParam(':cod_user', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
             $user = $results;
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
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.progress.css">
    <link rel="shurtcut icon" href="assets/images/avatar.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        AOS.init();
    </script>
</head>
<body class="helvetica-normal bg-light">
    <div class="header-progress mb-5">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <?php 
        include ('header.php');
    ?>

    <?php  
        $codPais = $_GET['cod_pais'];
        $bandera = $_GET['bandera'];
        $cultura = $_GET['cultura'];
        $pais = $_GET['pais'];
        if($conexion=mysqli_connect($server, $username, $password, $database)){
            mysqli_query($conexion, "SET NAMES 'UTF8'");
            if(mysqli_select_db($conexion, $database)){
                $consulta="SELECT * FROM platos_tipicos WHERE cod_pais=$codPais;";
                $resultado=mysqli_query($conexion, $consulta);
                $consulta2="SELECT * FROM gastronomia WHERE cod_pais=$codPais;";
                $resultado2=mysqli_query($conexion, $consulta2);
                if(mysqli_errno($conexion)!=0){
                    echo "<p>Número de error: ".mysqli_errno($conexion)."</p>";
                    echo "<p>Mensaje de error: ".mysqli_error($conexion)."</p>";
                } else{
                }
                echo "<div class='container py-5'>";
                    echo "<div class='pt-5'></div>";
                    echo "<div class='pt-5'></div>";
                        echo "<section>";
                            echo "<div>";
                                echo "<img src='assets/images/$bandera' class='mt-2 mb-3 w-40 shadow rounded img-fluid'>";
                                echo "<h1 class='mayuscula my-3 fw-bolder'>$pais</h1>";
                                echo "<h4 class='mt-5 mb-3 fw-bolder'>Cultura</h4>";
                                echo "<p class='fs-5'>$cultura</p>";
                                while($dato=mysqli_fetch_array($resultado2)) {
                                echo "<h4 class='mt-5 mb-3 fw-bolder' data-aos='fade-right'>Gastronomía</h4>";
                                echo "<p class='fs-5' data-aos='fade-right'>$dato[descripcion]</p>";
                                }
                                echo "<h4 class='mt-5 mb-3 fw-bold fw-bolder' data-aos='fade-right'>Platos típicos</h4>";
                                while($dato=mysqli_fetch_array($resultado)){
                                    echo "<div class='card my-5 bg-light text-dark' data-aos='zoom-in'>";
                                            echo "<div class='row align-items-center my-3'>";
                                                echo "<div class='col-4'>";
                                                    echo "<img src='assets/images/$dato[plato_foto]' class=' ms-2 me-2 w-100 shadow rounded img-fluid'>";
                                                echo "</div>";
                                                echo "<div class='col-8'>";
                                                    echo "<h5 class='card-title ms-2 fw-bold text-dark-blue text-center fs-4'>$dato[plato]</h5>";
                                                    echo "<p class='me-2 mt-3 fs-5'>$dato[descripcion]</p>";
                                                echo "</div>";
                                            echo "</div>";
                                    echo "</div>";
                                }
                            echo "</div>";
                        echo "</section>";
                    echo "</div>";
                echo "</div>";
            }
        mysqli_close($conexion);
        echo "<footer class='container'>";
            echo "<hr>";
            echo "<p class='float-end'>";
                echo "<a href='#' class='link-secondary'>Volver al inicio</a>";
            echo "</p>";
            echo "<p>";
                echo "<span>© 2022 ViveMundo, Inc.</span>";
            echo "</p>";
        echo "</footer>"; 
        }   
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/Jquery3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/navbar.progress.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>