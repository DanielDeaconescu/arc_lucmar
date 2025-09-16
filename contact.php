<?php include "./components/formModal.php" ?>

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
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <title>Arc Construct | Acasă</title>
</head>

<body>
    <?php include "./components/navbar.php" ?>

    <!-- Header -->
    <?php 
      $headerText = "Contact";
      include "./components/header.php"
    ?>

    <!-- De ce sa alegeti Arc Construct? -->
    <section id="details" class="details position-relative my-6 overflow-hidden">

        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="card-title mb-4 text-dark">Informații de contact</h2>
                            <p class="fs-5">Ai întrebări sau dorești o ofertă personalizată? Echipa noastră îți stă la
                                dispoziție
                                pentru a discuta despre proiectul tău și pentru a găsi soluțiile potrivite. Nu ezita să
                                ne contactezi!</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex">
                                    <a href="tel:+40741297459"
                                        class="text-decoration-none fs-4 text-dark d-flex align-items-center fw-bold contact-info-link gap-2">
                                        <i class="fa-solid fa-phone fa-2x"></i>
                                        0741297459
                                    </a>
                                </li>
                                <li class="list-group-item d-flex">
                                    <a href="mailto:contact@arclucmar.ro"
                                        class="text-decoration-none fs-4 text-dark d-flex align-items-center fw-bold contact-info-link gap-2">
                                        <i class="fa-solid fa-envelope fa-2x"></i>
                                        contact@arclucmar.ro
                                    </a>
                                </li>
                                <li class="list-group-item d-flex">

                                    <a href="https://maps.app.goo.gl/KZHq9m4qUC2WJ2Rq8"
                                        class="text-decoration-none fs-5 text-dark d-flex flex-column justify-content-center fw-bold contact-info-link gap-2"
                                        target="_blank">

                                        <p class="text-dark factory-address fs-6 mb-0">Adresa fabricii</p>
                                        <div class="d-flex justify-content-center gap-2">
                                            <i class="fa-solid fa-map-location-dot fa-2x"></i>
                                            Str. Colectiviștilor Nr. 17A Galați, România
                                        </div>

                                    </a>
                                </li>
                                <li class="list-group-item d-flex">
                                    <a href="" target="_blank"
                                        class="text-decoration-none fs-4 text-dark d-flex align-items-center fw-bold contact-info-link gap-2">
                                        <i class="fa-brands fa-square-facebook fa-2x"></i>
                                        Pagina de Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Google Map -->
                    <h5 class="text-dark">Harta Fabricii</h5>
                    <p class="fs-5">
                        Colaborăm cu Sigplast, producător local de tâmplărie PVC, pentru a vă asigura servicii de montaj
                        profesionist și produse de calitate superioară.
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.0609689625126!2d28.003555396789565!3d45.4484275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b6def27c7d78b5%3A0x3ad79942f085a8b3!2sALBARIM%20S.R.L.%20(SIGPlast)!5e0!3m2!1sro!2sro!4v1757656665705!5m2!1sro!2sro"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php include "./components/side-buttons.php" ?>
    <?php include "cookiesPopup.php" ?>

    <!-- TODO: Implement a Call To Action here -->
    <?php include "./components/call-to-action.php"; ?>

    <?php include "./components/footer.php" ?>

    <button id="to-top" class="to-top-btn">
        <img src="images/up-arrow.png" alt="" />
    </button>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>