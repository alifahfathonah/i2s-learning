<!DOCTYPE html>
<html lang="en">
<head>
  <title>MTs. Ibnu Husain Innofative Islamic School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .myheader{
    background-color: #2c5c99;
    color: white;
    /*padding-bottom: 0;*/
  }
  .mynav{
    margin-top:5px;
    background-color: #1e3f62 ;
  }

  .myfoot{
    background-color: #2c5c99;
    color: white;
    padding: 10px;
  }
  .nav-item{
    border: 1px ;
    border-right-style: solid;
    border-color: white;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center myheader" style="margin-bottom:0">
  <img src="<?php echo base_url('template/images/logo_lg.png')?>" alt="Logo" style="width:100px;margin-bottom: 20px;">
  <h2>Selamat Datang</h2>
  <h1>MTs. Ibnu Husain Surabaya</h1>
  <p>Jl. Pragoto No. 39-41, Sidotopo, Semampir
Kota Surabaya - Jawa Timur
60152</p> 
</div>

<nav class="navbar navbar-expand-sm navbar-dark mynav justify-content-end sticky-top">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url('template/images/logo_sm.png')?>" alt="Logo" style="width:40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://i2s-learning.com/elearning/exam_try" target="_blank">TryOut</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://i2s-learning.com/elearning" target="_blank">Ujian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('mendaftar')?>" target="_blank">PPDB 2020</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://perpus.i2s-learning.com" target="_blank">Perpus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://elearning.kemenag.go.id" target="_blank">E-learning Kemenag</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://i2s-learning.com/wp/" target="_blank">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/channel/UC67FgtfTIn-Dj7VFM89G25g" target="_blank">Channel Youtube</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/groups/577783889610185/" target="_blank">Forum Alumni</a>
      </li>    
    </ul>
  </div>  
</nav>

<!-- (1) tombol ujian (2) tombol  ppdb (3) tombol perpus (4) tombol link e learning kemenag pusat (5). ibnu husain news (6) tombol yutub mts ibnu husain -->
<div class="container mt-5">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('template/images/banner1.jpg')?>" alt="banner1" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('template/images/banner2.jpg')?>" alt="banner2" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('template/images/banner3.jpg')?>" alt="banner3" style="width:100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div></div>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://i2s-learning.com/elearning" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol1.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="<?php echo base_url('mendaftar')?>" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol2.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://perpus.i2s-learning.com" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol3.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
  </div>

<div class="row mt-4">
    <div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="http://elearning.kemenag.go.id" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol4.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://i2s-learning.com/wp/" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol5.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://www.youtube.com/channel/UC67FgtfTIn-Dj7VFM89G25g" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol6.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
  </div>
 
<div class="row mt-4">
    <div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://i2s-learning.com/elearning/exam_try" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol7.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://www.facebook.com/groups/577783889610185/" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol8.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
<div class="col-sm-4">
      <div class="card">
          <div class="card-body">
            <a href="https://goo.gl/maps/oZwvYrNzqppgAoZG7" target="_blank"><img class="card-img-top" src="<?php echo base_url('template/images/tombol9.jpg')?>" alt="Card image" style="width:100%"></a>
          </div>
        </div>
    </div>
  </div>

</div>

<div class="myfoot text-center mt-3" style="margin-bottom:0">
  <p style="margin-bottom: 0;">Hak Cipta MTs. Ibnu Husain @2020</p>
  <h5 style="color: #428fd3;font-size: x-small;">Supported By AmanahJaya Corp. mundinkcoy@gmail.com</h5>
</div>

</body>
</html>
