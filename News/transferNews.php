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
                    echo "<script src=\"../js/Proje.js\"></script>";
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
          <h2 class="player-name">Messi'nin Barcelona'ya Dönme İhtimali Gündemi Sallıyor</h2>
            <p class="text">
              Futbol dünyasının yıldız isimlerinden Lionel Messi'nin Barcelona'ya dönme ihtimali, tüm dünyada büyük bir heyecan yaratıyor. Barcelona ve Messi arasındaki geçmiş bağlar, bu transfer spekülasyonlarını daha da güçlendiriyor.<br><br>
              Messi'nin Paris Saint-Germain (PSG) ile sözleşmesinin sona ermesine yaklaşmasıyla birlikte, Barcelona'ya geri dönme ihtimali gündemde önemli bir yer tutuyor. İspanyol kulübüyle 21 yıl boyunca birlikte çalışan Messi, kariyerinin büyük bir bölümünü Barcelona formasıyla geçirdi.<br><br>
              Bu olası transfer, futbol dünyasında büyük bir ilgiyle karşılanıyor. Taraftarlar, Messi'nin yeniden Barcelona'ya dönmesiyle birlikte takımın performansının yükselmesi ve büyük başarılara imza atılması konusunda umutlu bir bekleyiş içerisindeler.<br><br>
              Barcelona kulübü yetkilileri, Messi ile ilgili herhangi bir anlaşma veya resmi açıklama yapmaktan kaçınıyor. Ancak kulüp başkanı ve teknik direktörü, Messi'nin geçmişteki katkılarını takdir ettiklerini ve onunla gelecekte tekrar bir araya gelmek istediklerini ifade etti.<br><br>
              Messi'nin Barcelona'ya dönme ihtimali, taraftarlar ve futbol otoriteleri arasında spekülasyonları da beraberinde getiriyor. Transferin finansal ve sözleşme detaylarının yanı sıra diğer kulüplerin de ilgisi, bu süreci daha da karmaşık hale getiriyor.<br><br>
              Gelecekte neler olacağı belirsiz olsa da, Messi'nin Barcelona'ya dönme ihtimali futbol dünyasının nabzını tutmaya devam ediyor. Bu süreç, Messi'nin kariyerinde yeni bir dönemeç olabileceği gibi Barcelona taraftarları için de büyük bir heyecan kaynağı olarak ön plana çıkıyor.
            </p>
        </div>
      </div>
      <div class="ozet-container">
        <div class="ozet-box">
          <h2 class="player-name">Mbappé, Paris'te Kalma Kararıyla Spekülasyonları Sona Erdirdi, Madrid Transferi İçin Gözler Gelecek Sezona Çevrildi</h2>
            <p class="text">
              Paris Saint-Germain'in yıldız futbolcusu Kylian Mbappé, bu sezon Paris'te kalmaya karar vermesiyle transfer spekülasyonlarına son noktayı koydu. Gelecek sezon ise Real Madrid'e transfer olma ihtimali hala gündemde ve futbol dünyası bu potansiyel transferi merakla bekliyor.<br><br>
              Mbappé'nin Paris Saint-Germain ile sözleşmesi bu sezon sona ereceği için transfer dedikoduları büyük bir heyecan yaratmıştı. Ancak genç yıldız, kulüple bir yıl daha anlaşma sağlayarak Paris'te kalmaya karar verdi.<br><br>
              Bu karar, Mbappé'nin Paris Saint-Germain'de kariyerine devam etmek istediğini ve takıma olan bağlılığını gösteriyor. Kulüp yetkilileri, Mbappé'nin kalmasının takıma büyük katkı sağlayacağına inanıyor ve gelecek sezon hedeflere ulaşmada önemli bir rol oynayacağını vurguluyor.<br><br>
              Ancak Madrid transferiyle ilgili spekülasyonlar hala devam ediyor. Mbappé'nin Real Madrid'e olan ilgisi biliniyor ve gelecek sezonun transfer döneminde bu ihtimal yeniden gündeme gelebilir. Real Madrid taraftarları ve futbol otoriteleri, Mbappé'nin gelecekte Madrid'e transfer olmasıyla takıma olan gücünün artacağına ve büyük başarılara imza atacaklarına inanıyor.<br><br>
              Gelecek sezon Mbappé'nin transferi konusunda yeni gelişmelerin beklenmesiyle birlikte, futbol dünyası heyecanla bu potansiyel transferi takip etmeye devam edecek. Mbappé'nin Paris Saint-Germain'deki performansı ve Madrid transferiyle ilgili haberler, önümüzdeki dönemde futbol gündemini sık sık meşgul edecektir.
            </p>
        </div>
      </div>
      <div class="ozet-container">
        <div class="ozet-box">
          <h2 class="player-name">Kimmich, Barcelona'ya Transfer Olma İhtimali Gündemi Sallıyor</h2>
            <p class="text">
              Barcelona futbol kulübü, Bayern Münih'in yıldız orta saha oyuncusu Joshua Kimmich'i transfer etme ihtimaliyle ilgili heyecan verici spekülasyonlarla gündemde. Bu transfer dedikoduları, futbol dünyasında büyük bir ilgiyle takip ediliyor.<br><br>
              Joshua Kimmich, oyun zekası, çok yönlü yetenekleri ve liderlik vasıflarıyla dikkat çeken bir orta saha oyuncusu olarak tanınıyor. Barcelona'nın orta sahada güçlendirme ihtiyacı düşünüldüğünde, Kimmich'in adının geçmesi beklenmedik bir transfer senaryosu olarak öne çıkıyor.<br><br>
              Ancak bu transferin gerçekleşebilmesi için birçok faktörün bir araya gelmesi gerekiyor. Bayern Münih'in Kimmich'i serbest bırakma niyeti olmadığı ve oyuncunun da Alman kulübünde mutlu olduğu biliniyor. Bu nedenle, Barcelona'nın Kimmich'i transfer etmek için büyük bir çaba sarf etmesi gerekecektir.<br><br>
              Barcelona kulübü yönetimi ve teknik ekibi, takımda yapılanma ve güçlendirme çalışmalarını sürdürürken, Kimmich gibi kaliteli bir oyuncunun transferinin takıma büyük katkı sağlayabileceğini düşünüyor. Ancak bu transferin gerçekleşip gerçekleşmeyeceği, önümüzdeki dönemdeki gelişmelere bağlı olarak netlik kazanacak.<br><br>
              Futbol dünyasının ve taraftarların ilgiyle beklediği Kimmich transferi, Barcelona'nın gelecekteki hedeflerini belirlemede önemli bir rol oynayabilir. Kulüp yetkilileri ve taraftarlar, bu potansiyel transferin gerçekleşmesi durumunda, takımın orta sahada güç kazanacağına ve büyük başarılara imza atacağına inanıyor.<br><br>
              Ancak şu anda transferin olasılığı hala belirsizlik taşıyor ve zaman içinde nasıl gelişeceği izlenmesi gereken bir durum olarak karşımızda duruyor.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>