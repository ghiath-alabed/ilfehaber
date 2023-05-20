<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLFE.Haber</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/images/icon.png" type="image/x-icon">
    <style>
      body {
        font-family: Arial;
        background-color: white;
        background: url('../css/images/neymar-biography.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .dropdown-content a {
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
          <h2 class="player-name">NEYMAR JR</h2>
          <div class="ozet-metni">
            <p class="text">
              Neymar, tam adıyla Neymar da Silva Santos Júnior, 5 Şubat 1992'de Brezilya'nın Mogi das Cruzes şehrinde doğdu. Futbola küçük yaşta başladı ve Santos kulübünün genç takımında yetişti. Hızla dikkat çeken yetenekleriyle tanınan Neymar, 2009 yılında Santos'un A takımına yükseldi.
              Santos'ta oynadığı dönemde büyük başarılar elde etti. 2010 ve 2011 yıllarında Santos ile Copa do Brasil şampiyonluğu yaşadı. 2011'de ise Copa Libertadores'yi kazanarak takımını Güney Amerika'nın en prestijli kulüp turnuvasında zaferle tanıştırdı. Ayrıca 2011 yılında Güney Amerika'nın en iyi futbolcusu seçilerek olağanüstü yetenekleriyle dünya çapında tanınmaya başladı.
              2013 yılında Neymar, dünya futbolunun en önemli kulüplerinden biri olan FC Barcelona'ya transfer oldu. Barcelona'da Lionel Messi ve Luis Suárez ile oluşturduğu ünlü "MSN" üçlüsüyle büyük bir etki yarattı. Barcelona formasıyla üç La Liga şampiyonluğu, iki Copa del Rey zaferi ve UEFA Şampiyonlar Ligi'nde zafer sevinci yaşadı.
              2017 yazında Neymar, dünya rekoru kıran bir transfer ücretiyle Paris Saint-Germain (PSG) takımına transfer oldu. PSG'de oynadığı dönemde Fransa Ligue 1'de birçok şampiyonluk yaşadı ve takımının önemli bir parçası oldu. Aynı zamanda PSG ile çeşitli kupa mücadelelerine katıldı ve takımına önemli goller ve asistler sağladı.
              Milli takım düzeyinde Neymar, Brezilya Milli Takımı formasıyla da başarılar elde etti. 2013 FIFA Konfederasyonlar Kupası'nda şampiyonluğa ulaştı ve turnuvanın en iyi oyuncusu seçildi. Ayrıca 2019 Copa America'da da Brezilya'yı şampiyonluğa taşıdı.
              Neymar, hızı, çevikliği, top kontrolü ve sıra dışı dribbling yetenekleriyle tanınır. Sahada yaratıcı ve etkileyici bir oyuncu olarak göze çarpar. Aynı zamanda gol atmada da başarılıdır ve hücum hattında etkili bir şekilde pozisyon alır. Neymar, dünya futbolunda genç yaşta kazandığı ün ve olağanüstü yetenekleriyle futbolseverlerin ilgisini çeken bir oyuncudur.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>