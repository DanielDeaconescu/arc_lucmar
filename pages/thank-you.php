<?php

session_start();

// Check if the user came from a successful form submission

if (!isset($_SESSION['form_submitted']) || $_SESSION['form_submitted'] !== true) {
    header('Location: /index.php');
    exit;
}

// Clear the session flag to prevent refreshing the page
unset($_SESSION['form_submitted']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="../css/styles.css?v=<?= filemtime('../css/styles.css') ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <title>Cerere trimisă! | Mulțumim!</title>
</head>

<body>

    <!-- De ce sa alegeti Arc Construct? -->

    <div class="container">
        <section id="thank-you-section" class="thank-you">
            <div class="logo">
                <?php include '../components/logo-item-dark.php' ?>
            </div>
            <h1 class="text-dark text-center">Mulțumim pentru completarea formularului!</h1>
            <p class="fs-5 text-center">Un specialist Arc Lucmar Termopane vă va contacta în cel mai scurt timp pentru
                mai multe
                informații și
                detalii.</p>
            <a href="/" class="btn btn-secondary">Înapoi la pagina principală</a>
        </section>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js?v=<?= filemtime('js/script.js') ?>"></script>
</body>

</html>