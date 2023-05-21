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
        background: url('../css/images/Home-wallpaper.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .dropdown-content a {
        color: black;
      }
      .ozet-container{
        height: 100%;
      }
      .ozet-box{
        background-color: rgba(255,255,255,0.5);
      }
      .text {
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
          <h2 class="player-name">Barcelona, La Liga'yı Kazanarak Büyük Başarı Elde Etti</h2>
            <p class="text">
              Barcelona futbol takımı, La Liga'da oynadığı üstün performansıyla şampiyonluk kupasını kaldırdı. Sezon boyunca gösterdikleri etkileyici performansla rakiplerine üstünlük sağlayan Barcelona, taraftarlarını sevince boğdu.<br><br>
              Liderliklerini sürdürdükleri sezonda, Barcelona ekibi, hem hücum hattında gösterdikleri etkileyici performansıyla hem de savunma disipliniyle dikkatleri üzerine çekti. Takımın başarısında, Lionel Messi'nin liderlik rolü ve müthiş gol atmaları büyük etki sağladı.<br><br>
              Barcelona'nın teknik direktörü, takımın performansından büyük bir memnuniyet duyduğunu dile getirdi. Taktiksel disiplini ve oyuncuların birlikte çalışma ruhu sayesinde La Liga'da zirveye yerleşmeyi başardıklarını ifade etti.<br><br>
              Barcelona'nın La Liga'yı kazanması, taraftarlar arasında büyük bir coşku yarattı. Şampiyonluğun kutlandığı maç sonrası, takımın taraftarları sokaklara dökülerek oyuncuları kutladı. Stadyumda ve şehirde büyük bir sevinç atmosferi yaşandı.<br><br>
              Bu şampiyonluk, Barcelona'nın zengin tarihindeki birçok başarılarına bir yenisini ekledi. Kulüp, tarihindeki 27. La Liga şampiyonluğunu elde etti ve bu başarıyla İspanya futbol sahnesindeki güçlü konumunu bir kez daha kanıtladı.<br><br>
              Barcelona'nın La Liga'yı kazanması, kulüp ve taraftarlar için gurur verici bir anı olarak hatırlanacak ve futbol dünyasında büyük yankı uyandıracaktır. Şimdi takım, bu büyük zaferin ardından gelecek sezonlarda daha büyük hedeflere ulaşmak için çalışmalara başlayacaktır.
            </p>
        </div>
      </div>
      <div class="ozet-container">
        <div class="ozet-box">
          <h2 class="player-name">Manchester City, Premier Lig Şampiyonu Olarak Zaferini İlan Etti</h2>
            <p class="text">
              Manchester City futbol takımı, üstün performansıyla Premier Lig şampiyonu olarak büyük bir zafer elde etti. Sezonda gösterdikleri olağanüstü performansla rakiplerine üstünlük sağlayan Manchester City, taraftarlarını sevince boğdu.<br><br>
              Liderliklerini sürdürdükleri sezonda, Manchester City ekibi, hücum gücü ve takım savunmasıyla dikkatleri üzerine çekti. Teknik direktörleri ve oyuncuları arasındaki mükemmel uyum, takımın başarısında önemli bir etkendi.<br><br>
              Takımın teknik direktörü, oyuncuların özverili çalışmaları ve disiplinli oyun anlayışı sayesinde Premier Lig'de şampiyonluğa ulaştıklarını belirtti. Oyuncuların kalitesi ve takım ruhu, bu büyük başarıya ulaşmada kilit rol oynadı.<br><br>
              Manchester City'nin Premier Lig'i kazanması, taraftarlar arasında büyük bir coşku yarattı. Şampiyonluğun kutlandığı maç sonrası, takımın taraftarları sokaklara dökülerek oyuncuları kutladı. Stadyumda ve şehirde büyük bir sevinç atmosferi yaşandı.<br><br>
              Bu şampiyonluk, Manchester City'nin zengin tarihindeki birçok başarılarına bir yenisini ekledi. Kulüp, tarihindeki 8. Premier Lig şampiyonluğunu elde ederek İngiltere futbol sahnesindeki güçlü konumunu bir kez daha kanıtladı.<br><br>
              Manchester City'nin Premier Lig'i kazanması, kulüp ve taraftarlar için gurur verici bir anı olarak hatırlanacak ve futbol dünyasında büyük yankı uyandıracaktır. Şimdi takım, bu büyük zaferin ardından gelecek sezonlarda daha büyük hedeflere ulaşmak için çalışmalara başlayacaktır.
            </p>
        </div>
      </div>
      <div class="ozet-container">
        <div class="ozet-box">
          <h2 class="player-name">2023 Şampiyonlar Ligi Finali Heyecanı Dorukta: İki Dev Takım Karşı Karşıya</h2>
            <p class="text">
              Avrupa futbolunun en prestijli turnuvası olan UEFA Şampiyonlar Ligi'nin 2023 finali için heyecan dorukta. İki dev takımın karşı karşıya geleceği bu büyük mücadele, futbol tutkunlarını heyecanlandırıyor.<br><br>
              Finalde, futbol dünyasının en köklü ve güçlü kulüplerinden oluşan takımlar, unvan için mücadele edecek. Şampiyonlar Ligi'nde başarılı bir sezon geçiren ve kendi ülkelerinde de zirvede yer alan bu iki takımın finaldeki performansı merakla bekleniyor.<br><br>
              Taraftarlar, stadlarda ve ekran başında nefes kesici bir maç izleyecekleri için heyecanlı bir bekleyiş içerisindeler. Finalin gerçekleşeceği stadyum, futbolseverlerin büyük bir coşkuyla dolacağı bir atmosfere sahne olacak.<br><br>
              Bu büyük final, sadece şampiyonluk unvanını elde etmek için değil, aynı zamanda futbol tarihinde unutulmaz anılara sahne olacak mücadelelerin yaşanacağı bir platform olacak. Sahada yetenekli oyuncular, teknik direktörlerin stratejileri ve takım çalışmasının ön planda olacağı bir maç bekleniyor.<br><br>
              Şampiyonlar Ligi finali, dünya genelinde milyonlarca futbolseveri bir araya getirecek ve sosyal medyada büyük bir tartışma ve paylaşım akışına neden olacak. Finalin sonucu, futbol dünyasında uzun süre konuşulacak ve kulüp tarihine yazılacak bir hikâyenin başlangıcını belirleyecek.<br><br>
              Her iki takımın da taraftarları, final için büyük bir coşkuyla desteklerini göstermeye hazırlanıyor. Futbolseverler, bu heyecan dolu finalin keyfini çıkaracak ve şampiyonluğa ulaşacak olan takımı büyük bir heyecanla bekleyecekler.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>