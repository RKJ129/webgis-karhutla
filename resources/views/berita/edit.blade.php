@extends('layout.master')

@section('content')
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
                                <form action="{{ route('berita.update', $dataBerita->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-3">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal"
                                            class="form-control rounded-0 @error('lokasi_kejadian') is-invalid @enderror"
                                            id="lokasi_kejadian" value="{{ old('tanggal', $dataBerita->tanggal) }}" required>
                                        {{-- <textarea type="text" name="lokasi_kejadian" class="form-control rounded-0 @error('lokasi_kejadian') is-invalid @enderror" id="lokasi_kejadian" value="{{ old('tanggal') }}" required></textarea> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul"
                                            class="form-control rounded-0 @error('judul') is-invalid @enderror"
                                            id="judul" placeholder="Masukkan judul ... " value="{{ old('judul', $dataBerita->judul) }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi">Isi</label>
                                        <textarea name="isi" id="isi" rows="10" class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $dataBerita->isi) }}</textarea>
                                        {{-- <input type="text" name="isi" class="form-control rounded-0 @error('isi') is-invalid @enderror" id="isi" placeholder="Masukkan isi ... " value="{{ old('isi') }}" required> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="lampiran" class="form-label">Lampiran</label>
                                        <textarea name="lampiran" id="lampiran" rows="5" class="form-control @error('lampiran') is-invalid @enderror">{{ old('lampiran', $dataBerita->lampiran) }}</textarea>
                                        {{-- <input type="text" name="lampiran"
                                            class="form-control rounded-0 @error('lampiran') is-invalid @enderror"
                                            id="kerusakan" placeholder="Masukkan lampiran..." value="{{ old('lampiran') }}"
                                            required> --}}
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
        $('#table').dataTable({
            "autoWidth": false,
            "scrollX": true,
            "search": {
                "smart": false
            }
        });
    </script>
@endsection
