<?php
$this->load->helper('html');?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/a.css">
<link rel="stylesheet" href="../../css/inscription.css">

<title>Le Covidétecteur</title>

<link rel="icon" href="images/logo2.png">

</head>

<body>
<! -- javascript du graphique -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script type="text/javascript" src="../../js/co2.js"></script>
<script type="text/javascript" src="../../js/temperature.js"></script>
<script type="text/javascript" src="../../js/humidite.js"></script>
<script type="text/javascript" src="../../js/animation.js"></script>


  
<!-- Navigation -->
<nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="hov" href="<?php echo base_url()?>">
                <img class="hov" src="<?php echo base_url()?>images/icon-home.png" alt="logo" style="width:50%">
            </a>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white hov" target="_top" href = "mailto: le.covidetecteur@gmail.com">Contact
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <!-- Boutton qui actionne le modale (pop-up)-->
                <a data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="hov" src="<?php echo base_url()?>images/icon-info.png" alt="logo" style="width:75%" >
                </a>
            </li>
        </ul>
    </div>
</nav>
  
<!-- Modale (pop-up) -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Informations sur Le Covidétecteur</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Ce site va vous permettre de connecter votre capteur Covidétecteur afin de visualiser ses données.</b></p>
        <p>Le Covidétecteur est un appareil capable de détecter et d'alerter sur la présence potentielle de charge virale dans l’air d’un lieu clos.</p>
        <p>Le Covidétecteur est équipé d'un capteur Sensirion SCD30 utilisant la technologie CMOSens® pour la détection infrarouge qui permet la mesure extrêmement précise de dioxyde de carbone. Outre la technologie de mesure NDIR pour la détection du CO2, un capteur d'humidité et de température Sensirion de qualité supérieure est également intégré sur le même module capteur.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

  <!-- Page Content -->
    

  <div class="container" style="width:80%">
    <div class="row">
    <div id="col" class="col-md-12">
    <div class="card border-0 shadow my-4">
      <div class="card-body p-6">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button type="button" class="btn btn-primary m-1" id="co2">co2</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-primary m-1" id="humidite">humidite</button>
        </li>
        <li class="nav-item">
         <button type="button" class="btn btn-primary m-1" id="temperature">temperature</button>
        </li>

      </ul>
    </div>
  </div>
</nav>

        <div id="chart"></div>


<p id="demo"></p>

<script>
document.getElementById('chart').innerHTML = '<div id="chart_co2"></div>';

document.getElementById("co2").addEventListener("click", displayCo2);

function displayCo2() {
  document.getElementById('chart').innerHTML = '<div id="chart_co2"></div>';
  //recharge le js
   var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= '../../js/co2.js';
      head.appendChild(script);
}

document.getElementById("humidite").addEventListener("click", displayHumidite);

function displayHumidite() {
  document.getElementById('chart').innerHTML = '<div id="chart_humidite"></div>';
  //recharge le js
   var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= '../../js/humidite.js';
      head.appendChild(script);
}

document.getElementById("temperature").addEventListener("click", displayTemperature);

function displayTemperature() {
  document.getElementById('chart').innerHTML = '<div id="chart_temperature"></div>';
  //recharge le js
   var head= document.getElementsByTagName('head')[0];
      var script= document.createElement('script');
      script.src= '../../js/temperature.js';
      head.appendChild(script);
}
</script>













    </div>

        </div>
 
        </div>
      </div>
    </div>
  </div>

</body>
</html>

