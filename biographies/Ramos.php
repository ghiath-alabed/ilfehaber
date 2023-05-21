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
        background: url('../css/images/ramos-biography.jpg') no-repeat center center fixed;
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
                            <a href="../contact.php" onclick="showElement()">
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
          <h2 class="player-name">SERGIO RAMOS</h2>
            <p class="text">
              Sergio Ramos, 30 Mart 1986'da İspanya'nın Camas şehrinde doğdu. Futbola Sevilla'nın altyapısında başladı. Genç yaşta gösterdiği yeteneklerle dikkat çeken Ramos, 2004 yılında Sevilla'nın A takımına yükseldi.
              Ramos, Sevilla'da geçirdiği iki sezon boyunca hızla yükselen bir futbol kariyerine sahip oldu. Defans hattında etkileyici performanslar sergiledi ve kısa sürede dünya futbolunun dikkatini çekti. 2005-2006 sezonunda Sevilla ile UEFA Kupası'nı kazandı ve takımının başarısında önemli bir rol oynadı.
              2005 yazında Real Madrid'e transfer olan Ramos, burada da başarılarını sürdürdü. Real Madrid formasıyla birçok kupa kazandı. UEFA Şampiyonlar Ligi'ni dört kez, La Liga'yı beş kez, Copa del Rey'yi iki kez ve FIFA Kulüpler Dünya Kupası'nı dört kez kazandı. Real Madrid'de uzun yıllar boyunca takımın kaptanlığını da üstlendi.
              Milli takım düzeyinde de Sergio Ramos, İspanya Milli Takımı'nın önemli bir oyuncusu haline geldi. 2008 ve 2012 yıllarında UEFA Avrupa Şampiyonası'nda şampiyonluk yaşadı. Ayrıca 2010 FIFA Dünya Kupası'nda da İspanya Milli Takımı'nın şampiyonluğunda büyük rol oynadı.
              Ramos, defansif becerilerinin yanı sıra gol atma yeteneğiyle de tanınır. Güçlü hava topu mücadeleleri ve sert müdahaleleriyle rakipleri üzerinde baskı kurar. Aynı zamanda liderlik özellikleri gösteren bir oyuncudur ve takımın savunma hattında önemli bir figürdür.
              Sergio Ramos, futbol kariyerinde kazandığı sayısız kupa ve başarıyla tanınan bir futbolcudur. Hem kulüp düzeyinde hem de milli takım düzeyinde birçok büyük maçta önemli roller üstlenmiştir. Defansif yetenekleri, liderlik özellikleri ve kazanma arzusuyla futbol dünyasında saygı gören bir isim olmuştur.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>