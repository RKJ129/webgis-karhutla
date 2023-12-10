@extends('user.layout.front')
@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl bg-success page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Pantauan Titik Panas</h1>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

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
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Updated at 30/11/2023</div> --}}
                    <h2 class="mb-4">Data Titik Panas Kota Balikpapan</h2>
                    <p>Pada tanggal 9 Oktober 2023, tercatat terdapat sebanyak 0 titik panas di Kota Balikpapan </p>
                    {{-- <a class="btn btn-success rounded-pill py-3 px-5 mt-2" href="">Lihat Selengkapnya</a> --}}
                </div>
                <div class="col-lg-7">
                    <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataTitikPanas as $p)
                                    <tr>
                                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $p->kecamatan }}</td>
                                        <td>{{ $p->lokasi }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Tidak ada data dalam tabel ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $dataTitikPanas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
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
    @foreach($dataPeta as $key => $dt){
      L.marker([{{ $dt->lat }}, {{ $dt->long }}]).addTo(mymap)
      .bindPopup('<b>Nama Lokasi : {{ $dt->lokasi }}<br/><b>Kecamatan : {{ $dt->kecamatan }}</b>');
    }
    @endforeach

    </script>
@endsection
