<?php
use layouts\main;
?>
@extends('layouts.main')

@section('main_content')

 <div class="app-title">
 <h3 class="tile-title">Naftal toujour fidel a ses clients</h3>
 
</div>
<div class="row">
<div class="col-md-6 col-lg-3">
        
</div>
</div>

<img src="images/business.jpg" class="mon-image">

<div class="row">
<div class="col-md-6">
  <div class="tile">
   <a href="compte">
    <h3 class="tile-title">Consulter mon releve de compte</h3>
  </a>
     <img src="images/ma-dahabia.jpg" class="ma-dahabia">

  </div>
</div>


<div class="col-md-6">
  <div class="tile">
  <a href="pswd">   
    <h3 class="tile-title">Changer mon mot de passe</h3>
</a>  
<img src="images/crypt2.jpg" class="pwd-image">
  </div>
</div>


</div>
<!--end row 1-->

<!-- begin row 2 -->

<div class="row">
<div class="col-md-6">
  <div class="tile">
    <h3 class="tile-title">Gerer mes notifications</h3>
  </div>    
</div> 
<div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title"><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
      document.getElementById('logout-form').submit();" >
      Deconnecter
      </a>
      </h3>

      <div class="embed-responsive embed-responsive-16by9">
      
      </div>
    </div>
  </div>


</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/naftal-bg.jpg" alt="Edahabia" style="width:100%;">
    </div>

    <div class="item">
      <img src="images/nafatl5.png" alt="Chicago" style="width:100%;">
    </div>

    <div class="item">
      <img src="images/nafatl5.png" alt="New York" >
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

      

@endsection
