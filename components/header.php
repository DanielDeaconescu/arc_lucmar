<?php $page = basename($_SERVER['PHP_SELF']) ?>
<?php 
  $headerBg;
  $headerP;

  switch ($page) {
    case 'index.php':
      $headerBg = 'header-home';
      $headerText = "Ferestre și uși din PVC la prețuri de fabrică, direct la tine acasă";
      $headerP = 'Arc Lucmar, partener Sigplast, îți oferă profil 100% românesc și montaj impecabil realizat de o echipă cu peste 19 ani de experiență.';
      break;
    case 'services.php':
      $headerBg = 'header-services';
      $headerText = "Servicii complete de ferestre și uși din PVC și aluminiu – Arc Lucmar Galați";
      $headerP = 'La Arc Lucmar oferim soluții complete pentru ferestre și uși din PVC și aluminiu, adaptate nevoilor tale. Echipa noastră, cu peste 19 ani de experiență, se ocupă de consultanță, măsurători precise, furnizare de profiluri de calitate și montaj profesionist. Colaborăm cu furnizori de încredere precum Sigplast, KMG și Salamander, pentru a asigura durabilitate, confort și siguranță locuinței tale.';
      break;
    case 'portfolio.php':
      $headerBg = 'header-portfolio';
      $headerText = "Portofoliu proiecte ferestre și uși PVC și aluminiu – Arc Lucmar";
      $headerP = 'Descoperă gama noastră de proiecte relevante în furnizarea și montarea de ferestre și uși PVC și aluminiu. Fiecare lucrare reflectă atenția noastră la detalii, colaborarea cu furnizori de încredere și angajamentul pentru soluții durabile, funcționale și estetice. Aruncă o privire în portofoliul nostru pentru a vedea felul în care Arc Lucmar poate să transforme ideile tale în realitate.';
      break;
    case 'contact.php':
      $headerBg = 'header-contact';
      $headerText = "Contactează Arc Lucmar – ferestre și uși PVC și aluminiu";
      $headerP = 'Suntem aici pentru a vă răspunde rapid la orice întrebare și pentru a vă oferi consultanță personalizată pentru ferestrele și ușile dumneavoastră. Completați formularul de mai jos, sunați-ne sau scrieți-ne pe email și echipa noastră vă va ajuta să găsiți cea mai bună soluție pentru căminul dumneavoastră. Așteptăm cu interes să colaborăm!';
      break;
    case "cookies.php":
      $headerBg = 'header-cookies';
      $headerText = "Politica de utilizare a cookie-urilor";
      $headerP = 'Această pagină explică modul în care site-ul Arc Lucmar folosește fișierele de tip cookie pentru a îmbunătăți experiența utilizatorilor, pentru a analiza traficul și pentru a oferi conținut și servicii adaptate nevoilor tale. Scopul nostru este să îți oferim informații clare și transparente, astfel încât să știi exact ce date sunt colectate și cum sunt utilizate.';
  }
?>

<header class="header position-relative overflow-hidden <?php echo $headerBg ?>">
    <div class="container position-relative z-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-6 <?= $page == 'index.php' ? '' : 'd-flex flex-column align-items-center'; ?>">
                    <h1 class="xl-md-text">
                        <?php echo $headerText ?? "Default Title"; ?>
                    </h1>
                    <p class="lead mb-4 p-header fs-3">
                        <?php echo $headerP; ?>
                    </p>
                    <?php 
                      if ($page != "cookies.php") {
                        echo '
                          <button class="btn btn-primary fw-bold btn-lg m-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModal">
                            Cere ofertă
                          </button>
                        ';
                      }
                    ?>

                    <?php
                if($page == "index.php") {
                  echo '
                    <a href="services.php" class="btn btn-outline-secondary fw-bold btn-lg m-2">
                      Vezi serviciile noastre
                    </a>
                  ';
                }
              ?>
                </div>
            </div>
        </div>
    </div>
</header>