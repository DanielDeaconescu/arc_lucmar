<?php 

    $current_page = basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          Arc Lucmar
        </a>

        <button
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#menuLinks"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuLinks">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>">Acasă</a>
            </li>
            <li class="nav-item">
              <a href="services.php" class="nav-link <?= $current_page == 'services.php' ? 'active' : '' ?>">Servicii</a>
            </li>
            <li class="nav-item">
              <a href="portfolio.php" class="nav-link <?= $current_page == 'portfolio.php' ? 'active' : '' ?>">Portofoliu</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link btn btn-outline-secondary px-4 mx-4 <?= $current_page == 'contact.php' ? 'active' : '' ?>"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>