<?php
$page_title = 'Arbor & Hue';
$pgDesc = 'Main Page';
$keyWords = 'Keywords here';

include ('header.php');
?>
<main>
    <!-- Carousel -->
    <div class="container-lg my-3">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
          </ol>
          
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="/pictures/Rainier_590x.jpg" class="d-block w-100" alt="Slide 1">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-dark">Laser Etched Paintings</h3>
                    <p class="text-dark">Rainier!</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="/pictures/BirdsOnTheHorizon.jpg" class="d-block w-100" alt="Slide 2">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h3 class="text-dark">Laser Etched Paintings</h3>
                    <p class="text-dark">Birds On The Horizon!</p> -->
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="/pictures/Emerald City.jpg" class="d-block w-100" alt="Slide 3">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h3 class="text-light">Laser Etched Paintings</h3>
                    <p class="text-light">Emerald City!</p> -->
                  </div>
              </div>
          </div>
  
          <!-- Carousel controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
      </div>
  </div>
  
  <!-- 3x3 cards -->
  <h2 class="text-center">Featured Collection</h2>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card h-100">
        <img src="/pictures/Emerald City.jpg" class="card-img-top" alt="emerald city">
        <div class="card-body">
          <h5 class="card-title">Emerald City</h5>
          <p class="card-text">Emerald City comes in 6x8, 8x10, 12x16,and 16x20.</p>
          <a class="btn btn-primary" href="Shop.html">Buy</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100">
        <img src="/pictures/Market CLock.jpg" class="card-img-top" alt="Clock">
        <div class="card-body">
          <h5 class="card-title">Market Clock</h5>
          <p class="card-text">Market Clock comes in 6x6, 8x8, 12x12, and 16x16.</p>
          <a class="btn btn-primary" href="Shop.html">Buy</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100">
        <img src="/pictures/Rainier_590x.jpg" class="card-img-top" alt="Rainier">
        <div class="card-body">
          <h5 class="card-title">Rainier</h5>
          <p class="card-text"> Rainier comes in 6x8, 8x10, 12x16,and 16x20.</p>
          <a class="btn btn-primary" href="Shop.html">Buy</a>
        </div>
      </div>
    </div>
  

    
  </main>

<?php
include('footer.php');
?>