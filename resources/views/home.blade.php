<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Gis</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <script src="https://unpkg.com/esri-leaflet-vector@4.0.1/dist/esri-leaflet-vector.js" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="geojson/tes.geojson"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>


    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="map"></div>
</body>

<script>
    var map = L.map('map').setView([-8.030260467966045,  113.54722678635767], 9,5);

    var Satellite = L.tileLayer('http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    var Roads = L.tileLayer('http://mt0.google.com/vt/lyrs=h&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    var Hybrid = L.tileLayer('http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    var Default = L.tileLayer('http://mt0.google.com/vt/lyrs=p&hl=en&x={x}&y={y}&z={z}&s=Ga', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    L.control.layers({
        'Satellite': Satellite,
        'Roads': Roads,
        'Hybrid': Hybrid,
        'Default': Default
    }, null, {
        position: 'bottomleft',
        collapsed: false
    }).addTo(map);

    Default.addTo(map);

    var busIcon = L.icon({
        iconUrl: 'images/pin.png',

        iconSize: [50, 75], // size of the icon
        shadowSize: [50, 64], // size of the shadow
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62], // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    // var marker = L.marker([-6.9101651, 112.2638728], {
    //     icon: busIcon
    // }).addTo(map);

    $.getJSON('geojson/fixter.geojson', function (data) {
        L.geoJSON(data, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: busIcon
                });
            },

            onEachFeature: function (feature, layer) {
                var properties = feature.properties;

                // Mendapatkan informasi yang diinginkan dari properti
                var fcode = properties.FCODE;
                var remark = properties.REMARK;

                // Mendapatkan koordinat
                var coordinates = feature.geometry.coordinates;
                var latitude = coordinates[1];
                var longitude = coordinates[0];

                // Membuat popup dengan informasi titik
                var popupContent = "<strong>FCODE:</strong> " + fcode +
                    "<br><strong>REMARK:</strong> " + remark +
                    "<br><strong>Latitude:</strong> " + latitude +
                    "<br><strong>Longitude:</strong> " + longitude +
                    "<br><button onclick='keSini(" + latitude + ", " + longitude + ")'>Button</button>";

                layer.bindPopup(popupContent);
            }
        }).addTo(map);
    });

    // L.Routing.control({
    //     waypoints: [
    //         L.latLng(-7.599187514,112.78720839799996),
    //         L.latLng(-7.38659453000002, 112.733095929)
    //     ]
    // }).addTo(map);


</script>

</html>
