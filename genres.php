<!DOCTYPE html>

<?php include "db.php";?>

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
    <!-- <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span> -->

    <ul class="navbar-nav">
      <li><a href="#">Username</a></li>
      <li><a href="#"><i class="fas fa-user"></i></a></li>
      <li><a href="home.php">Home</a></li>
      <li><a href="view_genres.php">Genres</a></li>
    </ul>
  </nav>

  <!-- <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="home.php">Home</a>
    <a href="genres.php">Genres</a>
  </div> -->

  <div id="main">

    <section class="genres_main_section">
      <div class="call_to_action">
        <h1 class="title">Genres</h1>

        <div class="icon_section"></div>

      </div>
      <div></div>

    </section>
    
    <!-- SELECT ALL GENRES TABLE -->

    <?php 
      //$query = "SELECT * FROM genres"; 
      //$select_all_genres_query = mysqli_query($connection,$query);
    ?>




    <?php 

if (isset($_GET['source'])) {


$source = $_GET['source'];

  // compare variable with each case.
  switch($_GET['source']){
    // if source is equal to add post
    case 1;

    echo "hello";

    // stop
    break;

    // if source is equal to this page
    case 34;

    //then display this
    include "THIS is 34";

    // stop
    break;
    
    case 'house';

    //then display this
    include "view_genres.php";

    // stop
    break;
  }
}

?>
    
    <!-- Home cards 1 -->
    <section class="home-cards">

      <!-- DISPLAY GENRES -->
      
      <?php foreach($select_all_genres_query as $row){ ?>

<!-- 
when the link is clicked I needed to send the songID and the page. I think I catch the songID on the genre page. compare this page with home.php.  
-->

      <a class="icon_link" href="genre.php?<?php echo $row['genreID']?>">
        <div>
          <?= $row['genre_icon'] ?>
          <h3><?= $row['genreTitle'] ?></h3>
        </div>
      </a>
      <?php }?>
      <!-- <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> -->
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
