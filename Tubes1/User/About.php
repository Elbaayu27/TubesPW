<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- javascript sama jQuery nya ba -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>About Matcha Addict</title>
</head>
<body>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
  .green{
    background-color: #93bc7e;
  }
  .c1{
    background-color: lavender;
  }
  .c2{
    background-color: pink;
  }
  .c3{
    background-color: lavender;
  }
</style>
    <title>Matcha Addict - A Good Deal of Matcha</title>
  </head>
  <body>
    <div class="container">
      <div class="row green">
        <div class="col-md-12">
          <h2 align="left"> 
            <font face="sweet pea">
          <u>
          MatchaAddict
          </u>
        </font> 
      </h2>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Dessert.php">Dessert</a>
          <a class="dropdown-item" href="Baverage.php">Baverage</a>
        </div>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="alert('Oops! Cannot Found') ">Search</button>
    </form>
  </div>
</nav>
        </div>
      </div>
    </div>
    <div class="container green">
    	
<div class="card" style="width: 70rem;">
  <img height="400px" class="card-img-top" src="https://1.bp.blogspot.com/-HHivCBYUD6o/V5Y_SZq2D9I/AAAAAAAAZIc/BEiJyxqmMb0uk1-OkElcZODYBEVGPaGRQCLcB/s1600/IMG_5815.JPG" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><font face="sweet pea">MatchaAddict</font>-<u>A Good Deal of Matcha</u></h5>
    <p class="card-text">PT Matcha Addict Indonesia opened its first outlet in Jakarta in 2003, bringing the renowned Japanese cafe brand to matcha enthusiasts in Indonesia. It has since then subsequently grown well, opening up new outlets in other major cities in Indonesia: Bandung, Surabaya, Medan, Bali, Makassar, Yogyakarta, Pekanbaru, Batam and Palembang, as well as well as expanding its presence in Jakarta. Currently there are thirty five Matcha Addict outlets in total nationwide, with eighteen of them spread across Greater Jakarta.

<br> Matcha Addict's outlets are best known for their simple-yet-modern approach to its open kitchen concept, employing distinctive touches of Japanese culture. Matcha Addict's open kitchen allows its patrons to take a look at what's going on as their orders are being prepared. Matcha Addict is also proud to have become the first matcha cafe in Indonesia to feature the characteristic matcha dish with a conveyor belt. <br> Matcha Addict aims to provide an exceptional dessert experience that exceeds the expectations of customers, by blending the authenticity of Japanese highly-praised taste and a signature touch of local flavor, with the highest level of service and comfort. <br> Paying attention not only to taste, Matcha Addict focuses also on the quality of its food as well as service.</p>
  </div>
</div>

    <div class="container">
  <div class="row green">
    <div class="col-md-12">
      <p align="left">Copyright © 2018 Matcha Addict Indonesia. All rights reserved. Disclaimer. Privacy Policy</p>
      <?php 
    include 'Koneksi.php';
    $no = 1;
    ?>
    </div>
  </div>
</div>
</div>
</body>
</html>