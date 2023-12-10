@extends('user.layout.front')
@section('content')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl bg-success page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Data Kebakaran</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Updated at 30/11/2023</div> --}}
                    <h2 class="mb-4">Data Kebakaran Hutan di Kota Balikpapan</h2>
                    <p>Pada tanggal 30 November 2023, tercatat terjadi kebakaran hutan sebanyak 0 kali di Kota Balikpapan </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Luas (m2) </th>
                                    <th scope="col">Status </th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataTitikPanas as $p)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $p->tanggal }}</td>
                                    <td>{{ $p->lokasi }}</td>
                                    <td>{{ $p->jenis }}</td>
                                    <td>{{ $p->kerusakan }}</td>
                                    <td>{{ $p->status }}</td>
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
