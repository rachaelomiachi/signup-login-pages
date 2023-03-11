<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet"href="style.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   

  </head>
  <body >

    <nav>
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">gallary</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">videos</a></li>

      </ul>
    </nav>
    <h1 class="text-center text-warning mt-3 bg-dark" >Welcome Dear
    <?php echo $_SESSION['user_name'];?>
    </h1>
    <!-- carousel starts here -->
    <center>
    <h1 class="text-center text-warning mt-1 bg-dark" >you are welcome to Rea's Bridals</h1>
    <div class="carousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imag/wg9.jpg" class="d-block w-2" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imag/wg7.jpg" class="d-block w-2" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imag/wg6.jpg" class="d-block w-2" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next Image</span>
  </button>
</div>
</div>
</center>

    <div class="container w-90px bg-dark">
        <a href="logout.php" class="btn btn-warning
        mt-5"> Click Here To Logout</a>
    </div>


    <!-- <div class="card mb-3"> -->
  <!-- <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img src="..." class="card-img-bottom" alt="..."> -->
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>