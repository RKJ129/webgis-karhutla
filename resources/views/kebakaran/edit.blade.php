@extends('layout.master')

@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">{{ $title }}</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              {{-- <li class="breadcrumb-item active">{{ $title }}</li> --}}
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
                      <form action="{{ route('kebakaran.update', $dataKebakaran->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                          <label for="tanggal">Tanggal</label>
                          <input type="date" name="tanggal" id="tanggal" class="form-control rounded-0 @error('lokasi_kejadian') is-invalid @enderror" id="lokasi_kejadian" value="{{ old('tanggal', $dataKebakaran->tanggal) }}" required>
                          {{-- <textarea type="text" name="lokasi_kejadian" class="form-control rounded-0 @error('lokasi_kejadian') is-invalid @enderror" id="lokasi_kejadian" value="{{ old('tanggal') }}" required></textarea> --}}
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="kecamatan">Kecamatan</label>
                              <input type="text" name="kecamatan" class="form-control rounded-0 @error('kecamatan') is-invalid @enderror" id="kecamatan" placeholder="Masukkan kecamatan ... " value="{{ old('kecamatan', $dataKebakaran->kecamatan) }}" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="kelurahan">Kelurahan</label>
                              <input type="text" name="kelurahan" class="form-control rounded-0 @error('kelurahan') is-invalid @enderror" id="kelurahan" placeholder="Masukkan kelurahan ... " value="{{ old('kelurahan', $dataKebakaran->kelurahan) }}" required>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="lokasi" class="form-label">Lokasi</label>
                          <input type="text" name="lokasi" class="form-control rounded-0 @error('lokasi') is-invalid @enderror" id="kerusakan" placeholder="Masukkan lokasi..." value="{{ old('lokasi', $dataKebakaran->lokasi) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <input type="text" name="jenis" id="jenis" class="form-control rounded-0 @error('jenis') is-invalid @enderror" id="jenis" placeholder="Masukkan jenis...." value="{{ old('jenis', $dataKebakaran->jenis) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="luas" class="form-label">Luas</label>
                            <input type="text" name="luas" id="luas" class="form-control rounded-0 @error('luas') is-invalid @enderror" id="luas" placeholder="Masukkan luas..." value="{{ old('luas', $dataKebakaran->luas) }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
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
