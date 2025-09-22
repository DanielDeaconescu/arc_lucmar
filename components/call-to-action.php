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
            $ctaTitle = 'Ți-au plăcut proiectele noastre? Obține o ofertă pentru proiectul tău!';
            $ctaP = 'Dacă proiectele noastre ți-au atras atenția, echipa Arc Construct este pregătită să transforme și ideile tale în realitate. Fie că ai nevoie de ferestre și uși din PVC sau aluminiu, montaj profesionist ori consultanță specializată, îți oferim soluții adaptate exact nevoilor tale. Ia legătura cu noi astăzi și hai să începem colaborarea!';
            $ctaClass = 'cta-services';
        break;
        case 'contact.php':
            $ctaTitle = 'Contactați-ne — suntem aici să vă ajutăm!';
            $ctaP = 'Completați formularul sau contactați-ne direct și vă oferim o evaluare rapidă a proiectului. Echipa Arc Lucmar, cu peste 19 ani de experiență în montaj și furnizare profile PVC și aluminiu, vă stă la dispoziție pentru măsurători, consultanță și ofertă fără obligații.';
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
                <button data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-secondary btn-lg">Obține
                    ofertă</button>
                <a href="tel:+40741297459" class="btn btn-primary btn-lg cta-middle-btn">
                    <i class="fa-solid fa-phone me-2"></i>
                    0741 297 459
                </a>
                <a href="tel:+40741297459" class="btn btn-whatsapp text-white btn-lg">
                    <i class="fa-brands fa-whatsapp"></i>
                    Mesaj WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>