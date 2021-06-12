<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Suzuki</title>
    <style>
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
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
<nav class="navbar navbar-default" role="navigation">
 <div class="container-fluid">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="#">SeputarMotor.Com</a>
 </div>

<!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav">
 <li><a href="homeview">Home</a></li>
 <li class="active"><a href="yamahamotor">Yamaha</a></li>
 <li><a href="hondamotor">Honda</a></li>
 <li class="active"><a href="suzukimotor">Suzuki</a></li>
 <li><a href="ducatimotor">Duccati</a></li>
 <li class="active"><a href="apriliamotor">Aprilia</a></li>
 </ul>
 <form class="navbar-form navbar-left" role="search">
 <div class="form-group">
 <input type="text" class="form-control" placeholder="Search">
 </div>
 <button type="submit" class="btn btn-default">Search</button>
 </form>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="#">Syahreza Khatami</a></li>
 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
 <ul class="dropdown-menu">
 <li><a href="#">Info Yamaha</a></li>
 <li><a href="#">Info Honda</a></li>
 <li><a href="#">Info Suzuki</a></li>
 <li><a href="#">Info Duccati</a></li>
 <li><a href="#">Info Aprilia</a></li>
 </ul>
 </li>
 </ul>
 </div><!-- /.navbar-collapse -->
 </div>
</nav>
<div class="badan">
        <h2>Suzuki MotoGP</h2>
 
        <div class="list-produk">
        <img src="{{asset('storage/suzuki1000.png')}}" alt="">
            <h4> Suzuki GSX1000CC</h4>
            <h5>Rp 900.000.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
<div class="container">
 @yield('konten')
</div>
</body>
<footer>
 @yield('footer')
</footer>
</html>