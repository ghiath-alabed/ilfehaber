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
        background: url('css/images/Home-wallpaper.jpg') no-repeat center center fixed;
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
              <a href="#" class="navbar-link" title="Anasayfa" target="_self">
                Anasayfa
              </a>  
              <a href="worldCup.php" class="navbar-link" title="Dünya kupası" target="_self">
                Dünya kupası
              </a>
              <a href="biography.php" class="navbar-link" title="Oyuncuların Hayat Özti" target="_self"> <!-- _blank -->
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
                            <a href="contact.php" onclick="showElement()">
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




<!-- <?php
                // include_once 'includes/dbh.inc.php';
                // session_start();
                // if (isset($_SESSION["id"])) {
                //   $id = $_SESSION["id"];
                //   echo "<script>console.log('$id');</script>";
                //   $sql = "SELECT * FROM User WHERE id = '$id'";
                //   $result = mysqli_query($conn, $sql);
                //   if (mysqli_num_rows($result) > 0) {
                //     // User exists, continue and navigate to the index
                //     $row = mysqli_fetch_assoc($result);
                //     $email = $row['email'];
                //     $username = $row['username'];
                //     echo "<script src=\"js/Proje.js\"></script>";
                //     // Here add header html
                //     echo "<a class=\"Login-button\" onclick=\"logout()\">
                //         Logout '$username'
                //     </a>";
                //   }
                // } else {
                //     echo '<a class="Login-button" href="login.php#" title="login-page">
                //       <ion-icon name="person-circle-outline"></ion-icon>
                //         Login / Register
                //       <ion-icon name="person-add-outline"></ion-icon>
                //     </a>';
                // }
              ?> -->



<!-- 
<div class="container">
  <div class="news-section">
    <div class="news-article">
      <img src="https://via.placeholder.com/390x260.png" alt="News Image" />
      <h2>Future of Transportation - Hyperloop</h2>
      <p>
        The world is about to witness a revolution in transportation, as
        Hyperloop projects continue to advance.
      </p>
    </div>
    <div class="news-article">
      <img src="https://via.placeholder.com/390x260.png" alt="News Image" />
      <h2>Space Tourism on the Rise</h2>
      <p>
        With recent advancements from the likes of SpaceX and Blue Origin,
        space tourism is quickly becoming a reality.
      </p>
    </div>
    <div class="news-article">
      <img src="https://via.placeholder.com/390x260.png" alt="News Image" />
      <h2>Solar Power Breakthroughs</h2>
      <p>
        Researchers are developing innovative materials to increase the
        efficiency of solar power generation.
      </p>
    </div>
    <!-- Add more news articles below -->
  <!-- </div>
</div> -->