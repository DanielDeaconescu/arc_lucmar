<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Contactați firma de termopane din Galați: ferestre și uși PVC și aluminiu Sigplast, montaj profesioonist și consultanță personalizată.">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Turnstile script -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="../css/styles.css?v=<?= filemtime('../css/styles.css') ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <title>Contact Termopane PVC și Aluminiu | Arc Lucmar</title>
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <?php include "../components/formModal.php" ?>

    <!-- Header -->
    <?php 
      
      include "../components/header.php"
    ?>

    <!-- Informatii de contact -->
    <section id="details" class="details position-relative overflow-hidden py-5 py-md-5 py-lg-6">

        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="card-title mb-4 text-dark">Informații de contact</h2>
                            <p class="fs-5 text-justify">
                                Ai întrebări sau vrei o ofertă personalizată pentru ferestre și uși din PVC și aluminiu?
                                Echipa Arc Lucmar este aici să te ajute să găsești soluțiile perfecte pentru locuința
                                ta. Folosește datele noastre de contact de mai jos și spune-ne despre proiectul tău!
                            </p>
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
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <!-- Google Map -->
                    <h5 class="text-dark">Harta Fabricii</h5>
                    <p class="fs-5 text-justify">
                        Colaborăm îndeaproape cu Sigplast, producător local de profile PVC, pentru a-ți oferi ferestre
                        și uși de calitate superioară la prețuri accesibile. La Arc Lucmar, ne asigurăm că fiecare
                        proiect beneficiază de piese de tâmplărie de calitate și montaj profesionist.
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.0609689625126!2d28.003555396789565!3d45.4484275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b6def27c7d78b5%3A0x3ad79942f085a8b3!2sALBARIM%20S.R.L.%20(SIGPlast)!5e0!3m2!1sro!2sro!4v1757656665705!5m2!1sro!2sro"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php include "../components/side-buttons.php" ?>
    <?php include "../components/cookiesPopup.php" ?>

    <!-- TODO: Implement a Call To Action here -->
    <?php include "../components/call-to-action.php"; ?>

    <?php include "../components/footer.php" ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js?v=<?= filemtime('../js/script.js') ?>"></script>
</body>

</html>