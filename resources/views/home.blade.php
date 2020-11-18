@extends('master')
@section('title')
ETUSIVU
@stop
@section('content')
<div class="container">

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
      <img src="images/pic1.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
    </div>
    <div class="carousel-item ">
      <img src="images/pic2.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
    </div>
    <div class="carousel-item ">
      <img src="images/pic3.jpg" class="img-fluid" alt="cleaning" width="100%" height="50%">
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

<div class="row">

<div class="col-md-4 card">
    <div class="card-header">Kodin siivous</div>
    <div class="card-body">
    Tarjoamme ammattitaitoista kotisiivousta sekä muuttopalveluita. </div>
    <div class="card-footer"><a href="{{ URL::to('services') }}">Lisää tietoa...</a></div> 
  </div>

  <div class="col-md-4 card">
    <div class="card-header">Ikkunoiden pesu</div>
    <div class="card-body">Ammattitaitoista kotien ja parvekkeiden ikkuinoiden puhdistusta.</div> 
    <div class="card-footer"><a href="{{ URL::to('services') }}">Lisää tietoa...</a></div>  
  </div>

  <div class="col-md-4 card">
    <div class="card-header">Toimistosiivous</div>
    <div class="card-body">Keskity työhösi ja jätä siivoaminen meille.</div> 
    <div class="card-footer"><a href="{{ URL::to('services') }}">Lisää tietoa...</a></div> 
  </div>
  </div>


  <div class="row divServicePics">
    <div class="col-md-4 picContainer">
    <img src="images/home.jpg" alt="home cleaning" style="width:100%; height:400px;">
  <div class="text-block">
    <h4>Alkaen 29€/h</h4>
    
  </div>
    </div>
    <div class="col-md-4">
    <img src="images/office.jpg" alt="office cleaning" style="width:100%; height:400px;">
  <div class="text-block">
    <h4>Alkaen at 29€/hr</h4>
    
  </div>
    </div>
    <div class="col-md-4">
    <img src="images/window.jpg" alt="window cleaning" style="width:100%; height:400px;">
  <div class="text-block">
    <h4>Alkaen at 29€/hr</h4>
    
  </div>
    </div>
  </div>


<br/>
<br/>
  <h3 class="header3">Kuinka varaat siivouspalvelun</h3>
  <div class="row">
  
  <div class="col-md-4 divHow">
  <h2>1.</h2>
  <p>Valitse haluamasi palvelut</p>
  </div>
  <div class="col-md-4 divHow">
  <h2>2.</h2>
  <p>Anna kysytyt yksityiskohdat, kuten sijainti ja kohteen pinta-ala/koko. </p>
  </div>
  <div class="col-md-4 divHow">
  <h2>3.</h2>
  <p>Voit maksaa verkossa tai tilata laskun </p>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12 divReview">

<h3 class="header3">Arvostelu</h3>
<hr class="hrLine"/>
<form id="reviewForm" action="{{url('sendReview')}}" method="post">
  @csrf
<div class="form-group required">
  <label for="occupation" class="control-label">Ammatti:</label>
  <input type="text" class="form-control" id="occu"  name="occu" >
  
</div>

<div class="form-group">
<label for="comment">Arvostelu:</label>
<textarea class="form-control" rows="6" id="review" name="review" ></textarea>
</div>
<button type="submit" class="btn btn-primary" id="btnReview">Lähetä</button>
</form>
</div>
  </div>
  </div>

  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
    <div class="row">
<div class="text-center col-md-3">
  <img src="images/avatar1.png" class="rounded" alt="Review 1">
  <p>Anonymous</p>
  <p>Pidän palvelusta.</p>
</div>

<div class="text-center col-md-3">
  <img src="images/avatar1.png" class="rounded" alt="Review 1">
  <p>Student</p>
  <p>The cleaning service helped me so much in time of my exams</p>
</div>

<div class="text-center col-md-3">
  <img src="images/avatar1.png" class="rounded" alt="Review 1">
  <p>Anonymous</p>
  <p>Suosittelen palvelua ehdottomasti!</p>
</div>

<div class="text-center col-md-3">
  <img src="images/avatar1.png" class="rounded" alt="Review 1">
  <p>Anonymous</p>
  <p>He tulivat, siivosivat ja lähtivät... täydellistä!</p>
</div>
  
</div>
  </div>
  </div>
  </div>

  <div class="container divFaq">
  <h3 class="header3">FAQ</h3>
  <div class="row">
  <div class="col-md-12">
  <div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Kuinka voin tilata siivouksen?
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        Klikkaa tilaus-painiketta etusivulla ja seuraa ohjeita. 
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Voinko perua jo tilaamani siivouksen?
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Kyllä, ota yhteyttä sähköpostilla sales@olandospalvelut.fi
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Entä jos työhön tarvitaan sovittua enemmän aikaa?
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Voimme aina neuvotella lisäajasta.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
       Entä jos en ole tyytyväinen palveluun?
      </a>
    </div>
    <div id="collapseFour" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Tarvittaessa voimme palauttaa rahanne. Tavoitteenamme on tyytyväinen asiakas. 
      </div>
    </div>
  </div>

</div>

  </div>
  </div>
  </div>

  <div class="container">
  <div class="row">
  <div class="col-md-12 divContact">

  <h3 class="header3">Contact form/Inquiry</h3>
  <hr id="hrLine"/>
  <form action="{{url('sendForm')}}" id="contactForm" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Nimi:</label>
    <input type="text" class="form-control" id="name" name="name">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="phonenumber">Puhelin numero</label>
    <input type="text" class="form-control" id="phone" name="phone">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="text" class="form-control" id="email"  name="email" >
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
  <label for="comment">Viesti:</label>
  <textarea class="form-control" rows="6" id="message" name="message"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Lähetä</button>
</form>
  </div>
  </div>
  </div>
@stop