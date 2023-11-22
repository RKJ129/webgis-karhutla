@extends('layout.master')

@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div id="map" style="width: auto; height : 500px">
                </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('js')
    <script type="text/javascript">

    // WARNA PETA
    @foreach ($data_kecamatan as $key => $value )
      var myStyle{{$key}} = {
          "color": "{{$value->color}}",
          "weight": 1,
          "opacity": 0.5
      };
    @endforeach


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
      return '<i class="fa-solid fa-square" style="color:'+name+'">  </i>';
    }

    function featureToMarker(feature, latlng) {
        return L.marker(latlng, {
            icon: L.divIcon({
                iconUrl: 'firepin.png',
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
            @foreach ($data_kecamatan as $key =>$value )
              {
                  active: true,
                  icon: iconByName('{{ $value->color }}'),
                  name: ' {{ $value->nama_kecamatan }}',
                  layer: new L.GeoJSON.AJAX(["geo/{{ str_replace(" ", "_", $value->nama_kecamatan) }}.json"],{onEachFeature:popUp, style: myStyle{{ $key }},pointToLayer: featureToMarker}).addTo(mymap)
              },
            @endforeach
          ]
        },
    ];

    var baseLayers = [
        {
            group: "Map",
            layers: [
                {
                    name: " Karhutla Map",
                    layer: Layerku
                },
            ]
        }
    ];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
    compact: true,
    // // collapsed: true,
	  collapsibleGroups: true
    });

    mymap.addControl(panelLayers);

    // ICON NYA
    var myicon = L.icon({
      iconUrl: 'https://i.pinimg.com/564x/da/ed/f9/daedf997cc2c457caf0decd78c42a9a7.jpg',
      iconSize:     [38, 95], // size of the icon
      shadowSize:   [50, 64], // size of the shadow
      iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
      shadowAnchor: [4, 62],  // the same for the shadow
      popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
  });


    // TITIK PANAS
    @foreach($data_titik as $key => $dt){
      L.marker([{{ $dt->lat }}, {{ $dt->long }}]).addTo(mymap)
      .bindPopup('<b>Nama Lokasi : {{ $dt->lokasi }}</b><br/><b>Tanggal : {{ $dt->tanggal }}</b><br/><b>Kecamatan : {{ $dt->kecamatan }}</b><br/><b>Kerusakan : {{ $dt->kerusakan }} m2</b><br/>');
    }
    @endforeach
   
    </script>
@endsection
