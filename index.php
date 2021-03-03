
<!-- autentifikasi -->
<?php require_once("includes/auth.php"); ?> 

<!DOCTYPE html>
<html>
  <head>
  <title>Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
  </head>
    <body>

    <!-- Menampilkan header -->  
    <?php include "includes/header.php" ?>

    <!-- Membuat Carausel/slide show-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/3.jpg" alt="Chania" class="gambar-slider">
                <div class="carousel-caption">
                  <h3>Benar</h3>
                  <p>SDIT TERPADU</p>
                </div>
              </div>

              <div class="item">
                <img src="images/4.jpg" alt="Chicago" class="gambar-slider">
                <div class="carousel-caption">
                  <h3>Pintar</h3>
                  <p>SDIT TERPADU</p>
                </div>
              </div>

              <div class="item">
                <img src="images/5.jpg" alt="New York" class="gambar-slider">
                <div class="carousel-caption">
                  <h3>Segar</h3>
                  <p>SDIT TERPADU</p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>

    <!-- Menampilkan footer-->  
    <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>