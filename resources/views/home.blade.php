<?php
use layouts\main;
?>
@extends('layouts.main')

@section('main_content')
<div class="app-title"style="background-color:white;color:black;">
        <div >
          <h1><i class="fa fa-dashboard"></i> NaftalConsult Dashboard</h1>
          <p>Plus q'un tableau de board</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:30px;" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active" style="height:50%;width:100%;">
      <img src="images/home1.jpg" alt="Edahabia" >
    </div>

    <div class="item" style="height:50%; width:100%;">
      <img src="images/home2.jpg" >
    </div>

    <div class="item" style="width:100%;">
      <img src="images/home2.jpg" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     
<div id="map" style="width:100%;height:400px;background:yellow; margin-top:100px;"></div>


<div style="margin-top:10px;">

Siège Direction Générale Adresse : Route des dunes Chéraga BP 73, Alger.

Téléphone : +213 21 38 13 13

Fax : +213 21 38 19 19

</div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(36.764250, 2.927135),
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnJZF-JEsipEzdDJtZV0F4IDjyhTdRXGk
&callback=myMap"></script> 

@endsection
