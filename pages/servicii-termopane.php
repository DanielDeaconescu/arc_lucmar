<?php 

  $services = [
    [
      "icon" => "fa-handshake",
      "title" => "Consultanță pentru ferestre și uși",
      "description" => "Analizăm nevoile locuinței tale și îți oferim recomandări pentru ferestre și uși din PVC și aluminiu potrivite pentru tine."
    ],
    [
      "icon" => "fa-ruler-combined",
      "title" => "Măsurători exacte la fața locului",
      "description" => "Luăm dimensiunile precise pentru fiecare proiect și asigurăm compatibilitatea pieselor de tâmplărie cu specificul lucrării."
    ],
    [
      "icon" => "fa-box-open",
      "title" => "Furnizare profil PVC și uși personalizate",
      "description" => "Oferim ferestre și uși cu profile de înaltă calitate (Sigplast, KMG, Salamander), adaptate nevoilor locuinței tale."
    ],
    [
      "icon" => "fa-tools",
      "title" => "Montaj profesionist de ferestre și uși",
      "description" => "Echipa cu peste 19 ani de experiență garantează un montaj precis, realizat cu atenție la detalii, și care pune 100% în valoare calitățile profilului ales."
    ],
    [
      "icon" => "fa-sync-alt",
      "title" => "Întreținere și reparații ferestre și usi din PVC și aluminiu",
      "description" => "Oferim reglaje, înlocuire garnituri, reparații la feronerie (sistemul de închidere), astfel ca ferestrele și ușile tale să funcționeze exact așa cum te aștepți."
    ],
    [
        "icon" => "fa-chart-line",
        "title" => "Perfecționarea serviciilor prin feedback",
        "description" => "Ne îmbunătățim constant serviciile bazându-ne pe feedback-ul tău și abordăm fiecare proiect ca pe o provocare de a face lucrurile mai bine."
    ]
  ];


?>


<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Servicii complete de montaj termopane în Galați: ferestre și uși PVC și aluminiu Sigplast și echipă cu peste 19 ani experiență.">

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
    <title>Servicii Termopane PVC și Aluminiu în Galați | Arc Lucmar</title>
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <?php include "../components/formModal.php" ?>

    <!-- Header -->
    <?php 
      
      include "../components/header.php"
     ?>

    <!-- Services -->
    <section id="services" class="services bg-light py-5 py-md-5 py-lg-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-container text-center">
                        <h2 class="text-dark">
                            <span class="text-secondary">Serviciile</span> noastre
                        </h2>
                        <p class="fs-5">
                            Descoperă gama completă de servicii Arc Lucmar pentru ferestre și uși PVC și aluminiu: de la
                            consultanță personalizată și măsurători precise, până la furnizare și montaj profesionist.
                            Fiecare proiect este tratat cu atenție la detalii, pentru rezultate funcționale, durabile și
                            estetice.
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
                                    <h4 class="card-title text-dark"> <?=  $service['title'] ?></h4>
                                    <p class="card-text fs-5"><?= $service['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
    </section>


    <!-- Profile Tech Details -->
    <?php include "../components/profile-tech-details.php" ?>

    <?php include "../components/side-buttons.php" ?>
    <?php include "../components/cookiesPopup.php" ?>

    <!-- TODO: Add a clear CTA here -->
    <?php include "../components/call-to-action.php" ?>

    <?php include "../components/footer.php" ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js<?= filemtime('../js/script.js') ?>"></script>
</body>

</html>