<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Turnstile script -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Lightbox 2 -->
    <link href="lightbox/dist/css/lightbox.min.css" rel="stylesheet" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <title>Arc Lucmar | Acasă</title>
</head>

<body>
    <?php include "./components/navbar.php" ?>
    <?php include "./components/formModal.php" ?>

    <!-- Header -->
    <?php 
    $headerText = "Ferestre și uși din PVC și Aluminiu în Galați";
    include "./components/header.php" 
    ?>

    <!-- Partener Sigplast -->
    <section class="partener-sigplast py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-dark d-flex align-items-center gap-2">
                        <i class="fa-solid fa-award fa-award-custom fa-2x"></i>
                        Partener Sigplast România
                    </h4>
                    <h5 class="text-dark d-flex align-items-center gap-3">
                        <div class="produced-100-romania">
                            <i class="fa-solid fa-trophy fa-trophy-custom"></i>
                            Profil produs 100% în România
                        </div>
                        <div class="factory-prices">
                            <i class="fa-solid fa-sack-dollar fa-sack-dollar-custom"></i>
                            Prețuri de fabrică
                        </div>
                    </h5>
                    <!-- <h6 class="text-dark d-flex align-items-center gap-2">

                    </h6> -->
                    <p class="fs-5">Pentru a vă oferi tâmplărie PVC de înaltă calitate, colaborăm îndeaproape cu
                        funizorul
                        local
                        Sigplast.</p>
                    <p class="fs-5">Profilul PVC Sigplast este produs integral la fabria Sigplast, în Galați, România.
                    </p>
                    <p>
                        <small>
                            Pentru mai multe detalii, puteți vizita website-ul Sigplast România aici: <a
                                href="https://sigplast.ro/" target="_blank">Website Sigplast</a>
                        </small>
                    </p>
                </div>

                <div class="col-md-3 d-flex align-items-center">
                    <a class="sigplast-logo-link" href="https://sigplast.ro/" target="_blank">
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <img class="img-fluid sigplast-partner-img" src="./images/logo-sigplast.png" alt="">
                            <h6 class="text-dark">Fabrică profil PVC Galați, România</h6>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- De ce sa alegeti Arc Construct? -->
    <section id="details" class="details position-relative py-4 py-md-6 overflow-hidden">
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container d-flex justify-content-center">
                        <img src="images/image-factory.jpg" alt="" class="img-fluid img-factory" />
                    </div>
                </div>
                <div class="col-lg-6 why-choose-us-list">
                    <div class="mt-4">
                        <h3 class="mb-4 text-dark">De ce să alegeți termopanele Arc Lucmar?</h3>
                        <ul class="text-dark list-unstyled">
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-award"></i>
                                <strong>
                                    Peste 19 ani de experiență în domeniu
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-handshake"></i>
                                <strong>
                                    Partener Sigplast și colaborare cu alți furnizori de încredere pentru a garanta
                                    calitatea profilelor
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-clock"></i>
                                <strong>
                                    Soluții personalizate: fiecare proiect este adaptat după
                                    nevoile și bugetul dumneavoastră.
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <strong>
                                    Montaj impecabil
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-clock"></i>
                                <strong>
                                    Termene de execuție rapide
                                </strong>
                            </li>
                        </ul>
                        <button data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-lg btn-primary">Cere
                            ofertă</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technical-details" class="profile-technical-details">
        <div class="container">
            <div class="row">
                <div class="text-section mb-5">
                    <h2 class="text-dark">Detalii tehnice PROFIL PVC SIGPLAST</h2>
                    <p class="fs-5">
                        Profilul PVC Sigplast, produs 100% în România, vine în două variante (60 mm și 70 mm) și mai jos
                        găsiți
                        detaliile tehnice ale acestora:
                    </p>
                </div>

                <div class="col-md-6">
                    <h3 class="text-dark text-center mb-4">Profil PVC Sigplst 60</h3>
                    <table class="table table-hover table-bordered fs-4">
                        <thead>
                            <tr>
                                <th scope="col">Specificație tehnică</th>
                                <th scope="col">Parametru</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Adâncime de construcție</td>
                                <td>60 mm</td>
                            </tr>
                            <tr>
                                <td>Număr de camere</td>
                                <td>4 camere</td>
                            </tr>
                            <tr>
                                <td>Feronerie</td>
                                <td>13 mm</td>
                            </tr>
                            <tr>
                                <td>Pachet sticlă</td>
                                <td>24 - 30 mm</td>
                            </tr>
                            <tr>
                                <td>Număr garnituri EPDM</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Culoare garnituri</td>
                                <td>gri + negru</td>
                            </tr>
                            <tr>
                                <td>Coeficient transfer termic</td>
                                <td>1.9 W/m<sup>2</sup>k</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3 class="text-dark text-center mb-4">Profil PVC Sigplst 70</h3>
                    <table class="table table-hover table-bordered fs-4">
                        <thead>
                            <tr>
                                <th scope="col">Specificație tehnică</th>
                                <th scope="col">Parametru</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Adâncime de construcție</td>
                                <td>70 mm</td>
                            </tr>
                            <tr>
                                <td>Număr de camere</td>
                                <td>6 camere</td>
                            </tr>
                            <tr>
                                <td>Feronerie</td>
                                <td>13 mm</td>
                            </tr>
                            <tr>
                                <td>Pachet sticlă</td>
                                <td>24 - 36 mm</td>
                            </tr>
                            <tr>
                                <td>Număr garnituri EPDM</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Culoare garnituri</td>
                                <td>gri + negru</td>
                            </tr>
                            <tr>
                                <td>Coeficient transfer termic</td>
                                <td>1.78 W/m<sup>2</sup>k</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row">
                <h3 class="text-dark mt-md-4 mb-md-5">Vedere secțiune profiluri</h3>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <a class="link-section-60" href="./images/detail-section-60.png" data-lightbox="sigplst60">
                            <h5 class="text-dark">Secțiune profil Sigplast 60 mm</h5>
                            <img class="img-fluid borderd-img" src="./images/sigplast60_section_view.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center mt-4 mt-md-0">
                    <div class="d-flex flex-column align-items-center">
                        <a class="link-section-70" href="./images/detail-section-70.png" data-lightbox="sigplst70">
                            <h5 class="text-dark">Secțiune profil Sigplst 70 mm</h5>
                            <img class="img-fluid borderd-img" src="./images/sigplast70_section_view.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Cookies -->
    <?php include "./components/cookiesPopup.php" ?>

    <!-- Side-buttons -->
    <?php include "./components/side-buttons.php" ?>

    <!-- TODO: Implement a Call To Action here -->
    <?php include "./components/call-to-action.php" ?>

    <?php include "./components/footer.php" ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox JS + jQuery -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>