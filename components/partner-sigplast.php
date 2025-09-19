<?php $currentPage = basename($_SERVER['PHP_SELF']) ?>

<!-- Partener Sigplast -->
<section class="partener-sigplast py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4 class="text-dark d-flex align-items-center gap-2">
                    <i class="fa-solid fa-award fa-award-custom fa-2x"></i>
                    Partener Sigplast România
                </h4>
                <h5 class="text-dark d-flex align-items-center gap-3">
                    <div class="produced-100-romania">
                        <i class="fa-solid fa-trophy fa-trophy-custom"></i>
                        Profil produs 100% în România
                    </div>
                    <div class="factory-prices">
                        <i class="fa-solid fa-sack-dollar fa-sack-dollar-custom"></i>
                        Prețuri de fabrică
                    </div>
                </h5>
                <?php  if($currentPage == 'index.php'): ?>
                <h6 class="text-dark d-flex align-items-center gap-2">

                </h6>
                <p class="fs-5">Pentru a vă oferi tâmplărie PVC de înaltă calitate, colaborăm îndeaproape cu
                    funizorul
                    local
                    Sigplast.</p>
                <p class="fs-5">Profilul PVC Sigplast este produs integral la fabria Sigplast, în Galați, România.
                </p>
                <p>
                    <small>
                        Pentru mai multe detalii, puteți vizita website-ul Sigplast România aici: <a
                            href="https://sigplast.ro/" target="_blank">Website Sigplast</a>
                    </small>
                </p>
                <?php endif; ?>
            </div>

            <div class="col-md-3 d-flex align-items-center">
                <a class="sigplast-logo-link" href="https://sigplast.ro/" target="_blank">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <img class="img-fluid sigplast-partner-img" src="./images/logo-sigplast.png" alt="">
                        <h6 class="text-dark">Fabrică profil PVC Galați, România</h6>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>