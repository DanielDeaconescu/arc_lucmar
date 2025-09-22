<?php 

    $current_page = basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-custom">
    <div class="container container-navbar-custom h-100">
        <a href="index.html" class="navbar-brand navbar-brand-custom d-flex align-items-center gap-2">
            <?php include "logo-item-light.php" ?>

        </a>

        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-custom h-100" id="navbarNav">
            <ul class="navbar-nav ms-auto navbar-nav-custom h-100">
                <li class="nav-item nav-item-custom h-100">
                    <a href="index.php"
                        class="nav-link nav-link-custom h-100 d-flex align-items-center jutify-content-center <?= $current_page == 'index.php' ? 'active-custom' : '' ?>">Acasă</a>
                </li>
                <li class="nav-item">
                    <a href="services.php"
                        class="nav-link h-100 d-flex align-items-center jutify-content-center <?= $current_page == 'services.php' ? 'active-custom' : '' ?>">Servicii</a>
                </li>
                <li class="nav-item">
                    <a href="portfolio.php"
                        class="nav-link h-100 d-flex align-items-center jutify-content-center <?= $current_page == 'portfolio.php' ? 'active-custom' : '' ?>">Portofoliu</a>
                </li>
                <li class="nav-item h-100 d-flex align-items-center">
                    <a href="contact.php"
                        class="nav-link btn-contact-navbar btn btn-outline-secondary px-4 mx-4 <?= $current_page == 'contact.php' ? 'active-custom' : '' ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="images/logo.svg" alt="yavin logo" class="img-fluid nav-img" />
        </a>

        <button type="button" data-bs-toggle="collapse" data-bs-target="#menuLinks" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuLinks">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Details</a>
                </li>
                <li class="nav-item">
                    <a href="portfolio.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link btn btn-outline-secondary px-4 mx-4">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->