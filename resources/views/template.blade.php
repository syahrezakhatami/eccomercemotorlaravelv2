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

<div class="container">
 @yield('templateinfo')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</body>
</html>