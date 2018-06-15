
<?php
use layouts\main;
?>
@extends('layouts.main')


@section('data_stat')
@endsection


@section('script_stat')
 


<script>

    window.onload = function() {

 var data = {{ json_encode(print_r($data)) }};
 //var datas = JSON.parse(data); // JSON.parse return a string not an array

   document.getElementById("metterpanel").innerHTML = "";
   var i;
    for (i = 0; i < 2; i++) {
        var datakey =  data.i.0; // année
    //   passer les dataS COMME TABLEAU A LA FONCTION JS  
    
var dataPoints = {
    'row1' : {
        'y' : data.i.1,
        'label' : 'janvier'
    },
    'row2' : {
        'y' : data.i.2,
        'label' : 'Fevrier'
    },
    'row3' : {
        'y' : data.i.3,
        'label' : 'Mars'
    },
    'row4' : {
        'y' : data.i.4,
        'label' : 'Avril'
    },
    'row5' : {
        'y' : data.i.5,
        'label' : 'Mai'
    },
    'row6' : {
        'y' : data.i.6,
        'label' : 'juin'
    },
    'row7' : {
        'y' : data.i.7,
        'label' : 'juillet'
    },
    'row8' : {
        'y' : data.i.8,
        'label' : 'aout'
    },
    'row9' : {
        'y' : data.i.9,
        'label' : 'septembre'
    },
    'row10' : {
        'y' : data.i.10,
        'label' : 'octobre'
    },
    'row11' : {
        'y' : data.i.11,
        'label' : 'novembre'
    },
    'row12' : {
        'y' : data.i.12,
        'label' : 'decembre'
    },
}; 

document.write(dataPoints.row1.y);

var chart = new CanvasJS.Chart("chartContainer"+ datakey, {
   animationEnabled: true,
   theme: "light2",
   title:{
    text: "statistique de l\'année XX"
   },
   axisY: {
    title: "chargemnt des cartes en DA"
   },
   data: [{
    type: "column",
    yValueFormatString: "#,##0.## DA",
    dataPoints: JSON.stringify(dataPoints);
     }]
   });
   chart.render();
       
   var newElement = $(' <div id="chartContainer"' + datakey + '"></div>' );
                   $('#metterpanel').append(newElement);
      }

     
    }
 
    </script>;
  


 

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
  

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

                    <th>Carte ID</th>
                    <th>Montant chargement</th>
                    <th>Date chargement</th>

                  </tr>
                </thead>
                <tbody>


<?php
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>".$user->id_carte."</td>";
    echo "<td>".$user->montant_chargement." DA</td>";
    echo "<td> le ".$user->date_chargement." </td>";
    echo "</tr>";
}
?>
                 
                </tbody>
              </table>
             {{json_encode(print_r($data))}}
            </div>
          </div>
        </div>
      </div>



<!-- solde des cartes -->

<!-- STATS PAR MOIS  
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
-->
 <!-- begin loop -->
 <div class="metterpanel" id="metterpanel"></div>
    <!-- end loop -->

<script src="https://canvasjs.com/assets/script/canvasjs.min.js">

</script>

    </main>


@endsection
