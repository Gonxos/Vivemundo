<?php 
    session_start();

    require 'database.php';

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

<body class="helvetica-normal">
    <div class="header-progress">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <?php 
        include ('header.php');
    ?>


    <section>
        <video autoplay muted loop class="videosection ratio mb-5">
            <source src="assets/video/header1.mp4" type="video/mp4">
        </video>
        <div class="container-fluid">
            <div class="container text-center">
                <div class="pt-5 position-absolute top-50 start-50 translate-middle">
                    <h1 class="display-5 text-white mt-3 pt-4 px-5 d-xs-none">
                        VIAJA CON NOSOTROS
                    </h1>
                    <div class="d-xl-block d-xs-none">
                        <hr class="hr-blue mt-4">
                        <p class="text-grey mt-4 mx-3">
                            RECORRE EL <span class="text-light-blue">MUNDO</span> CON NOSOTROS, EXPLORE LOS SITIOS
                            MAS CURIOSOS DEL MUNDO, SIEMPRE CON NUESTRO ASESORAMIENTO Y NUESTROS <span class="text-light-blue">MAS DE 40 AÑOS DE EXPERIENCIA</span> EN EL SECTOR, DESCUBRE DISTINTAS AGENCIAS, PARA PODER IRTE DE VIAJE CON LA REGLA DE LAS 3 B, SITIOS <span class="text-light-blue">BUENOS</span>, <span class="text-light-blue">BONITOS</span>, Y <span class="text-light-blue">BARATOS</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row py-5 justify-content-center mt-5">
            <div class="col-4 card border-0 bg-transparent text-center" style="width: 20rem;" data-aos="fade-down">
                <img class="card-img-top w-40 mx-auto" src="assets/images/logo-maleta.png">
                <div class="card-body">
                    <h5 class="card-title fw-bold">IDEAS</h5>
                    <p class="card-text">
                        ¿Quieres regalar un viaje pero no sabes a donde? Nosotros tenemos las mejores ideas
                        de viaje para tí.
                    </p>
                </div>
            </div>
            <div class="col-4 card border-0 bg-transparent text-center mx-5" style="width: 20rem;" data-aos="fade-down">
                <img class="card-img-top w-40 mx-auto" src="assets/images/logo-avion.png">
                <div class="card-body">
                    <h5 class="card-title fw-bold">VUELOS</h5>
                    <p class="card-text">
                        Volar siempre fué caro, gracias a los comparadores que te aconsejamos, encontrarás vuelos al mejor precio.
                    </p>
                </div>
            </div>
            <div class="col-4 card border-0 bg-transparent text-center" style="width: 20rem;"  data-aos="fade-down">
                <img class="card-img-top w-40 mx-auto" src="assets/images/logo-hotel.png">
                <div class="card-body">
                    <h5 class="card-title fw-bold">HOSPEDAJE</h5>
                    <p class="card-text">
                        ¿No sabes donde espedarte? Nosotros te aconsejamos los hoteles al mejor precio.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/gastronomia.jpg" class="d-block w-100" alt="..." height="502px">
                    <div class="carousel-caption text-start mb-5">
                        <h1>Gastronomía</h1>
                        <p class="fs-5 text">Disfruta de la mejor comida en los diferentes paises del mundo</p>
                        <a href="pais.php" class="btn-blue btn-lg mt-2" type="submit">  Ver más  </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cultura.jpg" class="d-block w-100" alt="..." height="502px">
                    <div class="carousel-caption d-none d-md-block mb-5">
                        <h1>Cultura</h1>
                        <p class="fs-5 text">Descubre la cultura de los distintos paises del mundo</p>
                        <a href="pais.php" class="btn-blue btn-lg mt-2" type="submit"> Ver más </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/actividades.jpg" class="d-block w-100" alt="..." height="502px">
                    <div class="carousel-caption text-end mb-5">
                        <h1>Actividades</h1>
                        <p class="fs-5 text">Realiza diversas actividades alrededor del mundo</p>
                        <a href="pais.php" class="btn-blue btn-lg mt-2" type="submit"> Ver más </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-5 justify-content-center">
                <div class="card col-4" data-aos="zoom-in" style="width: 20rem;">
                  <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-tag-fill"></i></h5>
                        <span class="card-text fw-bold fs-5 mb-5">Las mejores ofertas</span>
                        <p class="card-text">
                            Encuentra las mejores ofertas disponibles utilizando las distintas paginas que te aconsejamos.
                        </p>
                  </div>
                </div>
                <div class="card col-4 mx-5" data-aos="zoom-in" style="width: 20rem;">
                  <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-check-circle"></i></h5>
                        <span class="card-text fw-bold fs-5 mb-5">Gasta sin preocupaciones</span>
                        <p class="card-text">
                            Las paginas que te aconsejamos son completamente fiables y verificadas por TrustPilot.
                        </p>
                  </div>
                </div>
                <div class="card col-4" data-aos="zoom-in" style="width: 20rem;">
                  <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-award-fill"></i></i></h5>
                        <span class="card-text fw-bold fs-5 mb-5">De confianza</span>
                        <p class="card-text">
                            Reserva sin cargos adicionales, sin cargos ocultos, confía en nosotros y no te fallaremos.
                        </p>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-onduled p-5">
        <div class="container">
            <p class="pt-5 fs-4 text-dark-blue">
                Comparadores
            </p>
            <div class="owl-navigation">
                <span class="owl-nav-prev position-left d-xl-block d-button-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </span>
                <span class="owl-nav-next position-right d-xl-block d-button-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </span>
            </div>
            <div class="owl-carousel owl-theme blog-post pt-2">
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.trivago.es/" target="_blank">
                        <img src="assets/images/trivago.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.trivago.es/" target="_blank">
                            <h6>Trivago: El mismo hotel, dos precios distintos</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(4.0)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/trivago.com" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.edreams.es/" target="_blank">
                        <img src="assets/images/edreams.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.edreams.es/" target="_blank">
                            <h6>eDreams: Porque viajar es una experiencia única</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(2.5)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/www.edreams.es" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.booking.com/" target="_blank">
                        <img src="assets/images/booking.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.booking.com/" target="_blank">
                            <h6>Booking: Hacer que descubrir el mundo sea más fácil</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(1.5)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/www.booking.com" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.kayak.es/" target="_blank">
                        <img src="assets/images/kayak.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.kayak.es/" target="_blank">
                            <h6>Kayak: Busca en cientos de webs de viajes en segundos </h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(2.5)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/kayak.es" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.skyscanner.es/" target="_blank">
                        <img src="assets/images/skyscanner.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.skyscanner.es/" target="_blank">
                            <h6>Skyscanner: Tu viaje comienza aquí</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(3.0)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/skyscanner.es" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.logitravel.com/" target="_blank">
                        <img src="assets/images/logitravel.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.logitravel.com/" target="_blank">
                            <h6>Logitravel: ¿Pensando cuál será tu próximo viaje?</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(4.0)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/www.logitravel.com" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-content card shadow mb-5" style="width: 17rem;">
                    <a href="https://www.omio.es/" target="_blank">
                        <img src="assets/images/omio.png" class="card-img-top rounded-top">
                    </a>
                    <div class="blog-title card-body">
                        <a class="a-custom" href="https://www.omio.es/" target="_blank">
                            <h6>Omio: Trenes, autobuses y vuelos en una sola búsqueda.</h6>
                        </a>
                        <div class="mt-3 fs-7 star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-secondary fs-6 ms-1">(3.0)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="row my-2">
                            <a href="https://es.trustpilot.com/review/omio.com" class="a-custom d-flex align-items-center" target="_blank">
                                <i class="bi bi-star-fill star-green fs-7"></i>
                                <span class="ms-1">Trustpilot</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container pt-3">
        <p class="float-end">
            <a href="#" class="link-secondary">Volver al inicio</a>
        </p>
        <p>
            <span class="text-secondary">© 2022 ViveMundo, Inc.</span>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/Jquery3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/navbar.progress.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>