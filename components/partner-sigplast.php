<?php $currentPage = basename($_SERVER['PHP_SELF']) ?>

<!-- Partener Sigplast -->
<section class="partener-sigplast py-2 py-sm-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="text-dark d-flex align-items-center gap-2">
                    <i class="fa-solid fa-award fa-award-custom fa-2x"></i>
                    Parteneriat local cu Sigplast România
                </h2>
                <h3 class="text-dark d-flex align-items-center gap-3">
                    <i class="fa-solid fa-trophy fa-trophy-custom"></i>
                    Profil PVC 100% românesc, produs la Galați
                </h3>
                <?php  if($currentPage == 'index.php'): ?>
                <p class="fs-5">
                    Arc Lucmar este partener de încredere al companiei Sigplast, producător local de profil PVC cu
                    fabrică în Galați. Datorită acestei colaborări de lungă durată, putem oferi ferestre și uși din PVC
                    și aluminiu la prețuri foarte avantajoase, apropiate de cele de fabrică, păstrând în același timp
                    standarde înalte de calitate.
                </p>
                <?php endif; ?>
            </div>

            <div class="col-md-3 d-flex align-items-center d-none d-sm-flex">

                <div class="d-flex flex-column gap-2 align-items-center">
                    <img class="img-fluid sigplast-partner-img" src="/images/logo-sigplast.webp" alt="">
                    <h6 class="text-dark">Fabrică profil PVC Galați, România</h6>
                </div>

            </div>
        </div>

    </div>
</section>