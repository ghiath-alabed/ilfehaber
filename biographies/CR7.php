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
        background: url('../css/images/cristiano-biography.jpg') no-repeat center center fixed;
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
          <h2 class="player-name">CRISTIANO RONALDO</h2>
          <div class="ozet-metni">
            <p class="text">
              Cristiano Ronaldo, 5 Şubat 1985'te Portekiz'in Madeira adasında doğdu. Futbola küçük yaşlarda başladı ve Sporting Lizbon genç takımında yetişti. Hızla gelişen yetenekleriyle dikkat çeken Ronaldo, 2003 yılında 18 yaşındayken Sporting Lizbon'dan İngiliz kulübü Manchester United'a transfer oldu.
              Manchester United'da oynadığı dönemde büyük başarılar elde etti. 2008'de UEFA Şampiyonlar Ligi'ni kazanmalarında önemli bir rol oynadı ve takımıyla üç Premier League şampiyonluğu yaşadı. Ronaldo aynı zamanda 2008'de FIFA Ballon d'Or (Altın Top) ödülünü kazanarak dünyanın en iyi futbolcusu seçildi.
              2009 yılında İspanya'nın Real Madrid kulübüne dünya rekoru kıran bir transfer ücretiyle transfer oldu. Real Madrid'de oynadığı dönemde inanılmaz bir performans sergiledi ve birçok gol rekoru kırdı. Ronaldo, Real Madrid formasıyla dört kez UEFA Şampiyonlar Ligi'ni kazandı ve La Liga'da iki şampiyonluk yaşadı. 2016 ve 2017 yıllarında FIFA Ballon d'Or ödülünü tekrar kazanarak toplamda beş kez bu prestijli ödülü elde etti.
              2018 yazında Ronaldo, İtalyan kulübü Juventus'a transfer oldu. Juventus'ta da etkileyici bir performans sergileyerek takımının başarılarına katkıda bulundu. Ronaldo, Juventus ile birçok Serie A şampiyonluğu yaşadı ve kulüp kariyerinde 1000'in üzerinde gol atma başarısını gösterdi.
              Milli takım düzeyinde de Cristiano Ronaldo, Portekiz Milli Takımı formasıyla birçok başarıya imza attı. 2016 yılında Portekiz Milli Takımı ile UEFA Avrupa Şampiyonası'nı kazandı. Ayrıca Portekiz'i FIFA Konfederasyonlar Kupası'nda ikincilik elde ettiği 2017'de ve UEFA Uluslar Ligi'nde şampiyon olduğu 2019'da temsil etti.
              Cristiano Ronaldo, güçlü fiziği, hızı, atletizmi ve şut yetenekleriyle tanınır. Olağanüstü bir golcüdür ve kafa vuruşları da dahil olmak üzere çeşitli şekillerde gol atma becerisine sahiptir. Kariyeri boyunca birçok rekor kıran Ronaldo, futbol dünyasında eşi benzeri görülmemiş bir etki yaratmış ve dünyanın en iyi futbolcularından biri olarak kabul edilmektedir.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>