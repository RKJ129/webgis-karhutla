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
                      <form action="{{ route('store.titikpanas') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="lokasi_kejadian">Lokasi Kejadian</label>
                          <textarea type="text" name="lokasi_kejadian" class="form-control rounded-0 @error('lokasi_kejadian') is-invalid @enderror" id="lokasi_kejadian" placeholder="Masukkan lokasi kejadian ... " value="{{ old('lokasi_kejadian') }}" required></textarea>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" name="kecamatan" class="form-control rounded-0 @error('kecamatan') is-invalid @enderror" id="kecamatan" placeholder="Masukkan kecamatan ... " value="{{ old('kecamatan') }}" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="kelurahan">Kelurahan</label>
                              <input type="text" name="kelurahan" class="form-control rounded-0 @error('kelurahan') is-invalid @enderror" id="kelurahan" placeholder="Masukkan kelurahan ... " value="{{ old('kelurahan') }}" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="lat">Latitude</label>
                              <input type="text" name="lat" class="form-control rounded-0 @error('lat') is-invalid @enderror" id="lat" placeholder="Masukkan latitude ... " value="{{ old('lat') }}" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="long">Longitude</label>
                              <input type="text" name="long" class="form-control rounded-0 @error('long') is-invalid @enderror" id="long" placeholder="Masukkan longitude ... " value="{{ old('long') }}" required>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="tanggal_kejadian" class="form-label">Tanggal Kejadian</label>
                          <input type="date" name="tanggal_kejadian" class="form-control rounded-0 @error('tanggal_kejadian') is-invalid @enderror" id="tanggal_kejadian" placeholder="Masukkan tanggal kejadian ... " value="{{ old('tanggal_kejadian') }}" required>
                        </div>
                        <div class="mb-3">
                          <label for="kerusakan" class="form-label">Kerusakan</label>
                          <input type="text" name="kerusakan" class="form-control rounded-0 @error('kerusakan') is-invalid @enderror" id="kerusakan" placeholder="Masukkan jumlah kerusakan ... " value="{{ old('kerusakan') }}" required>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                      </form>
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

<script>
    $('#table').dataTable( {
  "autoWidth": false,
  "scrollX": true,
  "search": {
    "smart": false
  }
} );

</script>
@endsection