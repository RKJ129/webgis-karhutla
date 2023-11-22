<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>


    <link rel="stylesheet" href="{{ asset('panel-layer/src/leaflet-panel-layers.css') }}" />
    <script src="{{ asset('panel-layer/src/leaflet-panel-layers.js') }}"></script>

    <script src="{{ asset('js/leaflet.ajax.js') }}"></script>

  
</head>
<style>
    #map { 
        height: 500px; 
        width: 500px;
        }
</style>
<body>
    <div id="map">
        halo
    </div>
</body>
<script>
    // WARNA PETA
    var myStyle = {
        "color": "#ff7800",
        "weight": 1,
        "opacity": 0.9
    };


    // MUNCULIN PETA
    var mymap = L.map('map').setView([-1.242046449812539, 116.8593353481599], 10);
    var Layerku = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);

    function popUp(f,l){
    var out = [];
    if (f.properties){
            out.push("KECAMATAN : "+ f.properties['NAMA_KEC']);
        l.bindPopup(out.join("<br/>"));
    }  
  }
    
  // PANEL
    mymap.addLayer(Layerku);

    function iconByName(name) {
        return '<i class="icon icon-'+name+'"></i>';
    }

    function featureToMarker(feature, latlng) {
        return L.marker(latlng, {
            icon: L.divIcon({
                className: 'marker-'+feature.properties.amenity,
                html: iconByName(feature.properties.amenity),
                iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            })
        });
    }

    var overLayers = [
        {
            group: "Kecamatan",
            collapsed: true,
            layers: [
                {
                    active: true,
                    name: "Kecamatan",
                    icon: iconByName('bar'),
                    layer: new L.GeoJSON.AJAX(["geo/kecamatan_full.json"],{onEachFeature:popUp, style: myStyle,pointToLayer: featureToMarker}).addTo(mymap)
                },
            ]
        },
    ];

    var baseLayers = [
        {
            group: "Map",
            layers: [
                {
                    name: "Karhutla Map",
                    layer: Layerku
                },
            ]
        }
    ];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
	//compact: true,
	//collapsed: true,
	collapsibleGroups: true
    });

    mymap.addControl(panelLayers);
</script>
</html>