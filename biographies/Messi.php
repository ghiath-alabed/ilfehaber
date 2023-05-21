<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLFE.Haber</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="../css/images/icon.png" type="image/x-icon">
    <style>
      body {
        font-family: Arial;
        background-color: white;
        background: url('../css/images/messi-biography.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .dropdown-content a {
        color: black;
      }
      .ozet-box{
        background-color: rgba(255,255,255,0.5);
      }
      .text{
        color: black;
      }
    </style>
  </head>

  <body>
    <section>
      <div class="header-container">
        <header>
          <h1 class="header-title">İLFE HABER</h1>
            <nav class="navbar">
              <a href="../index.php" class="navbar-link" title="Anasayfa" target="_self">
                Home
              </a>  
              <a href="../worldCup.php" class="navbar-link" title="Dünya kupası" target="_self">
                World Cup
              </a>
              <a href="../biography.php" class="navbar-link" title="Oyuncuların Hayat Özti" target="_self"> <!-- _blank -->
                Biography
              </a>
            </nav>
            <div>
              <?php
                include_once '../includes/dbh.inc.php';
                session_start();
                if (isset($_SESSION["id"])) {
                  $id = $_SESSION["id"];
                  echo "<script>console.log('$id');</script>";
                  $sql = "SELECT * FROM User WHERE id = '$id'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    // User exists, continue and navigate to the index
                    $row = mysqli_fetch_assoc($result);
                    $email = $row['email'];
                    $username = $row['username'];
                    echo "<script src=\"js/Proje.js\"></script>";
                    // Here add header html
                    echo '
                      <div class="dropdown">
                        <button class="dropbtn Login-button">
                        <ion-icon name="person-outline"></ion-icon>
                        ' . $username . '</button>
                          <div class="dropdown-content Login-button">
                            <a href="#" onclick="logout()">Logout</a>
                          </div>
                          <div class="dropdown-content Login-button" style="margin-top: 47px;">
                            <a href="contact.php" onclick="showElement()">
                            <ion-icon name="help-circle-outline"></ion-icon>
                              About Us
                            </a>
                          </div>
                      </div>';
                    }
                  } else {
                      echo '
                      <a class="Login-button" href="login.php#" title="login-page">
                        <ion-icon name="person-circle-outline"></ion-icon>
                          Login / Register
                        <ion-icon name="person-add-outline"></ion-icon>
                      </a>';
                  }
              ?>
            </div>
        </header>
      </div>
      
      <div class="ozet-container">
        <div class="ozet-box">
          <h2 class="player-name">LIONEL MESSI</h2>
            <p class="text">
              Lionel Messi, 24 Haziran 1987'de Arjantin'in Rosario şehrinde doğdu. Futbola çok küçük yaşta başladı ve Arjantin'deki Newell's Old Boys kulübünde yetişti. Genç yaşta gösterdiği yetenekle dikkat çekti ve 2003 yılında sadece 16 yaşındayken FC Barcelona'nın genç takımına transfer oldu.
              Messi, Barcelona'nın genç takımında hızla gelişti ve 2004 yılında A takıma yükseldi. Profesyonel kariyerinde Barcelona formasıyla sayısız başarı elde etti. İspanya La Liga'da on bir şampiyonluk yaşadı ve UEFA Şampiyonlar Ligi'nde dört kez zafer sevinci yaşadı. Takımıyla birlikte birçok Copa del Rey, Supercopa de España ve FIFA Kulüpler Dünya Kupası şampiyonluğu da kazandı.
              Messi, sahip olduğu olağanüstü yetenekleri, hızı, çevikliği ve top kontrolüyle futbol dünyasında eşi benzeri görülmemiş bir oyuncu olarak kabul ediliyor. Çalışkanlığı, kararlılığı ve liderlik özellikleriyle de tanınır. Dribbling becerileri, gol atmaktaki ustalığı ve asist yapma yeteneğiyle birçok kez dünyanın en iyi futbolcusu seçildi.
              Milli takım düzeyinde, Arjantin formasıyla da büyük başarılara imza attı. 2005 FIFA 20 Yaş Altı Dünya Kupası'nda Arjantin'i şampiyonluğa taşıdı , 2008 Pekin Olimpiyatları'nda altın madalya kazandı , 2021 brezilya kupa amerikayi ve 2022 de çok beklediği dünya kupasını kazandı. Ayrıca 2014 FIFA Dünya Kupası'nda Arjantin'i finale taşıdı.
              2019-2020 sezonunun sonunda, uzun yıllar boyunca Barcelona'da forma giyen Messi, kulüpten ayrılma kararı aldı ve 2021 yazında Paris Saint-Germain (PSG) takımına transfer oldu. PSG'de de başarılı performansını sürdürdü ve takımıyla birçok önemli kupa mücadelesine katıldı.
              Messi, futbol kariyeri boyunca birçok rekor kırdı. İspanya La Liga'da en çok gol atan oyuncu, bir sezon içinde en çok gol atan oyuncu, Barcelona'da en çok gol atan oyuncu gibi birçok rekorun sahibidir. Aynı zamanda Arjantin Milli Takımı'nda da en çok gol atan oyuncudur.
              Lionel Messi, futbol tarihindeki en büyük oyuncusu olarak kabul edilmektedir. Kariyeri boyunca birçok kişiye ilham vermiş ve futbol dünyasında büyük bir etki yaratmıştır.
            </p>
        </div>
      </div>

    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>