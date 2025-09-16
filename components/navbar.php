<?php 

    $current_page = basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-custom">
    <div class="container h-100">
        <a href="index.html" class="navbar-brand">
            Arc Lucmar
        </a>

        <button type="button" data-bs-toggle="collapse" data-bs-target="#menuLinks" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h-100" id="menuLinks">
            <ul class="navbar-nav ms-auto h-100">
                <li class="nav-item h-100 ">
                    <a href="index.php"
                        class="nav-link h-100 d-flex align-items-center jutify-content-center <?= $current_page == 'index.php' ? 'active-custom' : '' ?>">Acasă</a>
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
                        class="nav-link btn btn-outline-secondary px-4 mx-4 <?= $current_page == 'contact.php' ? 'active-custom' : '' ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>