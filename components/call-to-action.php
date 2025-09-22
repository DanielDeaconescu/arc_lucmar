<?php
    $page = basename($_SERVER['PHP_SELF']);
?>

<?php 

    switch($page){
        case 'index.php':
            $ctaTitle = 'Transformă-ți casa cu ferestre și uși Sigplast, adaptate nevoilor tale!';
            $ctaP = 'Echipa Arc Lucmar, cu peste 19 ani de experiență, se ocupă de măsurători precise, furnizare de profiluri PVC și aluminiu și un montaj impecabil (executat cu grijă și atenție la detalii) în Galați și împrejurimi. Contactează-ne acum sau solicită rapid o ofertă personalizată completând formularul!';
            $ctaClass = 'cta-home';
        break;
        case 'services.php':
            $ctaTitle = 'Servicii complete pentru ferestre și uși personalizate!';
            $ctaP = 'Cu peste 19 ani de experiență în montajul ferestrelor și ușilor, echipa Arc Lucmar transformă fiecare proiect într-o soluție funcțională, sigură și durabilă. Beneficiază și tu de montaj profesionist și atenție la detalii, astfel încât ferestrele și ușile tale să aducă confort, siguranță și eficiență energetică locuinței tale!';
            $ctaClass = 'cta-services';
        break;
        case 'portfolio.php':
            $ctaTitle = 'Ți-au plăcut proiectele noastre? Vino să transformăm și ideile tale în realitate!';
            $ctaP = 'Dacă proiectele noastre ți-au atras atenția, echipa Arc Lucmar este gata să-ți pună la dispoziție ferestre și uși din PVC și aluminiu personalizate, montaj profesionist și soluții complete adaptate nevoilor locuinței tale. Contactează-ne acum și hai să începem o colaborare de succes!';
            $ctaClass = 'cta-services';
        break;
        case 'contact.php':
            $ctaTitle = 'Contactează echipa Arc Lucmar';
            $ctaP = 'Ai nevoie de ferestre sau uși din PVC și aluminiu? Completează formularul, scrie-ne pe WhatsApp sau sună-ne direct pentru o evaluare rapidă și gratuită a proiectului tău. Cu peste 19 ani de experiență în consultanță, măsurători și montaj profesionist, echipa noastră îți stă la dispoziție pentru a-ți oferi soluții personalizate, durabile și adaptate nevoilor căminului tău.';
            $ctaClass = 'cta-contact';
    }
        

?>

<section class="text-center cta-custom <?= $ctaClass ?> py-5 py-md-5 py-lg-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="text-light">
                    <?php echo $ctaTitle; ?>
                </h2>
                <p class="text-light fs-5">
                    <?php echo $ctaP; ?>
                </p>
                <button data-bs-toggle="modal" data-bs-target="#formModal"
                    class="btn btn-secondary btn-lg mb-2 mb-md-0">Obține
                    ofertă</button>
                <a href="tel:+40741297459" class="btn btn-primary btn-lg cta-middle-btn mb-2 mb-md-0">
                    <i class="fa-solid fa-phone me-2"></i>
                    0741 297 459
                </a>
                <a href="tel:+40741297459" class="btn btn-whatsapp text-white btn-lg mb-2 mb-md-0">
                    <i class="fa-brands fa-whatsapp"></i>
                    Mesaj WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>