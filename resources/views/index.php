<!DOCTYPE html>
<html>
<title></title>
<head>
    <meta charset="utf-8">
    <title>Geofence</title>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyDci4vYApOxVdKqwlpXSv9h77AcWbNuzmQ&libraries=drawing">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.js"></script>
    
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
   
</head>
    <body >
        <script>

            var map;
            var lat = -12.043333;
            var lng =  -77.029333;
            const crl_lat = -12.043333;
            const crl_lng = -77.028333;    
            var center = new google.maps.LatLng(crl_lat,crl_lng);     
            $(document).ready(function () {

                map = new GMaps({
                    el: '#map',
                    lat: lat,
                    lng: lng
                });
                var drawingManager = new google.maps.drawing.DrawingManager({
                    drawingMode: google.maps.drawing.OverlayType.MARKER,
                    drawingControl: true,
                    drawingControlOptions: {
                        position: google.maps.ControlPosition.TOP_CENTER,
                        drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
                    },
                    markerOptions: { icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' },
                    circleOptions: {
                        fillColor: '#ffff00',
                        fillOpacity: 1,
                        strokeWeight: 5,
                        clickable: false,
                        editable: true,
                        zIndex: 1
                    }
                });
                drawingManager.setMap(map);
                var circle = map.drawCircle({
                    center: center, 
                    radius: 350,
                    strokeColor: '#BBD8E9',
                    strokeOpacity: 1,
                    strokeWeight: 3,
                    fillColor: '#BBD8E9',
                    fillOpacity: 0.6
                });

                map.addMarker({
                    lat: lat,
                    lng: lng,
                    draggable: true,
                    fences: [circle],
                    outside: function (marker, fence) {
                        alert('This marker has been moved outside of its fence');
                    },


                });
                
                var lt = lat;
                var lt1 = crl_lat;
                var ln = lng;
                var ln1 = crl_lng;
                var dLat = (lt - lt1) * Math.PI / 180;
                var dLon = (ln - ln1) * Math.PI / 180;
                var a = 0.5 - Math.cos(dLat) / 2 + Math.cos(lt1 * Math.PI / 180) * Math.cos(lt * Math.PI / 180) * (1 - Math.cos(dLon)) / 2;
                d = Math.round(6371000 * 2 * Math.asin(Math.sqrt(a)));

                if(d <= 350){
                    console.log('inside...!');
                }else {
                    console.log('Outside...!');
                }
               
            });

        </script>
        <div id="map" style="height:800px"></div>

    </body>

