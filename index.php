<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Termopane în Galați cu ferestre și uși PVC și aluminiu Sigplast. Experiență de peste 19 ani și servicii de montaj profesionist.">
    <!-- Turnstile script -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Lightbox 2 -->
    <link href="lightbox/dist/css/lightbox.min.css" rel="stylesheet" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/styles.css?v=<?= filemtime('css/styles.css') ?>" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <title>Termopane PVC și Aluminiu în Galați | Arc Lucmar</title>

    <!-- LocalBusiness schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Arc Lucmar",
        "image": "https://tamplariearcus.ro/logo.png",
        "url": "https://tamplariearcus.ro",
        "telephone": "+40741297459",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Str. Principala 32 CORP C6",
            "addressLocality": "Galați",
            "postalCode": "827125",
            "addressCountry": "RO"
        },
        "areaServed": ["Costi", "Galați", "Cișmele", "Smârdan", "Vânători"],
        "description": "Furnizare și montare tâmplărie PVC și aluminiu în Galați și împrejurimi."
    }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17545117486">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-17545117486');
    </script>

</head>

<body>
    <?php include "./components/navbar.php" ?>
    <?php include "./components/formModal.php" ?>

    <!-- Header -->
    <?php 
    
    include "./components/header.php" 
    ?>

    <?php include './components/partner-sigplast.php' ?>

    <!-- De ce sa alegeti Arc Lucmar? -->
    <section id="details" class="details position-relative py-4 py-md-4 py-lg-6 overflow-hidden">
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container d-flex justify-content-center">
                        <img src="images/image-factory.webp" alt="" class="img-fluid img-factory" />
                    </div>
                </div>
                <div class="col-lg-6 why-choose-us-list">
                    <div class="mt-4">
                        <h3 class="mb-4 text-dark">De ce să alegeți termopanele Arc Lucmar?</h3>
                        <ul class="text-dark list-unstyled">
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-award"></i>
                                <strong>
                                    Experiență de peste 19 ani în montajul de ferestre și uși din PVC și aluminiu
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-handshake"></i>
                                <strong>
                                    Partener Sigplast și colaborare cu furnizori de încredere, pentru profile 100%
                                    românești și cu un foarte bun raport calitate-preț
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-clock"></i>
                                <strong>
                                    Soluții personalizate adaptate nevoilor și bugetului fiecărui client
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <strong>
                                    Montaj profesionist și realizat cu atenție la detalii, pentru rezultate durabile și
                                    aspect impecabil
                                </strong>
                            </li>
                            <li class="list-element-custom mb-2">
                                <i class="fa-solid fa-clock"></i>
                                <strong>
                                    Termene de execuție rapide, pentru ca proiectul tău să fie finalizat fără întârzieri
                                </strong>
                            </li>
                        </ul>
                        <button data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-lg btn-primary">Cere
                            ofertă</button>
                        <div>
                            <small class="fst-italic">Completarea formularului dureză doar 1 minut.</small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/profile-tech-details.php" ?>

    <?php include "./components/factory-images.php" ?>


    <!-- Cookies -->
    <?php include "./components/cookiesPopup.php" ?>

    <!-- Back to top button -->
    <?php include "./components/back-to-top-button.php" ?>

    <!-- Side-buttons -->
    <?php include "./components/side-buttons.php" ?>

    <!-- TODO: Implement a Call To Action here -->
    <?php include "./components/call-to-action.php" ?>

    <?php include "./components/footer.php" ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox JS + jQuery -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js?v=<?= filemtime('js/script.js') ?>"></script>
</body>

</html>