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
    <!-- Bootstrap icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"
        integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom style -->
    <!-- Lightbox 2 -->
    <link href="lightbox/dist/css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <title>Cerere oferă | Arc Lucmar</title>
</head>

<body>

    <!-- Header -->
    <header class="header-landing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5 text-content">
                        <h1 class="text-center landing-page-h1">
                            Vrei o casă mai liniștită și facturi la energie mai mici?
                        </h1>
                        <p class="fs-5 lead mb-4 p-header-landing">
                            Înlocuiește vechile tale geamuri cu soluțiile noastre premium de termopane și bucură-te de
                            confort și economii pe termen lung. Oferim consultanță gratuită și montaj profesionistă.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php include "./components/partner-sigplast.php" ?>

    <!-- Process steps + Form -->
    <section id="process-steps-form" class="process-steps-form py-5">
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">

                    <!-- Process steps -->
                    <div class="list-group mt-3">
                        <h3 class="text-dark">Cum funcționează?</h3>
                        <li class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1 text-dark d-flex align-items-center gap-2">
                                    <i class="bi bi-1-circle-fill fs-1"></i>
                                    Solicită oferta ta gratuită
                                </h4>
                            </div>
                            <p class="mb-1 text-justify">
                                Completează formularul de mai jos sau apelează-ne direct. Vei discuta cu un specialist
                                de-al nostru pentru a stabili detaliile și a programa o vizită la domiciliu.
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">

                                <h4 class="mb-1 text-dark d-flex align-items-center gap-2">
                                    <i class="bi bi-2-circle-fill fs-1"></i>
                                    Consultanță și măsurători gratuite la fața locului
                                </h4>
                            </div>
                            <p class="mb-1 text-justify">
                                Un specialist va veni la tine acasă, va evalua necesitățile
                                proiectului și va efectua măsurători exacte. Pe baza acestora, vei primi o ofertă de
                                preț detaliată și corectă, care nu presupune nicio obligativitate.
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1 text-dark d-flex align-items-center gap-2">
                                    <i class="bi bi-3-circle-fill fs-1"></i>
                                    Montaj profesionist și fără griji
                                </h4>
                            </div>
                            <p class="mb-1 text-justify">
                                Echipa noastră de montaj va instala tâmplăria cu precizie și grijă,
                                respectându-ți casa și programul stabilit.
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1 text-dark d-flex align-items-center gap-2">
                                    <i class="bi bi-4-circle-fill fs-1"></i>
                                    Bucură-te de confortul noului tău cămin
                                </h4>
                            </div>
                            <p class="mb-1 text-justify">
                                Aproape fără efort din partea ta, te poți bucura imediat de un cămin mai eficient
                                energetic, mai liniștit și mai sigur. Garantăm o execuție impecabilă a lucrării și
                                asistență post-vânzare.
                            </p>
                        </li>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Form -->
                    <div class="mt-3">
                        <h3 class="text-dark">Solicită oferta ta gratuită</h3>
                        <form id="formLucmar" method="post" class="formLandingPage">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nume:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Numar de telefon:</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label attach-image-label">
                                    <span class="attach-file-name">
                                        Adaugă imagini (maxim 5)
                                    </span>
                                    <input type="file" multiple id="image" class="form-control image-input"
                                        name="image[]">
                                </label>
                                <div class="attached-images-container"></div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrierea proiectului (opțional):</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <div class="cf-turnstile" data-sitekey="0x4AAAAAAB0yJdAtvLgpwHwA" data-theme="light">
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    <div class="spinner-border spinner-border-sm d-none" role="status"></div>
                                    Trimite
                                </button>
                            </div>
                        </form>

                        <div id="toast" class="toast-hidden"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Why choose our services -->
    <section class="why-choose-our-services p-5">
        <div class="container-fluid">
            <div class="container">
                <h2 class="text-light text-center mb-4">De ce să alegi serviciile noastre?</h2>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3 mb-md-0 fs-4 d-flex align-items-center gap-2 text-light">
                        <i class="fa-solid fa-award fa-2x award-custom"></i>
                        Garantie 10 ani
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0 fs-4 d-flex align-items-center gap-2 text-light">
                        <i class="fa-solid fa-screwdriver-wrench fa-2x"></i>
                        Montaj impecabil
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0 fs-4 d-flex align-items-center gap-2 text-light">
                        <i class="fa-solid fa-gem fa-2x"></i>
                        Profile de înaltă calitate
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="additional-cta p-5">
        <div class="container">
            <div class="col-12">
                <h3 class="text-center text-light">Ești gata pentru o casă mai eficientă energetic?</h3>
                <p class="text-center fs-3 color-grey">Contactează-ne și descoperă <strong>ofertele lunii
                        Septembrie!</strong></p>
                <div class="buttons text-center d-flex justify-content-center gap-3">
                    <div>
                        <a href="tel:+40741297459" class="btn btn-primary fs-6">Apelează-ne acum!</a>
                    </div>
                    <div>
                        <a href="#process-steps-form" class="btn btn-primary fs-6">Completează formularul!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/cookiesPopup.php" ?>

    <!-- Minimal footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
            <div class="d-flex gap-2 justify-content-end">
                <i class="fa-solid fa-copyright fa-2x text-light"></i>
                <div class="text-light">Arc Lucmar</div>
            </div>
        </div>
    </footer>

    <!-- Lightbox JS + jQuery -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>