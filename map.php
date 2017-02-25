<!-- Adds Title, Header and Navigation to this web page. -->
<?php
  echo "<title>Our Locations</title>";
  require_once("layout/header.php");
  require_once("layout/navigation.php");
?>

  <div id="section1" class="container-fluid startingSection">
   <div id="headerLocation"> <center><h1>Our Locations</h1></center></div><br>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 60%;
      }
      #headerLocation {
        color:white;
        font-family: times new roman;
        text-align: center;
     }

       #section1{
       margin-left: -20px;
       width: 1500px;
    }

</style>
  </head>
  <body>
    <div id="map"></div>

    <script>
      var map;
  
      function initMap() {

  var kaluthara = {lat: 6.598085, lng: 79.957207};
  var panapitiya={lat: 6.628864, lng: 79.970225};
  var nagoda={lat: 6.5628, lng: 79.9854};
  var panadura={lat: 6.7202, lng: 79.9305};
  var veyangoda={lat: 7.1601, lng: 80.0619};


        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.9271, lng: 79.8612},
          zoom: 9
        });

   var marker1 = new google.maps.Marker({
          position: kaluthara,
          map: map,
          title: 'movstore1'
        });

  var marker2 = new google.maps.Marker({
          position: panapitiya,
          map: map,
          title: 'movstore2'
        });
  var marker3 = new google.maps.Marker({
          position: nagoda,
          map: map,
          title: 'movstore3'
        });
  var marker4 = new google.maps.Marker({
          position: panadura,
          map: map,
          title: 'movstore4'
        });
  var marker5 = new google.maps.Marker({
          position: veyangoda,
          map: map,
          title: 'movstore5'
        });



      }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcLGN8k0xCavFPzvqKcENsemB-NbG0z-I&callback=initMap"
    async defer></script>
  </body>
</html>
  </div>

<!-- Adds Footer to this web page. -->
<?php
  require_once("layout/footer.php");
?>
