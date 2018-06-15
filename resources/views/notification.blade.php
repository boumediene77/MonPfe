<?php
use layouts\main;
?>
@extends('layouts.main')
@section('main_content')

<!--Projects section v.1-->
<section>

        <!--Section heading-->
        <h2 style="padding-left:40%;">
            <strong>Service Notification</strong>
        </h2><!-- APRES EXAMEN
        <div class="panel panel-default">
                <div class="panel-body">
                <p class="grey-text pb-5 text-center">NaftalConsutl vous offre la posibilite de gerer vos notification SMS et Email</p>
    
                </div>
        </div>-->
        <!--Section description-->
        
        <!--Grid row-->
        <div class="row text-center" style="margin-left:250px;margin-top:80px;">
    
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">
    
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                    <img src="images/email.jpg" class="img-fluid" alt="Sample project image" style="height:220px;">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
    
                <!--Excerpt-->
                <div class="card-body mt-3">
                    <h4>
                        <strong>NOTIFICATION PAR EMAIL</strong>
                    </h4>
                    <p class="grey-text">Vous receverez un EMAIL à chaque versment effectuer. 
                    </p>
                    <a href="nemail" >
                    <button type="button" class="btn btn-info">Acceder</button></a>
                </div>
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
    
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                    <img src="images/sms.jpg" style="height:220px;"
                    class="img-fluid" alt="Sample project image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
    
                <!--Excerpt-->
                <div class="card-body mt-3">
                    <h4>
                        <strong>NOTIFICATION PAR SMS</strong>
                    </h4>
                    <p class="grey-text">Vous receverez un SMS à chaque versment effectuer.
                    </p>
                    <a href="nsms">
                     <button type="button" class="btn btn-info">Acceder</button>
                     </a>
                </div>
               
            <!--Grid column-->
    
        </div>
        <!--Grid row-->
    
    </section>
    <!--/Projects section v.1-->

@endsection
