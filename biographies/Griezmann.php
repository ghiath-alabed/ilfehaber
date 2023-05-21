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
        background: url('../css/images/griezmann-biography.jpg') no-repeat center center fixed;
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
          <h2 class="player-name">ANTOINE GRIEZMANN</h2>
            <p class="text">
              Antoine Griezmann, 21 Mart 1991'de Fransa'nın Mâcon şehrinde doğdu. Futbola küçük yaşta başladı ve Fransa'nın Real Sociedad kulübünün altyapısında yetişti. 2009 yılında Real Sociedad'ın A takımına yükseldi ve burada etkileyici bir performans sergileyerek dikkat çekti.
              Griezmann, Real Sociedad'da oynadığı dönemde önemli bir gelişim kaydetti. Hızlı, çevik ve teknik bir oyuncu olarak tanınmaya başladı. 2013-2014 sezonunda La Liga'da 16 gol atarak dikkatleri üzerine çekti ve Avrupa'nın önde gelen kulüplerinin ilgisini çekti.
              2014 yazında Griezmann, İspanyol devi Atlético Madrid'e transfer oldu. Atlético Madrid formasıyla hücum hattında etkili bir oyuncu oldu ve takımının başarılarına katkıda bulundu. 2014 ve 2016 UEFA Şampiyonlar Ligi finallerinde takımıyla mücadele etti ve 2018 UEFA Avrupa Ligi'ni kazanma başarısı gösterdi.
              Milli takım düzeyinde, Griezmann Fransa Milli Takımı'nın önemli bir oyuncusu haline geldi. 2016 UEFA Avrupa Şampiyonası'nda Fransa'yı finale taşıdı ve turnuvanın en iyi oyuncusu seçildi. Ayrıca 2018 FIFA Dünya Kupası'nda Fransa Milli Takımı'nın şampiyonluğunu yaşadı ve altın top ödülüne layık görüldü.
              2019 yazında Griezmann, FC Barcelona'ya transfer oldu. Barcelona formasıyla La Liga'da mücadele etti ve takımının hücum hattında önemli bir rol üstlendi. Griezmann, Barcelona'da hücum becerileri, gol atma yeteneği ve takım oyunculuğuyla tanınır.
              Antoine Griezmann, sahip olduğu hız, çeviklik ve teknik becerileriyle tanınan etkileyici bir futbolcudur. Top kontrolü, şut yeteneği ve gol atmada etkili olmasıyla ön plana çıkar. Kariyeri boyunca birçok önemli maçta ve turnuvada başarılı performanslar sergileyen Griezmann, Fransa ve Barcelona'nın önemli oyuncularından biri olarak kabul edilir.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>