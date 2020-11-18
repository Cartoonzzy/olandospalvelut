@extends('master')
@section('title')
OTA MEIHIN YHTEYTTÄ
@stop
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.4604412819006!2d24.66800191607891!3d60.139998681949805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468d8b35419cd91f%3A0x73a88c5d815181dd!2sSoukankaari%206%2C%2002360%20Espoo!5e0!3m2!1sen!2sfi!4v1592583770742!5m2!1sen!2sfi" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="col-md-6">
<br/>
<br/>
<br/>
<br/>
<br/>
<strong>Y-tunnus: 2914529-7</strong><br>
<strong>Osoite: Soukankaari 6 a 1</strong></br>
<strong>02360, Espoo</strong></br>
<br/>
<br/>
</div>
<div class="col-md-6 divContact">
<h3 class="header3">Yhteydenottopyyntö</h3>
  <hr id="hrLine"/>
  <form action="{{url('sendForm')}}" id="contactForm" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Nimi:</label>
    <input type="text" class="form-control" id="name"  name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="phonenumber">Puhelinnumero:</label>
    <input type="text" class="form-control" id="phone"  name="phone" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" required>
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