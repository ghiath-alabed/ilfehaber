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
        background: url('../css/images/pique-biography.jpg') no-repeat center center fixed;
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
          <h2 class="player-name">GERARD PIQUE</h2>
            <p class="text">
              Gerard Piqué, 2 Şubat 1987'de İspanya'nın Barselona şehrinde doğdu. Futbola FC Barcelona'nın altyapısında başladı. Genç yaşlarda gösterdiği yeteneklerle dikkat çekti ve hızla yükselen bir futbol kariyerine sahip oldu.
              Piqué, 2004 yılında FC Barcelona'nın A takımına yükseldi. İlk dönemlerinde oyun tecrübesi kazanmak için Manchester United'a kiralık olarak gönderildi ve burada Premier League şampiyonluğu yaşadı. 2008 yılında FC Barcelona'ya geri döndü ve takımının başarılarına büyük katkıda bulundu.
              Barcelona formasıyla birçok başarıya imza atan Piqué, 2008-2009 sezonunda UEFA Şampiyonlar Ligi şampiyonluğunu, 2009-2010 ve 2010-2011 sezonlarında La Liga şampiyonluklarını, 2009, 2012, 2015 ve 2019 yıllarında ise Copa del Rey zaferlerini yaşadı. Ayrıca 2009 ve 2011 yıllarında FIFA Kulüpler Dünya Kupası'nı kazandı.
              Milli takım düzeyinde, Gerard Piqué İspanya Milli Takımı formasını giydi. 2010 FIFA Dünya Kupası'nda İspanya'nın şampiyonluğunu yaşayan takımda önemli bir rol oynadı. Ayrıca 2012 ve 2016 yıllarında UEFA Avrupa Şampiyonası'nda da şampiyonluk sevinci yaşadı.
              Piqué, güçlü fiziği, iyi bir top kontrolü ve pozisyon bilinciyle tanınır. Defans hattında liderlik özellikleri gösteren bir oyuncu olarak sahada etkili bir şekilde pozisyon alır. Ayrıca hava topu mücadelelerinde de başarılıdır. Kariyeri boyunca defansif gücünü ve top dağıtma becerilerini göstermiş bir futbolcudur.
              Gerard Piqué, FC Barcelona'nın sembol isimlerinden biri haline gelmiştir. Kulüp ile birçok önemli başarı yaşayan ve milli takımda da ülkesini en iyi şekilde temsil eden bir futbolcudur. Hem kulüp düzeyinde hem de milli takım düzeyinde kazandığı şampiyonluklarla futbol kariyerinde iz bırakmıştır.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>