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
        background: url('../css/images/ibrahimovic-biography.jpg') no-repeat center center fixed;
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
          <h2 class="player-name">IBRAHIMOVIC</h2>
            <p class="text">
              Zlatan Ibrahimović, 3 Ekim 1981'de İsveç'in Malmö şehrinde doğdu. Futbola yerel bir takım olan Malmö FF'nin altyapısında başladı. Hızla yetenekleriyle dikkat çeken Ibrahimović, 1999 yılında Malmö FF'nin A takımına yükseldi.
              İbrahimović, Malmö FF'de sergilediği etkileyici performansla Avrupa'nın önde gelen kulüplerinin dikkatini çekti. 2001 yılında Hollanda'nın Ajax kulübüne transfer oldu. Ajax'ta oynadığı dönemde başarılı bir performans sergileyerek Hollanda Eredivisie şampiyonluğu yaşadı.
              2004 yılında İtalyan devi Juventus'a transfer olan Ibrahimović, burada da etkileyici bir kariyer geçirdi. Juventus ile Serie A'da birkaç şampiyonluk yaşadı ve takımının önemli bir parçası haline geldi. 2006 yılında ise Inter Milan'e transfer oldu. Inter Milan ile üç Serie A şampiyonluğu kazandı ve gol krallığına ulaştı.
              Ibrahimović, kariyeri boyunca birçok ünlü kulüpte forma giydi. Barcelona, AC Milan, Paris Saint-Germain (PSG), Manchester United gibi takımlarda oynadı. Bu kulüplerde birçok başarıya imza attı. PSG ile Ligue 1'de dört kez şampiyon oldu ve gol krallığına ulaştı. Manchester United ile UEFA Avrupa Ligi şampiyonluğu yaşadı.
              İsveç Milli Takımı'nın da önemli bir oyuncusu olan Ibrahimović, milli formayı birçok kez giydi. Milli takım ile UEFA Avrupa Şampiyonası ve FIFA Dünya Kupası'nda mücadele etti.
              Ibrahimović, futbol kariyerindeki güçlü fiziği, teknik becerileri ve gol atan yeteneğiyle tanınır. Olağanüstü vuruşları ve akrobatik hareketleriyle bilinir. Kendine güveni yüksek olan ve liderlik özellikleri gösteren bir oyuncudur.
              Zlatan Ibrahimović, futbol dünyasında uzun bir kariyere sahip olan ve birçok önemli kulüpte başarılar elde etmiş bir futbolcudur. Kendine özgü kişiliği ve oyun tarzıyla futbolseverlerin ilgisini çeken bir isim olmuştur.
            </p>
        </div>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>