<?php

session_start();

// Check if the user came from an attempt to submit too many forms

if (!isset($_SESSION['rate_limit_exceeded']) || $_SESSION['rate_limit_exceeded'] !== true) {
    header('Location: /index.php');
    exit;
}

// Clear the session flag to prevent refreshing the page
unset($_SESSION['rate_limit_exceeded']);
?>


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

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <title>Prea multe solicitări!</title>
</head>

<body>

    <section id="too-many-requests-section" class="too-many-requests-section">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="logo">
                    <?php include "../components/logo-item-dark.php" ?>
                </div>
                <h1 class="text-dark text-center">Prea multe solicitări!</h1>
                <p class="text-center tooManyRequests-p">Din motive de securitate, limităm numărul de solicitări trimise
                    prin
                    formular în
                    interval de 24 de ore.
                    Vă recomandăm se ne sunați direct la <a href="tel:+40741297459">0741 297 459</a> pentru urgențe sau
                    să
                    re-trimiteți formularul după 24 de ore. Mulțumim pentru înțelegere!
                </p>
                <a href="/index.php" class="btn btn-primary">Înapoi la pagina principală</a>
            </div>
        </div>
    </section>



    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js"></script>
</body>

</html>