<?php 

  $services = [
    [
      "icon" => "fa-handshake",
      "title" => "Consultanță personalizată",
      "description" => "Analizăm nevoile și cerințele fiecărui client și oferim recomandări pentru tipul de ferestre și uși potrivite."
    ],
    [
      "icon" => "fa-ruler-combined",
      "title" => "Măsurători exacte la fața locului",
      "description" => "Luăm dimensiunile precise pentru fiecare proiect și asigurăm compatibilitate și montaj fără probleme."
    ],
    [
      "icon" => "fa-box-open",
      "title" => "Furnizare ferestre și uși",
      "description" => "Produse personalizate, adaptate cerințelor clientului, cu profile de la Sigplast, KMG și Salamander."
    ],
    [
      "icon" => "fa-tools",
      "title" => "Montaj profesionist",
      "description" => "Echipa cu peste 19 ani de experiență garantează montaj precis și de calitate."
    ],
    [
      "icon" => "fa-sync-alt",
      "title" => "Reparații și întreținere",
      "description" => "Reglaje, înlocuire garnituri și reparare mecanisme pentru ferestre și uși PVC/aluminiu."
    ],
    [
        "icon" => "fa-chart-line",
        "title" => "Îmbunătățirea constantă a serviciilor",
        "description" => "Ne perfecționăm serviciile în mod continuu, bazându-ne pe feedback-ul primit de la clienți după finalizarea fiecărui proiect."
    ]
  ];


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
        <!-- Custom style -->
        <link rel="stylesheet" href="css/styles.css" />
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" />
        <title>Arc Construct | Acasă</title>
    </head>
</head>

<body>
    <?php include "navbar.php" ?>

    <!-- Header -->
    <?php 
      $headerText = "Servicii Lucmar Termopane";
      include "./components/header.php"
     ?>

    <!-- Services -->
    <section id="services" class="services bg-light py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-container text-center">
                        <h2 class="text-dark">
                            <span class="text-secondary">Serviciile</span> noastre
                        </h2>
                        <p>
                            Oferim servicii complete pentru ferestre și uși din PVC și aluminiu, de la consultanță și
                            măsurători, până la furnizare și montaj profesionist. Ne adaptăm nevoilor fiecărui client și
                            ne perfecționăm constant pe baza feedback-ului primit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row text-center">
                        <?php foreach($services as $service): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 text-center">
                                <div class="card-body">
                                    <i class="fas <?= $service['icon'] ?> fa-2x mb-3"></i>
                                    <h5 class="card-title text-dark"> <?=  $service['title'] ?></h5>
                                    <p class="card-text"><?= $service['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
    </section>

    <!-- TODO: Add a clear CTA here -->
    <?php include "./components/call-to-action.php" ?>

    <?php include "./components/footer.php" ?>

    <button id="to-top" class="to-top-btn">
        <img src="images/up-arrow.png" alt="" />
    </button>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>