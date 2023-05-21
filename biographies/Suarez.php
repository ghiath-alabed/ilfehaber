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
        background: url('../css/images/suarez-biography.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .dropdown-content a {
        color: black;
      }
      .player-name{
        color: white;
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
          <h2 class="player-name">LUIS SUAREZ</h2>
            <p class="text">
              Luis Suárez, 24 Ocak 1987'de Uruguay'ın Salto şehrinde doğdu. Futbola yerel bir kulüp olan Nacional'in altyapısında başladı. Genç yaşta gösterdiği yeteneklerle dikkat çeken Suárez, 2005 yılında Nacional'in A takımına yükseldi.
              2006 yılında Hollanda'nın Groningen kulübüne transfer olan Suárez, burada etkileyici bir performans sergiledi ve gol atan yeteneğiyle ön plana çıktı. Performansıyla dikkat çeken Suárez, 2007 yılında Eredivisie'nin güçlü takımlarından Ajax'a transfer oldu.
              Ajax'ta oynadığı dönemde Suárez, Hollanda'da futbol kariyerini daha da parlattı. Hücum hattında etkili bir oyuncu olarak göze çarpan Suárez, gol krallığına ulaştı ve Ajax ile birlikte Eredivisie şampiyonluğunu yaşadı.
              2011 yazında İngiliz kulübü Liverpool'a transfer olan Suárez, burada da büyük başarılar elde etti. Liverpool formasıyla birçok gol attı ve takımının liderlerinden biri haline geldi. 2013-2014 sezonunda Premier League'de büyük bir performans sergileyerek gol kralı oldu ve Liverpool'u şampiyonluğa taşıma çabasıyla hatırlanır.
              2014 yılında İspanyol devi Barcelona'ya transfer olan Suárez, Barcelona ile büyük bir başarı yaşadı. Lionel Messi ve Neymar ile birlikte oluşturdukları "MSN" üçlüsüyle ünlendi ve Barcelona'yı birçok kupa kazanmada etkili oldu. Barcelona ile La Liga, Copa del Rey, UEFA Şampiyonlar Ligi ve FIFA Kulüpler Dünya Kupası gibi önemli başarıları elde etti.
              Uruguay Milli Takımı'nın da önemli bir oyuncusu olan Suárez, milli formayı birçok kez giydi. 2011 Copa America'da Uruguay'ın şampiyonluğunda önemli bir rol oynadı. Ayrıca 2010 ve 2014 FIFA Dünya Kupası'nda da ülkesini başarıyla temsil etti.
              Luis Suárez, hızlı ve teknik bir forvet oyuncusu olarak tanınır. Güçlü vuruşları, gol atan becerileri ve rakip savunmaları zorlayan oyun tarzıyla bilinir. Aynı zamanda mücadeleci ve tutkulu bir oyuncudur.
              Suárez, futbol kariyeri boyunca birçok önemli kulüpte başarılar elde etmiş bir futbolcudur. Hem kulüp düzeyinde hem de milli takım düzeyinde önemli maçlarda ve turnuvalarda etkili performanslar sergilemiştir. Olağanüstü yetenekleriyle tanınan Suárez, futbol dünyasında iz b
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>