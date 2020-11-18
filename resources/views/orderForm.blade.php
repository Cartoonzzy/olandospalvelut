@extends('master')
@section('title')
TILAA SIIVOUS NYT!
@stop
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<form action="{{url('newSale')}}" id="orderForm" method="post">
  @csrf

<div class="form-group">
  <label for="sel1">Valitse palvelu:</label>
  <select class="form-control" id="sel1" name="service">
  <option></option>  
  <option>Toimistosiivous</option>
    <option>Kotisiivous</option>
    <option>Ikkunan pesu</option>
  
  </select>
</div>
<div class="form-group">
  <label for="sel2">Asunnon koko<strong> m <sup>2</sup></strong></label>
  <select class="form-control" id="sel2" name="size">
  <option></option> 
    <option value="1">> 50</option>
    <option value="2">50-59</option>
    <option value="3">60-69</option>
    <option value="4">70-79</option>
    <option value="5">80-89</option>
    <option value="6">90-99</option>
    <option value="7">100-120</option>
    <option value="8">121-140</option>
    <option value="9">141-160</option>
    <option value="10">161-180</option>
    <option value="11">181-200</option>
    <option value="12">< 200</option>
  </select>
</div>

<div class="form-group">
  <label for="sel3">Aika tunteina:</label>
  <select class="form-control" id="sel3" name="hours">
  <option value="0"></option>
    <option value="1">2</option>
    <option value="2">2.5</option>
    <option value="3">3</option>
    <option value="4">3.5</option>
    <option value="5">4</option>
    <option value="6">4.5</option>
    <option value="7">5</option>
    <option value="8">5.5</option>
    <option value="9">6</option>
    <option value="10">6.5</option>
    <option value="11">7</option>
    <option value="12">8</option>
  </select>
</div>

<div class="form-group">
<label class="radio-inline"><input type="radio" name="freq" id="freq" value="Once" >&nbspOnce</label>&nbsp&nbsp
<label class="radio-inline"><input type="radio" name="freq" id="freq" value="Weekly">&nbspWeekly</label>&nbsp&nbsp
<label class="radio-inline"><input type="radio" name="freq" id="freq" value="Second Week">&nbspEvery Second Week</label>&nbsp&nbsp
<label class="radio-inline"><input type="radio" name="freq"  id="freq" value="Monthly">&nbspMonthly</label>&nbsp&nbsp
<label for="freq" generated="true" class="error"></label>
</div>

<div class="form-group">
  <label for="comment">Lisää tietoa:</label>
  <textarea class="form-control" rows="6" id="info" name="info"></textarea>
</div>

<div class="form-group">
    <label for="email">Gift card code:</label>
    <input type="text" class="form-control" id="gift"  name="gift" >
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
<div class="form-group">
    <label for="name">Nimi:</label>
    <input type="text" class="form-control" id="name"  name="name" >
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="phonenumber">Puhelinnumero:</label>
    <input type="text" class="form-control" id="phone"  name="phone" >
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
    <label for="address">Osoite:</label>
    <input type="text" class="form-control" id="address"  name="address" >
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
  <label for="birthdaytime">(päivämäärä ja aika):</label>
  <input type="datetime-local" id="time" name="time">

  </div>
  <button type="submit"  class="btn btn-primary">Maksaminen laskulla</button>
</form>

<form id="windowForm" action="{{url('newSaleWindow')}}" method="post">
  @csrf

  <div class="form-group">
    <label for="window">Suurien ikkunoiden määrä:</label>
    <input type="number" class="form-control" id="window" name="window" min="0" max="1000">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="small">Pienten ikkunoiden lukumäärä:</label>
    <input type="number" class="form-control" id="small" name="small" min="0" max="1000">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="pane">Parvekkeiden lasien määrä:</label>
    <input type="number" class="form-control" id="pane" name="pane" min="0" max="1000">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
  <label for="comment">Lisää tietoa:</label>
  <textarea class="form-control" rows="6" id="info" name="info"></textarea>
</div>

<div class="form-group">
    <label for="email">Gift card code:</label>
    <input type="text" class="form-control" id="gift"  name="gift" >
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="phonenumber">Phone Number</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter your Phone number" name="phone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

 

<div class="form-group">
    <label for="address">Full Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Please enter cleaning location address and postal code" name="address" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
  <label for="birthdaytime">(päivämäärä ja aika):</label>
  <input type="datetime-local" id="time" name="time">

  </div>
  <button type="submit" id="windowOrder" class="btn btn-primary btnHide">Tilaa ikkunoiden pesu</button>
</form>
</div>

<div id="summaryDiv" class="col-md-6">
<h3 >Tilauksen yhteenveto</h3>
<hr/>
<p id="sh1"> </p>
<p id="sh2">Koko: </p>
<p id="sh3"></p>
<p id="sh7"></p>
<p id="sh4"></p>
<p id="sh5"></p>
<hr/>
<p id="sh6">Summa:</p>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4">

<button type="submit" id ="billRequest" form ="orderForm" class="btn btn-primary">Maksaminen laskulla</button>
</div>
<div class="col-md-4">

</div>

</div>
</div>

<div id="windowDiv">
<h3 >Tilauksen yhteenveto</h3>
<hr/>
  <h6>Suurien ikkunoiden:</h6>
  <p id='idOne'></p>
  <hr/>
  <h6>Pienten ikkunoiden: </h6>
  <p id='idTwo'></p>
  <hr/>
  <h6>Parvekkeiden lasien:</h6>
  <p id='idThree'></p>
  <hr/>
  <h6>Osoite:</h6>
  <p id='idFour'></p>
  <button type="submit" id="windowOrder" form="windowForm" class="btn btn-primary">Tilaa ikkunoiden pesu</button>
</div>

</div>
</div>
@stop