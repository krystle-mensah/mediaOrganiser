<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music</title>
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/4c907bd459.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="#">Username</a></li>
      <li><a href="#"><i class="fas fa-user"></i></a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="home.php">Home</a>
    <a href="genres.php">Genres</a>
  </div>

  <div id="main">

    <section class="genres_main_section">
      <div class="call_to_action">
        <h1 class="title">Genres</h1>

        <div class="icon_section"></div>

      </div>
      <div></div>

    </section>
    
    <!-- Home cards 1 -->
    <section class="home-cards">
      <a href="genre.php">
        <div>      
          <i class="fas fa-guitar"></i>
          <h3>Acoustic</h3>
          <!-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> -->
        </div>
      </a>
      <a href="#">
        <div>
          <i class="fas fa-headphones"></i>
          <h3>HipHop</h3>
          <!-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> -->
        </div>
      </a>
      <a href="#">
      <div>
        <i class="fa fa-compact-disc"></i>
        <h3>House</h3>
        <!-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> -->
      </div>
    </a>
    </section>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      // document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</body>
</html>