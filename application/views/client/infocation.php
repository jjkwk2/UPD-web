<?php
$i=0;
if(isset($view_table)){
    echo '<table style="width:100%>"';
        foreach ($view_table as $value_cities){
            $i++;
            if($i%2!=0){
                echo '<tr>';
                echo '<td>';
                echo '<a href="'.base_url('clientlocation/loadDetails/'.$value_cities->CITY.'/'.$value_cities->PROVINCE).'">'.$value_cities->CITY.'</a>';
                echo '</td>';
            }
            if($i%2==0){
                echo '<td>';
                echo '<a href="'.base_url('clientlocation/loadDetails/'.$value_cities->CITY.'/'.$value_cities->PROVINCE).'">'.$value_cities->CITY.'</a>';
                echo '</td>';
                echo '</tr>';
            }
            
            
        }
    echo '</table>';
}
if (isset($city_details)){
    foreach ($city_details as $value_cities){
        $vcity = $value_cities->CITY;
        $vprov = $value_cities->PROVINCE;
        echo '<h1>'.$vcity.'</h1>';
        echo '<h3>'.$vprov.'</h3>';
        echo '<p>'.$value_cities->DESCR.'</p>';
    
?>

<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    </head>
    <body>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 75%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>

      var map;

      function initMap() {
        <?php
            $city = str_replace(" ","+",$vcity);
            $prov = urldecode($vprov);  
            $url = "http://maps.googleapis.com/maps/api/geocode/json?address=$city+$prov";
            $json_data = file_get_contents($url);
            $result = json_decode($json_data, TRUE);
            $latitude = $result['results'][0]['geometry']['location']['lat'];
            $longitude = $result['results'][0]['geometry']['location']['lng'];
            echo 'var pyrmont = {lat:'. $latitude.', lng:'. $longitude.'};';
        ?>
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15,
          styles: [
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#aee2e0"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#abce83"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#769E72"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#7B8758"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#EBF4A4"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "color": "#8dab68"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#5B5B3F"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ABCE83"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#A4C67D"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#9BBF72"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#EBF4A4"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#87ae79"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#7f2200"
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "weight": 4.1
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#495421"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ]
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 500,
          type: ['store']
        }, callback);
        
        service.nearbySearch({
          location: pyrmont,
          radius: 500,
          type: ['school']
        }, callback);
        
        service.nearbySearch({
          location: pyrmont,
          radius: 500,
          type: ['hospital']
        }, callback);

      }
      

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var image = {
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
          };
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: image
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }

    </script>
  <div id="map"></div> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSuxK7yQseuK-JaBwQNwi3jIMTKRZxgfQ&libraries=places&callback=initMap" async defer></script>
  </body>
</html>

<?php
}
}
?>