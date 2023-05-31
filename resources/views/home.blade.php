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


    {{-- search js leaflet --}}
    {{-- <script src="js/leaflet-search/dist/leaflet-search.src.js"></script>
    <link href="js/leaflet-search/dist/leaflet-search.mobile.min.css" rel="stylesheet"> --}}
    <script src="{{ asset('js/leaflet-search/dist/leaflet-search.src.js') }}"></script>
    <link href="{{ asset('js/leaflet-search/dist/leaflet-search.mobile.min.css') }}" rel="stylesheet">


    <!-- Routing Machine -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="../assets/css/loading.css" rel="stylesheet" />


    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="loading-screen">
        <img src="../assets/img/logh.png" alt="Loading...">
        <h1>Tunggu Sejenak....</h1>
    </div>
    <div id="map"></div>

    <script>
            var map = L.map('map').setView([-8.030260467966045,  113.54722678635767], 9);

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
                iconUrl: 'images/logoh.png',

                iconSize: [60, 70], // size of the icon
                shadowSize: [50, 64], // size of the shadow
                iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62], // the same for the shadow
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });


            $.getJSON('geojson/terminals.geojson', function (data) {
                var layerTerminal = L.geoJSON(data, {
                    pointToLayer: function (feature, latlng) {
                        return L.marker(latlng, {
                            icon: busIcon
                        });
                    },

                    onEachFeature: function (feature, layer) {
                        var properties = feature.properties;

                        // Mendapatkan informasi yang diinginkan dari properti
                        var nama = properties.T_NAME;
                        var imageURL = properties.IMAGES;
                        var route = properties.ROUTE;
                        var operator = properties.OPERATOR;
                        var tipe = properties.TYPE;

                        // Mendapatkan koordinat
                        var coordinates = feature.geometry.coordinates;
                        var latitude = coordinates[1];
                        var longitude = coordinates[0];

                        var imageWidth = 270; // Lebar gambar dalam piksel
                        var imageHeight = 160;

                        var popupContent = "<strong> " + nama + "</strong> ";

                        if (tipe === "A") {
                            popupContent += "<span class='text-light bg-danger rounded p-2 style='font-size: 30px;'>" + tipe + "</span>";
                        } else if (tipe === "B") {
                            popupContent += "<span class='text-light bg-primary rounded p-2 style='font-size: 30px;'>" + tipe + "</span>";
                        } else {
                            popupContent += "<span class='bg-success rounded p-2 style='font-size: 20px;'>" + tipe + "</span>";
                        }

                        popupContent += "<br><img src='" + imageURL + "' style='width: " + imageWidth + "px; height: " + imageHeight + "px;'>" +
                                        "<br><strong>Rute Bus :</strong> " + route +
                                        "<br><br><strong>Operator Bus :</strong> " + operator +
                                        "<br><button class='btn btn-success' onclick='return keAwal("+ latitude + ", " + longitude +")'>Start <i class='bi bi-geo-alt-fill'></i></button>" +
                                        " ||| <button class='btn btn-info' onclick='return keAkhir("+ latitude + ", " + longitude +")'>Dest <i class='bi bi-geo-fill'></i></button>" +
                                        " ||| <button class='btn btn-danger' onclick='return stopRouting("+ latitude + ", " + longitude +")'>Route <i class='bi bi-x-square-fill'></i></button>" +
                                        "<br><br><a href='https://www.redbus.id/' target='_blank' class='btn btn-warning'>Pesan Tiket</a>" ;


                        layer.bindPopup(popupContent);
                    }
                }).addTo(map);
            });

            var backButtonControl = L.Control.extend({
                options: {
                    position: 'topleft'
                },

                onAdd: function (map) {
                    var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');

                    var button = L.DomUtil.create('button', 'leaflet-control-button', container);
                    button.innerHTML = 'Back';

                    // Menambahkan event listener untuk tombol "Back"
                    button.addEventListener('click', function () {
                        goBack();
                    });

                    return container;
                }
            });

            function goBack() {
                history.back();
            }

            map.addControl(new backButtonControl());

            L.control.search({
                layer: poiLayers,
                initial: false,
                propertyName: 'REMARK',
                buildTip: function(text, val) {
                    // var type = val.layer.feature.properties.FCODE;
                    return '<a href="#" class="'+type+'">+ text +</a>';
                }
            }).addTo(map);

            //fungsi untuk routing
            var control = null;

            function Routing() {
                control = L.Routing.control({
                    waypoints: [
                        L.latLng(),
                        L.latLng()
                    ],
                    createMarker: function() {
                        return null; // Mengembalikan null untuk menghindari pembuatan marker
                    },
                    routeWhileDragging: false,
                    lineOptions: {
                        styles: [
                            {
                                color : 'blue',
                                opacity: 0.6,
                                weight: 4
                            }
                        ]
                    },
                })
                control.addTo(map);
            }

            //point routing ke titik awal
            function keAwal(latitude, longitude) {
                var latLng0 = L.latLng(latitude, longitude);
                if (control == null) {
                    Routing();
                    control.spliceWaypoints(0, 1, latLng0);
                    control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng1);
                }
                control.spliceWaypoints(0, 1, latLng0);

            }

            // point ke titik akhir
            function keAkhir(latitude, longitude) {
                var latLng1 = L.latLng(latitude, longitude);
                control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng1);
            }

            //menghapus jejak routing
            function stopRouting() {
                control.remove();
                control = null;
            }
    </script>
    <script src="../assets/js/loading.js" type="text/javascript"></script>
</body>
</html>
