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
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <title>Arc Lucmar | Cookies</title>
</head>

<body>
    <?php include "./components/navbar.php" ?>

    <!-- Header -->
    <?php 
      $headerText = "Politica de cookies";
      include "./components/header.php"
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
                                Cookie-urile sunt fișiere de mici dimensiuni, formate din litere și numere, care sunt
                                stocate pe dispozitivul dumneavoastră (computer, tabletă, telefon mobil) atunci când
                                vizitați un website. Ele permit recunoașterea dispozitivului și ajută la o navigare mai
                                eficientă.

                                Cookie-urile nu conțin date personale și nu pot accesa documente sau fișiere de pe
                                dispozitivul dumneavoastră.
                            </p>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">2. Folosim cookie-uri pe acest website?</h4>
                            <p class="text-justify fs-5">
                                În prezent, website-ul nostru nu utilizează cookie-uri care să colecteze sau să stocheze
                                datele vizitatorilor.
                                Dacă în viitor vom implementa cookie-uri pentru îmbunătățirea experienței online (de
                                exemplu: pentru analiza traficului, pentru optimizarea conținutului sau pentru campanii
                                de promovare), vom actualiza această pagină și vă vom informa în mod clar înainte de a
                                le activa.
                            </p>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">3. De ce sunt folosite cookie-urile în general?</h4>
                            <p class="text-justify fs-5">
                                La modul general, cookie-urile pot fi utilizate pentru:
                            </p>
                            <ul class="ms-4">
                                <li class="fs-5">îmbunătățirea funcționării website-urilor</li>
                                <li class="fs-5">măsurarea traficului și a performanței</li>
                                <li class="fs-5">personalizarea conținutului</li>
                                <li class="fs-5">livrarea de publicitate relevantă utilizatorilor</li>
                            </ul>
                        </li>
                        <li class="mb-3">
                            <h4 class="text-dark">4. Surse de informare utile</h4>
                            <p class="text-justify fs-5">
                                Dacă doriți să aflați mai multe detalii despre cookie-uri, puteți consulta următoarele
                                resurse:
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
                            <h4 class="text-dark" id="gdprinfo">5. Cum folosim datele colectate prin formular?</h4>
                            <p class="text-justify fs-5">
                                Atunci când completați formularul de cerere ofertă de pe website, vă solicităm
                                următoarele informații: nume, număr de telefon și, opțional, imagini sau o descriere a
                                proiectului. Aceste date sunt colectate exclusiv cu scopul de a vă putea contacta și de
                                a vă oferi un deviz cât mai exact în funcție de specificațiile proiectului
                                dumneavoastră.

                                Datele nu sunt stocate într-o bază de date și nu sunt utilizate în scopuri de marketing
                                sau transmise către terți. Ele sunt transmise doar către reprezentantul firmei, care vă
                                va contacta telefonic pentru a solicita, dacă este necesar, informații suplimentare în
                                vederea întocmirii ofertei.

                                Odată procesată solicitarea și oferită oferta, datele nu vor mai fi păstrate de către
                                firmă. Aveți dreptul să solicitați oricând accesul la datele dumneavoastră, rectificarea
                                acestora sau ștergerea lor, conform legislației în vigoare (Regulamentul (UE) 2016/679 –
                                GDPR). Pentru astfel de solicitări (acces, rectificare, ștergere), ne puteți contacta
                                oricând prin email la adresa <a
                                    href="mailto:contact@tamplariearcus.ro">gdpr@tamplariearcus.ro</a>.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include "./components/formModal.php" ?>
    <?php include "./components/side-buttons.php" ?>
    <?php include "./components/cookiesPopup.php" ?>

    <?php include "./components/footer.php"; ?>


    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>