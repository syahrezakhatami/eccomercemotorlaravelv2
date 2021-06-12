<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Dasboard</title>
    <style>
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

.carousel-inner img {
      width: 100%;
      height: 100%;
  }
 
body
{
    background-color: white;
}
 
.badan
{
    width: 880px;
    margin: 35px auto;
    background-color: white;
    padding: 20px;
    overflow: hidden;
}
 
.badan h2
{
    color: crimson;
    border-bottom: 1px solid gainsboro;
    margin: 5px;
    margin-bottom: 13px;
}
 
.list-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 200px;
    margin: 5px;
}
 
.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}
 
.list-produk img
{
    width: 100%;
    height: 175px;
    display: block;
    margin-bottom: 5px;
}
 
.list-produk h4, .list-produk h5
{
    color: crimson;
    text-align: center;
    margin-bottom: 5px;
}
 
.tombol
{
    text-decoration: none;
    border-radius: 7px;
    padding: 7px;
    display: block;
    float: left;
    width: 45%;
    margin: 4px;
    text-align: center;
    color: white;
}
 
.tombol:hover
{
    background-color: black;
    transition-duration: 700ms;
}
 
.tombol-detail
{
    background-color: green;
}
 
.tombol-beli
{
    background-color: crimson;
}
     
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-3">
  <a class="navbar-brand" href="#">Seputar Motor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homeview">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="yamahamotor">Yamaha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hondamotor">Honda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="suzukimotor">Suzuki</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apriliamotor">Aprilia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ducatimotor">Duccati</a>
      </li>
    </ul>
    <a href="mainlogin" class="btn btn-outline-success mr-3">Login</a>
    <a href="mainregister" class="btn btn-outline-danger">Daftar</a>
  </div>
</nav>

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
      <img src="{{asset('storage/1000rr.jpg')}}" alt="" width="1280" height="700">
    </div>
    <div class="carousel-item">
      <img src="{{asset('storage/1000rr.jpg')}}" alt="" width="1280" height="700">
    </div>
    <div class="carousel-item">
      <img src="{{asset('storage/1000rr.jpg')}}" alt="" width="1280" height="700">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="badan">
        <h2>MotoGP</h2>
 
        <div class="list-produk">
            <img src="{{asset('storage/r1.jpg')}}" alt="">
 
            <h4> Yamaha R1</h4>
            <h5>Rp 1000.000.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="{{asset('storage/1000rr.jpg')}}" alt="">  
 
            <h4> CBR 1000RR</h4>
            <h5>Rp 850.000.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

       <div class="list-produk">
            <img src="{{asset('storage/suzuki1000.png')}}" alt=""> 
 
            <h4> Suzuki GSX1000CC</h4>
            <h5>Rp 900.000.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="{{asset('storage/panigale.jpg')}}" alt=""> 
 
            <h4> Duccati Panigale</h4>
            <h5>Rp 1.500.000.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
            <img src="{{asset('storage/aprilia1000.jpg')}}" alt=""> 
 
            <h4> Aprilia 1000CC</h4>
            <h5>Rp 950.000.000-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
    </div>
</div>
<div class="container">
</div>
</body>
<footer class="footer bg-dark text-white" style="height: 200px; padding: 50px;">
    <div class="row">
      <div class="col">
        <h5>Percayakan Layanan ini Pada Kami </h5>
        <p> Hubungi : 0123456789
      </div>
      <div class="col">
        <h5>Social Media</h5>
        <p> Instagram : @seputarmotorid</p>
      </div>
    </div>
</footer>
</html>