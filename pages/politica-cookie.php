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
    <!-- Turnstile script -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="../css/styles.css?v=<?= filemtime('../css/styles.css') ?>" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <title>Arc Lucmar | Cookies</title>
</head>

<body>
    <?php include "../components/navbar.php" ?>

    <!-- Header -->
    <?php 
      include "../components/header.php"
     ?>

    <!-- Cookies Section -->
    <section id="cookies" class="cookies bg-light py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <h4 class="text-dark">1. Ce sunt cookie-urile?</h4>
                            <p class="text-justify fs-5">
                                Cookie-urile sunt fișiere de mici dimensiuni, formate din litere și numere, care se
                                salvează pe dispozitivul tău (computer, tabletă, telefon mobil) atunci când accesezi un
                                website. Acestea ajută la recunoașterea dispozitivului și pot face navigarea pe internet
                                mai rapidă și mai eficientă.

                                Cookie-urile nu conțin date personale și nu pot accesa fișiere sau documente de pe
                                dispozitivul tău.
                            </p>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">2. Folosim cookie-uri pe acest website?</h4>
                            <p class="text-justify fs-5">
                                În prezent, website-ul Arc Lucmar <strong>NU utilizează cookie-uri care colectează sau
                                    stochează
                                    date personale despre vizitatori</strong>.
                                Dacă, pe viitor, vom implementa cookie-uri pentru îmbunătățirea experienței online (ex.
                                analiză de trafic, optimizarea conținutului sau campanii publicitare), această pagină va
                                fi actualizată, iar tu vei fi informat în mod clar și transparent înainte de activarea
                                lor.
                            </p>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">3. La ce sunt folosite cookie-urile în general?</h4>
                            <p class="text-justify fs-5">
                                În mod obișnuit, cookie-urile sunt utilizate pentru:
                            </p>
                            <ul class="ms-4">
                                <li class="fs-5">îmbunătățirea funcționării website-urilor</li>
                                <li class="fs-5">analizarea traficului și a performanței paginilor</li>
                                <li class="fs-5">personalizarea conținutului afișat utilizatorilor</li>
                                <li class="fs-5">afișarea de publicitate relevantă</li>
                            </ul>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">4. Surse de informare utile</h4>
                            <p class="text-justify fs-5">
                                Dacă dorești să afli mai multe detalii despre cookie-uri și modul în care funcționează,
                                îți recomandăm următoarele resurse:
                            </p>
                            <ul>
                                <li>
                                    <a target="_blank" href="https://allaboutcookies.org/" class="fs-5">All About
                                        Cookies (în limba
                                        engleză)</a>
                                </li>
                                <li>
                                    <a href="https://ro.wikipedia.org/wiki/Cookie" target="_blank"
                                        class="fs-5">Cookie-uri
                                        (Wikipedia)</a>
                                </li>
                                <li>
                                    <a href="https://www.dataprotection.ro/?page=Cookies" target="_blank"
                                        class="fs-5">Politica
                                        privind modulele cookie (ANSPDCP)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-3 my-4">
                            <h4 class="text-dark" id="gdprinfo">5. Cum folosim datele colectate prin formularul de
                                ofertă?</h4>
                            <p class="text-justify fs-5">
                                Când completezi formularul de pe site-ul nostru pentru a solicita o ofertă, îți cerem
                                doar informațiile strict necesare: nume, număr de telefon și, opțional, imagini sau o
                                descriere a proiectului.

                                Aceste date sunt folosite <strong>exclusiv pentru a te contacta și pentru a-ți oferi o
                                    estimare corectă de preț</strong> pe baza detaliilor proiectului tău.

                            <ul>
                                <li>Datele NU sunt stocate într-o bază de date</li>
                                <li>NU sunt utilizate în scopuri de marketing</li>
                                <li>NU sunt transmise către terți</li>
                            </ul>

                            Informațiile ajung direct la un reprezentant Arc Lucmar, care te va contacta telefonic doar
                            pentru clarificări sau detalii suplimentare. După finalizarea ofertei, datele tale nu vor
                            mai fi păstrate de firmă.

                            Conform Regulamentului (UE) 2016/679 – GDPR, ai dreptul oricând să soliciți accesul la
                            datele tale, rectificarea sau ștergerea lor. Pentru astfel de solicitări, ne poți contacta
                            prin email la: <a href="mailto:gdpr@tamplariearcus.ro">gdpr@tamplariearcus.ro</a>.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include "../components/formModal.php" ?>
    <?php include "../components/side-buttons.php" ?>
    <?php include "../components/cookiesPopup.php" ?>

    <?php include "../components/footer.php"; ?>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js?v=<?= filemtime('../js/script.js') ?>"></script>
</body>

</html>