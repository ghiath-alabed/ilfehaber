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
        background: url('../css/images/mbappe-biography.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .dropdown-content a {
        color: black;
      }
      .text {
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
          <h2 class="player-name">KYLIAN MBAPPE</h2>
            <p class="text">
              Kylian Mbappé, 20 Aralık 1998'de Fransa'nın Paris şehrinde doğdu. Futbola küçük yaşta başladı ve AS Bondy kulübünün altyapısında futbol yeteneklerini geliştirdi. Hızla dikkatleri üzerine çeken Mbappé, 2015 yılında AS Monaco'nun genç takımına transfer oldu.
              Mbappé, AS Monaco'da hızla yükselen bir yıldız haline geldi. 2016-2017 sezonunda Monaco ile Ligue 1 şampiyonluğu yaşadı ve takımın başarısında büyük rol oynadı. Aynı sezon UEFA Şampiyonlar Ligi'nde de etkileyici performanslar sergileyerek dünya futbolunun dikkatini çekti.
              2017 yazında Mbappé, Paris Saint-Germain (PSG) takımına transfer oldu. PSG ile birlikte Fransa Ligue 1'de birçok şampiyonluk yaşadı. Hücum hattında etkili bir oyuncu olarak göze çarpan Mbappé, hızı, çevikliği ve bitiricilik becerisiyle tanınır. Aynı zamanda genç yaşına rağmen büyük maçlarda ve uluslararası platformlarda önemli goller atmıştır.
              Milli takım düzeyinde de Mbappé, Fransa Milli Takımı formasını giymektedir. 2018 FIFA Dünya Kupası'nda Fransa Milli Takımı ile büyük başarıya imza attı. Turnuvanın en genç oyuncularından biri olarak ön plana çıkan Mbappé, performansıyla takımını şampiyonluğa taşıdı ve aynı zamanda turnuvanın en iyi genç oyuncusu seçildi.
              Mbappé, hızı, çevikliği, top kontrolü ve bitiricilik yetenekleriyle tanınır. Sahada hızlı bir şekilde dripling yapabilen, güçlü bir vuruşa sahip olan ve akıllıca pozisyon alan bir oyuncudur. Genç yaşına rağmen futbol dünyasının en parlak yeteneklerinden biri olarak kabul edilir.
              Kylian Mbappé, olağanüstü yetenekleri ve başarılarıyla genç yaşına rağmen dünya futbolunun en tanınmış oyuncularından biri haline gelmiştir. Gelecekte de kariyerinin zirvesinde olması beklenen Mbappé, futbol dünyasında heyecan verici bir geleceğe sahip olan bir oyuncudur.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>