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
        
        if($conexion=mysqli_connect($server, $username, $password, $database)){
            mysqli_query($conexion, "SET NAMES 'UTF8'");
            if(mysqli_select_db($conexion, $database)){
                $consulta="SELECT * FROM pais;";
                $resultado=mysqli_query($conexion, $consulta);
                if(mysqli_errno($conexion)!=0){
                    echo "<p>Número de error: ".mysqli_errno($conexion)."</p>";
                    echo "<p>Mensaje de error: ".mysqli_error($conexion)."</p>";
                } else{
                }
                echo "<div class='container py-5'>";
                    echo "<div class='pt-5'></div>";
                    echo "<div class='pt-5'></div>";
                    echo "<div class='row py-5'>";
                        while($dato=mysqli_fetch_array($resultado)){
                            echo "<section class='col-4'>";
                                echo "<div class='bandera' data-aos='zoom-in'>";
                                    echo "<img src='assets/images/$dato[bandera]' class='mt-2 mb-3 w-100 shadow rounded img-fluid img-pais'>";
                                    echo "<div class='text-hover text-center w-100 h-100'>";
                                        echo "<div class='mb-5'></div>";
                                        echo "<a href='info-pais.php?cod_pais=$dato[cod_pais]&bandera=$dato[bandera]&pais=$dato[pais]&cultura=$dato[cultura]' class='btn btn-signup p-1 mt-5 text-center fs-6 w-80 px-1' >INFORMACION</a>";
                                        echo "<a href='actividades.php?cod_pais=$dato[cod_pais]' class='btn btn-signup p-1 mt-2 text-center fs-6 w-80 px-1'>ACTIVIDADES</a>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</section>";
                        }
                    echo "</div>";
                echo "</div>";
            }
        mysqli_close($conexion);
        }

        echo "<footer class='container'>";
            echo "<hr>";
            echo "<p class='float-end'>";
                echo "<a href='#' class='link-secondary'>Volver al inicio</a>";
            echo "</p>";
            echo "<p>";
                echo "<span class='text-secondary'>© 2022 ViveMundo, Inc.</span>";
            echo "</p>";
        echo "</footer>";   
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/Jquery3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/navbar.progress.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>