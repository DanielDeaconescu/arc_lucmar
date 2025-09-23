<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
            rel="stylesheet" />
        <!-- Montserrat -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
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
        <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">

        <title>Arc Lucmar | Acasă</title>
    </head>
</head>

<body>
    <?php include "./components/formModal.php" ?>
    <?php require_once __DIR__ . '/includes/simple_db.php'?>
    <?php include "./components/navbar.php" ?>

    <?php 
      include "./components/header.php"
    ?>

    <!-- Projects -->
    <section id="projects" class="projects bg-light py-5 py-md-5 py-lg-6">
        <div class="container">
            <h1 class="text-dark text-center mb-4">Proiecte realizate de Arc Lucmar – ferestre și uși PVC și aluminiu
            </h1>
            <p class="fs-5 text-center">Explorați o selecție de proiecte finalizate de Arc Lucmar cu imagini relevante
                și detalii tehnice pentru fiecare proiect.</p>
            <!-- Landscape Projects -->
            <div class="row g-4">
                <?php foreach ($landscapeProjects as $project): ?>
                <div class="col-md-4">
                    <!-- 3 per row -->
                    <div class="card card-custom" data-bs-toggle="modal"
                        data-bs-target="#projectModal<?= $project['id']; ?>">
                        <img src="<?= $project["thumbnail"]; ?>" class="card-img-top card-img-custom"
                            alt="<?= $project['title']; ?>" loading="lazy" />
                        <div class="card-body">
                            <h5 class="card-title text-dark montserrat-text text-center fs-4 card-title-custom">
                                <?= $project['title'] ?>
                            </h5>
                        </div>
                        <div class="card-overlay">
                            <h5>Vezi mai mult</h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Portrait Projects -->
            <div class="row g-4 mt-4">
                <?php foreach ($portraitProjects as $project): ?>
                <div class="col-md-4">
                    <!-- also 3 per row -->
                    <div class="card card-custom" data-bs-toggle="modal"
                        data-bs-target="#projectModal<?= $project['id']; ?>">
                        <img src="<?= $project['thumbnail']; ?>" class="card-img-top card-img-custom"
                            alt="<?= $project['title']; ?>" loading="lazy" />
                        <div class="card-body">
                            <h5 class="card-title text-dark montserrat-text text-center fs-4 card-title-custom">
                                <?= $project['title'] ?>
                            </h5>
                        </div>
                        <div class="card-overlay">
                            <h5>Vezi mai mult</h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Modals (unchanged) -->
            <?php foreach ($projects as $project): ?>

            <div class="modal fade" id="projectModal<?= $project['id']; ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">
                                <?= $project['title'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="row">
                                                <!-- Landscape -->
                                                <div class="container">
                                                    <div class="row">
                                                        <?php foreach ($project['gallery'] as $image): ?>

                                                        <?php if (getOrientation($image) === 'landscape'): ?>
                                                        <div class="col-md-6 mb-3">
                                                            <a href="<?= $image; ?>"
                                                                data-lightbox="<?= $project["id"]; ?>">
                                                                <img src="<?php echo $image; ?>"
                                                                    class="img-fluid rounded shadow-sm <?= count($project['gallery']) > 1 ? 'modal-img-multiple' : 'modal-img-singular'; ?>"
                                                                    alt="test" loading="lazy">
                                                            </a>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <!-- Portrait -->
                                                        <?php foreach ($project['gallery'] as $image): ?>
                                                        <?php if (getOrientation($image) === 'portrait'): ?>
                                                        <div class="col-md-6 mb-3">
                                                            <a href="<?= $image; ?>"
                                                                data-lightbox="<?= $project['id']; ?>">
                                                                <img src="<?php echo $image; ?>"
                                                                    class="img-fluid rounded shadow-sm <?= count($project['gallery']) > 1 ? 'modal-img-multiple' : 'modal-img-singular'; ?>"
                                                                    alt="" loading="lazy">
                                                            </a>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-dark"><?= $project['title']; ?></h4>
                                        <ul class="list-unstyled">
                                            <?php foreach ($project['specs'] as $spec): ?>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                <?= $spec; ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php include "./components/side-buttons.php" ?>
    <?php include "./components/cookiesPopup.php" ?>
    <!-- CTA -->
    <?php include "./components/call-to-action.php" ?>

    <?php include "./components/footer.php" ?>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox JS + jQuery -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>