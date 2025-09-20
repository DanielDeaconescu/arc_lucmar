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
    <!-- <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script> -->
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

    <?php include './components/partner-sigplast.php' ?>

    <!-- De ce sa alegeti Arc Construct? -->
    <section id="details" class="details position-relative py-4 py-md-4 py-lg-6 overflow-hidden">
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

    <?php include "./components/profile-tech-details.php" ?>

    <?php include "./components/factory-images.php" ?>


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