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
      $headerP = 'La Arc Lucmar oferim soluții complete pentru ferestre și uși din PVC și aluminiu, adaptate nevoilor dumneavoastră. De la consultanță și măsurători precise, până la montaj profesionist și suport post-instalare, echipa noastră cu peste 19 ani de experiență se asigură că fiecare proiect este executat cu atenție la detalii și produse de calitate. Colaborăm cu furnizori de încredere precum Sigplast, KMG și Salamander, pentru a vă garanta durabilitate, confort și siguranță în căminul dumneavoastră.';
      break;
    case 'portfolio.php':
      $headerBg = 'header-portfolio';
      $headerP = 'Bine ați venit în portofoliul nostru! Aici veți descoperi proiectele noastre recente în domeniul ferestrelor și ușilor din PVC și aluminiu, de la concepte personalizate la montaj complet realizat de echipa noastră cu peste 19 ani de experiență. Fiecare proiect reflectă atenția noastră la detalii, colaborarea cu furnizori de încredere și angajamentul pentru soluții durabile și de calitate. Explorați exemplele de mai jos pentru a vedea cum transformăm ideile clienților în rezultate concrete și de încredere.';
      break;
    case 'contact.php':
      $headerBg = 'header-contact';
      $headerP = 'Suntem aici pentru a vă răspunde rapid la orice întrebare și pentru a vă oferi consultanță personalizată pentru ferestrele și ușile dumneavoastră din PVC și aluminiu. Completați formularul de mai jos, sunați-ne sau scrieți-ne pe email și echipa noastră cu peste 19 ani de experiență vă va ajuta să găsiți cea mai bună soluție pentru căminul dumneavoastră. Așteptăm cu interes să colaborăm!';
      break;
    case "cookies.php":
      $headerBg = 'header-cookies';
      $headerP = 'Această pagină are scopul de a vă oferi informații clare și transparente cu privire la modul în care website-ul nostru utilizează fișierele de tip cookie.';
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