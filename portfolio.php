<?php include "./components/formModal.php" ?>
<?php 

require_once __DIR__ . '/includes/simple_db.php';

?>




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
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <!-- Lightbox 2 -->
        <link href="./lightbox/dist/css/lightbox.css" rel="stylesheet" />
        <!-- Custom style -->
        <link rel="stylesheet" href="css/styles.css" />
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" />

        <title>Arc Construct | Acasă</title>
    </head>
</head>

<body>
    <?php include "navbar.php" ?>

    <?php 
      $headerText = "Portofoliu";
      include "./components/header.php"
    ?>

    <!-- Projects -->
    <section id="projects" class="projects bg-light py-6">
        <div class="container">
            <!-- Landscape Projects -->
            <div class="row g-4">
                <?php foreach ($landscapeProjects as $project): ?>
                <div class="col-md-4">
                    <!-- 3 per row -->
                    <div class="card h-100">
                        <img src="<?= $project["thumbnail"]; ?>" class="card-img-top" alt="<?= $project['title']; ?>" />
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= $project['title'] ?></h5>
                            <button class="btn btn-primary stretched-link" data-bs-toggle="modal"
                                data-bs-target="#projectModal<?= $project['id']; ?>">
                                Vezi detalii
                            </button>
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
                    <div class="card h-100">
                        <img src="<?= $project['thumbnail']; ?>" class="card-img-top" alt="<?= $project['title']; ?>" />
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= $project['title']; ?></h5>
                            <button class="btn btn-primary stretched-link" data-bs-toggle="modal"
                                data-bs-target="#projectModal<?= $project['id']; ?>">
                                Vezi detalii
                            </button>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body <?= $containsVertical ? '' : 'vh-50' ?>">
                            <div class="container-gallery-specs">
                                <!-- Gallery left -->
                                <div class="gallery-left">
                                    <!-- Landscape images row -->
                                    <div class="modal-images-container">
                                        <?php foreach ($project['gallery'] as $image): ?>

                                        <?php if (getOrientation($image) === 'landscape'): ?>
                                        <div>
                                            <a href="<?= $image; ?>" data-lightbox="<?= $project["id"]; ?>">
                                                <img src="<?php echo $image; ?>"
                                                    class="img-fluid rounded shadow-sm <?= count($project['gallery']) > 1 ? 'modal-img-multiple' : 'modal-img-singular'; ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Portrait images row -->
                                    <div class="modal-images-container">
                                        <?php foreach ($project['gallery'] as $image): ?>
                                        <?php if (getOrientation($image) === 'portrait'): ?>
                                        <div class="">
                                            <a href="<?= $image; ?>" data-lightbox="<?= $project['id']; ?>">
                                                <img src="<?php echo $image; ?>"
                                                    class="img-fluid rounded shadow-sm <?= count($project['gallery']) > 1 ? 'modal-img-multiple' : 'modal-img-singular'; ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>


                                <!-- Specs right -->
                                <div class="specs-right">
                                    <h4 class="text-dark"><?= $project['title']; ?></h4>
                                    <ul>
                                        <?php foreach ($project['specs'] as $spec): ?>
                                        <li><?= $spec; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php include "cookiesPopup.php" ?>
    <!-- CTA -->
    <?php include "./components/call-to-action.php" ?>

    <?php include "./components/footer.php"; ?>

    <button id="to-top" class="to-top-btn">
        <img src="images/up-arrow.png" alt="" />
    </button>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <!-- Lightbox JS + jQuery -->
    <script src="./lightbox/dist/js/lightbox-plus-jquery.js">

    </script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>