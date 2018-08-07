<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "predlozak/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "predlozak/zaglavlje.php" ?>

    <?php include_once "predlozak/izbornik.php" ?>

    <h4>Naša lokacija</h4

    <div id="map"></div>
    <script>

    function initMap() {
      var lokacija = {lat: 45.295530, lng: 18.801939};

        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 20, center: lokacija});
        
        var marker = new google.maps.Marker({position: lokacija, map: map});
      }
      </script>
        
         <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNZG57gcX1RjFBv-kTTFUnPlDJO4HrKwc&callback=initMap">
          </script>
          
            <address>
              Adresa: <br> 
              e-mail: <br>
              Telefon: <br>
              Radno vrijeme:<br>
              32100 Vinkovci<br>
            </address>



    <?php include_once "predlozak/podnozje.php" ?>

    <?php include_once "predlozak/skripte.php" ?>
  </body>
</html>
