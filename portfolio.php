<?php 

$projects = [
  [ 
    "id" => 1, // unique ID
    "title" => "Montaj ferestre PVC Galati",
    "thumbnail" => "./images/project1/thumb.jpg",
    "gallery" => [
      "./images/project1/img1.jpg",
    ],
    "specs" => [
      "Profile PVC clasa A",
      "Sticla termoizolanta 4S",
      "Montaj realizat in 3 zile",
      "Garantie 5 ani"
    ],
    "orientation" => ""
  ], 
  [
    "id" => 2,
    "title" => "Montaj ferestre PVC Galati 1",
    "thumbnail" => "./images/project2/thumb.jpg",
    "gallery" => [
      "images/project2/img1.jpg",
      "images/project2/img2.jpg",
      "images/project2/img3.jpg"
    ],
    "specs" => [
      "Profile PVC clasa A",
      "Sticla termoizolanta 4S",
      "Montaj realizat in 3 zile",
      "Garantie 5 ani"
    ],
    "orientation" => ""
  ],
  [
    "id" => 3,
    "title" => "Montaj ferestre PVC Galati 2",
    "thumbnail" => "./images/project3/thumb.jpg",
    "gallery" => [
      "images/project3/img1.jpg",
      "images/project3/img2.jpg",
    ],
    "specs" => [
      "Profile PVC clasa A",
      "Sticla termoizolanta 4S",
      "Montaj realizat in 3 zile",
      "Garantie 5 ani"
    ],
    "orientation" => ""
  ],
  [ 
    "id" => 4, 
    "title" => "Montaj ferestre PVC Galati 3",
    "thumbnail" => "./images/project4/thumb.jpg",
    "gallery" => [
      "./images/project4/img1.jpg",
      "./images/project4/img2.jpg",
      "./images/project4/img3.jpg"
    ],
    "specs" => [
      "Profile PVC clasa A",
      "Sticla termoizolanta 4S",
      "Montaj realizat in 3 zile",
      "Garantie 5 ani"
    ],
    "orientation" => ""
],
[ 
    "id" => 5,
    "title" => "Montaj ferestre PVC Galati 4",
    "thumbnail" => "./images/project5/thumb.jpg",
    "gallery" => [
      "./images/project5/img1.jpg",
      "./images/project5/img2.jpg",
      "./images/project5/img3.jpg",
      "./images/project5/img4.jpg",
      "./images/project5/img5.jpg"
    ],
    "specs" => [
      "Profile PVC clasa A",
      "Sticla termoizolanta 4S",
      "Montaj realizat in 3 zile",
      "Garantie 5 ani"
    ],
    "orientation" => ""
]
];

// Detect orientation safely
function getOrientation($imagePath) {
    if (!file_exists($imagePath)) return 'landscape'; // fallback

    [$width, $height] = getimagesize($imagePath);

    // Try to read EXIF if available (only works on JPEG/TIFF)
    if (function_exists('exif_read_data') && exif_imagetype($imagePath) === IMAGETYPE_JPEG) {
        $exif = @exif_read_data($imagePath);
        if (!empty($exif['Orientation'])) {
            $orientation = $exif['Orientation'];
            // If rotated 90 or 270 degrees, swap width and height
            if (in_array($orientation, [5, 6, 7, 8])) {
                [$width, $height] = [$height, $width];
            }
        }
    }

    return $width > $height ? 'landscape' : 'portrait';
}


foreach ($projects as $key => $project) {
    $projects[$key]['orientation'] = getOrientation($project['thumbnail']);
}

$landscapeProjects = array_filter($projects, fn($p) => $p['orientation'] === 'landscape');
$portraitProjects  = array_filter($projects, fn($p) => $p['orientation'] === 'portrait');

?>


<?php
$img = "./images/project3/img1.jpg";

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
                            <h5 class="card-title"><?= $project['title']; ?></h5>
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
                        <div class="modal-body">
                            <div class="row">
                                <!-- Gallery left -->
                                <div class="col-md-6">
                                    <!-- Landscape images row -->
                                    <div class="row g-3 mb-4">
                                        <?php foreach ($project['gallery'] as $image): ?>
                                        <?php if (getOrientation($image) === 'landscape'): ?>
                                        <div class="col-md-6">
                                            <img src="<?php echo $image; ?>" class="img-fluid rounded shadow-sm" alt="">
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Portrait images row -->
                                    <div class="row g-3">
                                        <?php foreach ($project['gallery'] as $image): ?>
                                        <?php if (getOrientation($image) === 'portrait'): ?>
                                        <div class="col-md-6">
                                            <img src="<?php echo $image; ?>" class="img-fluid rounded shadow-sm" alt="">
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>


                                <!-- Specs right -->
                                <div class="col-md-6">
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