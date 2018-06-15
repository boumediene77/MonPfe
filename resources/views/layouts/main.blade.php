<?php
use Illuminate\Support\Facades\Auth;
?>

<!-- données pour stat -->
@yield(' data_stat')
<!-- FIN données pour stat -->



<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="js/jquery-3.2.1.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">



     <!--  activer  desactiver -->
    <script>
      $(document).ready(function(){
      $("#activer1").click(function(){
      $("#activer1").attr({
            "disabled" : "disabled"
        },$("#phone-number").text(""),$("#div2").fadeIn(100));
      $("#desactiver1").removeAttr("disabled");
      $("#prince1").text("La notification par SMS est activer appuyez sur descativer pour arreter ce service.");
      $("#prince1").append("  ");
      });

      $("#desactiver1").click(function(){
       $("#desactiver1").attr({
            "disabled" : "disabled"
        },$("#div2").fadeOut(100));
            $("#activer1").removeAttr("disabled");
            $("#prince1").text("La notification par SMS est desactiver appuyez sur activer pour beneficier de ce service.");
            
        });


    $("#activer").click(function(){
      $("#activer").attr({
            "disabled" : "disabled"
        },$("#div1").fadeIn(100));
        $("#desactiver").removeAttr("disabled");
        $("#prince").text("La notification par email est activer appuyez sur descativer pour arreter ce service.");

       });
            $("#desactiver").click(function(){
          $("#desactiver").attr({
            "disabled" : "disabled"
        },$("#div1").fadeOut(100));
            $("#activer").removeAttr("disabled");
            $("#prince").text("La notification par email est desactiver appuyez sur activer pour beneficier de ce service.");
            $("#email").text("");
          });



      jQuery.noConflict(); 
      $('#myModal').modal('show'); 
      });
    </script>



<!-- fin activer desactiver -->



<!-- STAT -->
                  @yield('script_stat')
    
                          <!-- FIN STAT-->

    <!-- Main CSS-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery-3.2.1.js">  </script>
     <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link href="css/mdb.min.css" rel="stylesheet">
     <link href="css/mdb.css" rel="stylesheet">
     <script src="js/jquery-3.2.1.js">  </script>
     <script   src="js/bootstrap.min.js">  </script>
    <script   src="js/mdb.min.js">  </script>
     <script   src="js/mdb.js">  </script>                     -->
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link href="css/bootstrap2-toggle.min.css" rel="stylesheet">
    <script src="js/bootstrap2-toggle.min.js"></script>

  </head>
  
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header" ><a class="app-header__logo" style="color:yellow; font-family:sans-serif;">TestTitre</span></a>
                                                                                                  
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <?php
           echo '<span style="color:white">'.$users[0]->name.'</span>&nbsp';
           echo '<span style="color:white">'.$users[0]->first_name.'</span>';
          ?>
        </li>

          </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      <ul class="app-menu">
        <li><a class="app-menu__item " href="/home"><i class="app-menu__icon fa fa-home	"></i>
          <span class="app-menu__label">Accueil</span></a>
        </li>
        
        <li class="treeview">
        <a class="app-menu__item" href="../compte" ><i class="app-menu__icon fa fa-bar-chart"></i>
          <span class="app-menu__label">Mes versements</span>
        </a>
        </li>
        <li><a class="app-menu__item" href="../password"><i class="app-menu__icon fa fa-lock"></i>
            <span class="app-menu__label">Changer mon mot de passe</span>
      </a></li>
        
        <li class="treeview">
         <a class="app-menu__item" href="../notification"><i class="app-menu__icon fa fa-bell"></i>
          <span class="app-menu__label">Gérer mes notifications</span>
        </a>
        </li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-credit-card-alt"></i><span class="app-menu__label">Consulter mes cartes</span>
          <i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="../consomation"><i class="icon fa fa-circle-o"></i>consomations</a></li>
            <li><a class="treeview-item" href="../chargement"><i class="icon fa fa-circle-o"></i>chargement</a></li>
            <li><a class="treeview-item" href="../carte"><i class="icon fa fa-circle-o"></i>Solde</a></li>
          </ul>
        </li>

        <li class="treeview">
         <a class="app-menu__item" href="../notification"><i class="app-menu__icon fa fa-folder-open-o"></i>
          <span class="app-menu__label">Règles de métier</span>
        </a>
        </li>
        
        
        <li class="treeview">
         <a class="app-menu__item" href="../notification"><i class="app-menu__icon 	fa fa-send-o"></i>
          <span class="app-menu__label">Envoyer réclamation</span>
        </a>
        </li>
        
        

        <li class="treeview">
        <a class="app-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" ><i class="app-menu__icon fa fa-sign-out"></i>
        <span class="app-menu__label">
                                     {{ __('Deconnecter') }}
                      </span>
        </a>
          
        </li>
        
      </ul>
    </aside>


    <main class="app-content">

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                @yield('main_content')


    </main>


<!--bootstrap toggle pour notification -->



     <!-- Essential javascripts for application to work-->
    <script src="js/popper.min2.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="js/main2.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
 
  </body>
</html>