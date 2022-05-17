<?php if (!empty($user)): ?>
        <nav class="navbar header shadow-sm">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 d-lg-8 col-sm-9">
                            <a href="home.php">
                                <img src="assets/images/Logo.png" class="img-fluid w-40">
                            </a>
                        </div>
                        <div class="col-7 d-flex justify-content-end d-xs-none">
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
                                    <div class="col-6">
                                        <a href="#" class="nav-link text-dark-blue ms-3"><?= $user['user'] ?></a>
                                    </div>
                                    <div class="col-7">
                                        <a href="logout.php" class="btn btn-login-off shadow-sm ms-2">
                                            SALIR
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="col-7 d-flex justify-content-end d-xl-none d-lg-inherit">
                            <i class="bi bi-list fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <a href="pais.php" class="a-custom row my-2 ms-3">Paises</a>
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
    <?php else: ?>
        <nav class="navbar header shadow-sm">
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
                                    <a href="pais.php" class="a-custom row my-2 ms-3">Paises</a>
                                    <a href="contactar.php" class="a-custom row my-2 ms-3">CONTACTENOS</a>
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
    <?php endif; ?>