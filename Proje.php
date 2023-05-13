<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLFE.Haber</title>
    <link rel="stylesheet" href="css/Proje.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>

  <body>
    <div class="header-container">
      <header>
        <h1>İLFE HABER</h1>
        <a class="Login-button" href="test.php#" title="login-page" target="_blank">
          <ion-icon name="person-circle-outline"></ion-icon>
          Login / Register
          <ion-icon name="person-add-outline"></ion-icon>
        </a>
          <nav>
            <ul>
              <li>
                <a href="http://127.0.0.1:5500/denemeler/Haber.html" title="Anasayfa" target="_blank">
                  Anasayfa
                </a>
              </li>
              <li>
                <a href="http://127.0.0.1:5500/denemeler/Haber1.html" title="Dünya kupası" target="_blank">
                  Dünya kupası
                </a>
              </li>
              <li>
                <a href="#" title="Oyuncuların Hayat Özti" target="_self"> <!-- _blank -->
                  Hayat Özti
                </a>
              </li>
              <li>
                <a href="#" title="Favori Oyuncular Listesi" target="_self">
                  Favorilerim
                </a>
              </li>
              <li>
                <a href="#" title="Hakkımızda & İletişim" target="_self" onclick="showElement()">
                  Hakkımızda & İletişim
                </a>
              </li>
            </ul>
          </nav>
      </header>
    </div>  

    <script type="text/javascript" src="Proje.js"></script>
    <div id="myElement" class="hidden">
      <footer>
        <div class="iletisim">
          <p>iletişim</p>
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
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>








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