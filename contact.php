<?php include "navbar.php" ?>

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
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <title>Arc Construct | Acasă</title>
</head>

<body>


    <!-- Header -->
    <?php 
      $headerText = "Contact";
      include "./components/header.php"
    ?>

    <!-- De ce sa alegeti Arc Construct? -->
    <section id="details" class="details position-relative my-6 overflow-hidden">
        <img src="images/decoration-star.svg" alt="" class="decoration-star position-absolute" />
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container d-flex justify-content-center">
                        <img src="images/details-1.png" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h2 class="mb-4">De ce să alegeți Arc Construct?</h2>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-3">
                                <i class="fas fa-check text-primary fa-2x mx-4"></i>
                                <p>
                                    Colaborăm doar cu furnizori de încredere – pentru a garanta
                                    calitatea produselor.
                                </p>
                            </li>

                            <li class="d-flex mb-3">
                                <i class="fas fa-check text-primary fa-2x mx-4"></i>
                                <p>
                                    Montaj rapid și curat – respectăm termenele și spațiul
                                    clientului.
                                </p>
                            </li>

                            <li class="d-flex mb-3">
                                <i class="fas fa-check text-primary fa-2x mx-4"></i>
                                <p>
                                    Soluții personalizate – fiecare proiect este adaptat după
                                    nevoile și bugetul dumneavoastră.
                                </p>
                            </li>

                            <li class="d-flex mb-3">
                                <i class="fas fa-check text-primary fa-2x mx-4"></i>
                                <p>Experiență locală – în Galați și împrejurimi.</p>
                            </li>
                        </ul>
                        <a href="article.html" class="btn btn-primary">Cere o ofertă</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TODO: Implement a Call To Action here -->
    <section class="get-quote bg-light py-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="lh-base">
                        La Arc Construct Galați, credem că fiecare locuință merită
                        confort, siguranță și un aspect modern.
                    </h4>
                    <a href="#contact" class="btn btn-secondary btn-lg">Obține o ofertă</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>

    <button id="to-top" class="to-top-btn">
        <img src="images/up-arrow.png" alt="" />
    </button>

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>