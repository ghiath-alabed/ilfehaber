<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLFE.Haber</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/images/icon.png" type="image/x-icon">
    <style>
      body {
        font-family: Arial;
        background-color: white;
        background: url('css/images/biography-wallpaper.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      .iletisim{
        border: 0.1px solid rgba(255,255,255,0.5);
        border-radius: 20px;
        backdrop-filter: blur(15px);
        transition: background-color 0.3s ease;
      }
    </style>
  </head>

  <body>
    <section>
      <div class="header-container">
        <header>
          <h1 class="header-title">İLFE HABER</h1>
            <nav class="navbar">
              <a href="index.php" class="navbar-link" title="Anasayfa" target="_self">
                Anasayfa
              </a>  
              <a href="worldCup.php" class="navbar-link" title="Dünya kupası" target="_self">
                Dünya kupası
              </a>
              <a href="#" class="navbar-link" title="Oyuncuların Hayat Özti" target="_self"> <!-- _blank -->
                Hayat Özti
              </a>
            </nav>
            <div>
              <?php
                include_once 'includes/dbh.inc.php';
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
                            <a href="#" onclick="showElement()">
                            <ion-icon name="help-circle-outline"></ion-icon>
                              Hakkımızda
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
  
      <script type="text/javascript" src="Proje.js"></script>
      <div id="myElement">  <!-- class="hidden" -->
        <footer>
          <div class="iletisim">
            <p>Iletişim</p>
            <a href="https://www.facebook.com/profile.php?id=100012463111932" target="_blank">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCcepN48Nslzt_MoXj_6m3Dg" target="_blank">
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="https://twitter.com/ilyaselabed" target="_blank">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/1alabed0/" target="_blank">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </footer>
      </div>
    </section>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>