<?php
use layouts\main;
?>
@extends('layouts.main')


@section('data_stat')
<?php
 
 $dataPoints = array( 
	array("y" => 33373.64, "label" => "Janvier" ),
	array("y" => 22435.94, "label" => "Fevrier" ),
	array("y" => 19842.55, "label" => "Mars" ),
	array("y" => 19828.55, "label" => "Avril" ),
	array("y" => 5039.99, "label" => "Mai" ),
	array("y" => 11235.0, "label" => "Juin" ),
  array("y" => 39612.453, "label" => "Juillet" ),
  array("y" => 23612.453, "label" => "Aout" ),
  array("y" => 28612.453, "label" => "Septembre" ),
  array("y" => 60612.453, "label" => "Octobre" ),
  array("y" => 40612.453, "label" => "Novembre" ),
  array("y" => 30612.453, "label" => "Décembre" )
);
 
// chargement
$dataPoints1 = array( 
	array("y" => 33373.64, "label" => "Janvier" ),
	array("y" => 22435.94, "label" => "Fevrier" ),
	array("y" => 19842.55, "label" => "Mars" ),
	array("y" => 19828.55, "label" => "Avril" ),
	array("y" => 5039.99, "label" => "Mai" ),
	array("y" => 0.0, "label" => "Juin" ),
	array("y" => 66612.453, "label" => "Juillet" )
);
  
//consomation
$dataPoints2 = array( 
	array("y" => 33373.64, "label" => "Janvier" ),
	array("y" => 22435.94, "label" => "Fevrier" ),
	array("y" => 19842.55, "label" => "Mars" ),
	array("y" => 19828.55, "label" => "Avril" ),
	array("y" => 5039.99, "label" => "Mai" ),
	array("y" => 0.0, "label" => "Juin" ),
	array("y" => 66612.453, "label" => "Juillet" )
);
 ?>
@endsection

<!-- ne foctioone plus -->
@section('script_stat')
<script>
    window.onload = function() {
 
     var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
     text: "statistique de l'année 2017"
    },
    axisY: {
     title: "Versement bancaire en DA"
    },
    data: [{
     type: "column",
     yValueFormatString: "#,##0.## DA",
     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });
    chart.render();
   
    }
 
    </script>

@endsection()

@section('main_content')

    <div class="panel panel-primary">
      <div class="panel-heading"> <h4>Mes informations :</h4></div>
      <div class="panel-body">
<?php

    echo '<span style="font-weight: bold;">Nom : </span>'.$users[0]->name;echo "<br>";
    echo '<span style="font-weight: bold;">Prénom : </span>'.$users[0]->first_name;echo "<br>";
    
    echo '<span style="font-weight: bold;">Code client : </span>'.$users[0]->custcod; echo "<br>";
    echo '<span style="font-weight: bold;">Entité commerciale : </span>'.$users[0]->compname." DA"; echo "<br>";
    echo '<span style="font-weight: bold;">Nombre de carte NaftalCard : </span> 11';echo "<br>";

?>
</div>
    </div>
    

<!-- solde des cartes -->
 <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

                    <th>Carte ID</th>
                    <th>Etat</th>
                    <th>Solde</th>

                  </tr>
                </thead>
                <tbody>


<?php
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>".$user->id_carte."</td>";
    echo "<td>".$user->etat."</td>";
    echo "<td>".$user->solde_carte." DA</td>";
    echo "</tr>";
}
?>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </main>
   

@endsection
