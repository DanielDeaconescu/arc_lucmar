<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="logo-item-light">
    <img class="img-fluid navbar-logo-custom <?= $currentPage == "thank-you.php" || $currentPage == "tooManyRequests.php" ? 'thank-you-style' : ''; ?>"
        src="/images/logo_arclucmar_dark.svg" alt="logo arc lucmar">
    <div class="business-info d-flex flex-column justify-content-center">
        <div
            class="business-name text-dark <?= $currentPage == "thank-you.php" || $currentPage == "tooManyRequests.php" ? 'thank-you-style-business-name' : ''; ?>">
            Arc Lucmar
        </div>
        <div
            class="business-short-description text-dark <?= $currentPage == "thank-you.php" ? 'thank-you-style-business-short-description' : ''; ?>">
            Tâmplărie PVC și Aluminiu
        </div>
    </div>
</div>