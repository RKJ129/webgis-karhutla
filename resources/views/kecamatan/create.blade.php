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
                      <form action="{{ route("store.kecamatan") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kecamatan">Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control rounded-0 @error('nama_kecamatan') is-invalid @enderror" id="nama_kecamatan" placeholder="Masukkan nama kecamatan ... " value="{{ old('nama_kecamatan') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="warna">Nama Kecamatan</label>
                            <input type="color" name="warna" class="form-control rounded-0 @error('warna') is-invalid @enderror" id="warna" placeholder="Masukkan warna ... " value="{{ old('warna') }}" required>
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