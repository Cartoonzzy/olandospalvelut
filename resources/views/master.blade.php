<!doctype html>
<html lang="en">
  <head>
  <title class="title-style">Olandospalvelut &#124; @yield('title', 'Olando')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
content="Olando cleaning company website" />
<meta name="keywords"
content="Olando, Cleaning, Finland, Helsinki" />
<meta http-equiv="author"
content="Katunzi Bernard" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    
    
    
	@yield('head')
  </head>
  <body> 
  
<div class="container-fluid">
<div class="row divMaster">

<div class="col-md-4 divLogo"><a  href="{{ URL::to('/') }}"><h1><strong>OlandosPalvelut</strong><h/></a></div>
<div class="col-md-4 divLang">
<a href="http://olandospalvelut.fi/"><img src="images/finland.png" alt="flag of finland"/></a>
<a href="http://en.olandospalvelut.fi/"> <img src="images/england.jpg" alt="flag of england"/></a>
</div>
<div class="col-md-4">
<a href="{{ URL::to('order') }}" class="btn orderButton" role="button">Tilaa siivous</a>
</div>
</div>

<div class=" divMobile">

<a  href="{{ URL::to('/') }}"><img src="images/logo.png" alt="company logo"/></a>
<a href="http://olandospalvelut.fi/"><img src="images/finland.png"  style="height:2rem;" alt="flag of finland"/></a>
<a href="http://en.olandospalvelut.fi/"><img src="images/england.jpg" style="height:2rem;" alt="flag of england"/></a>
<div>
<a href="{{ URL::to('order') }}" class="btn orderButton" role="button">Tilaa siivous</a>
</div>
</div>

</div>
 
<nav class="navbar navbar-expand-md">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class='fas fa-list-alt' style='font-size:36px'></i>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('/') }}">ETUSIVU</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('about') }}">TIETOA MEISTÄ </a>
    </li>
    

 
	 <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('contact') }}">OTA MEIHIN YHTEYTTÄ</a>
    </li>
  </ul>
  </div>
</nav>
	

	
<div class="content">
@yield('content')
</div>
<br/>
<br/>
<br/>

<footer >
<div class="row footer">
<div class="col-md-4">
<br/>
<br/>
<strong>Y-tunnus ID: 2914529-7</strong><br>
<strong>Osoite: Soukankaari 6a 1</strong></br>
<strong>02360, Espoo</strong></br>
<br/>
<br/></div>
<div class="col-md-4">
<br/>
<br/>
<strong>OlandosPalvelutOy</strong></div>
<div class="col-md-4 divContact">
<br/>
<strong>Yhteyttä</strong></br>
<strong>Email:info@olandospalvelut.fi</strong><br/>
<strong>Puhelinnumero:0406726275</strong>
<br/>
<br/>
</div>
</div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js" type="text/javascript"></script> 
<script src="js/myjs.js"></script>



</body>
</html>