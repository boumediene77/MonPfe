
<?php
use layouts\main;
?>
@extends('layouts.main')
@section('main_content')

      <div class="row">
      
        <div class="col-md-2">
        <ul class="app-breadcrumb breadcrumb" style="width:150px;">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">acceuil</a></li>
        </ul>
        </div>

        <div class="col-md-8">
          <div class="tile">
            <h2 style="color:blue;padding-left:20%;">LA NOTIFICATION EMAIL </h2> <br>
            <br>
            
            <span id="prince">La notification par email est desactiver appuyez sur Activer pour beneficier de ce service. </span>
            <span style="margin-right:50px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" id="activer">Activer</button>
            <button type="button" class="btn btn-primary" disabled="disabled" data-toggle="modal" data-target=".bs-example-modal-sm" id="desactiver">Desctiver</button>
            <span>
           

                 <br><br><br>
            <!--  MODAL     -->

            <div class="modal fade bs-example-modal-sm" tabindex="-1" id="myModal" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                            NOTIFICATION PAR EMAIL ACTIVER 
                  </div>
                </div>
            </div>


            <div id="div1" style="display:none;">
            Vous receverez les notifications par email à l'adresse :  {{$users[0]->email}}
           
            <br><br><br>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
             <div class="panel panel-success">
              <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa fa-envelope prefix"></i> &nbsp Changer l'adresse mail  
               </a>
              </h4>
             </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ URL::to('/nsms') }}">
               <div class="form-group" style="display:inline">
                <label for="email">Nouvelle Adresse Email :</label>
               <input type="email" class="form-control" id="email">
               </div>
               <div class="form-group">
               <div class="col-md-6 ">
                 <button type="submit" class="btn btn-primary">
                Confirmer
                 </button>
               </div>
              </div>
            </form> 
            <!--end panel body-->
           </div>
             <!--end collpase div -->
          </div>
                 <!--end panel success -->
         </div>
                 <!--end panel group-->
       </div>

            </div>        
          </div>
        </div>

  <div class="col-md-2">
        <ul class="app-breadcrumb breadcrumb" style="width:150px;">
          <li class="breadcrumb-item"><i class="fa fa-mobile-phone fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="nsms">notification sms</a></li>
        </ul>
        </div>
</div>

@endsection
