<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karhutla</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("template/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset("template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("template/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{ asset("template/plugins/jqvmap/jqvmap.min.css") }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("template/dist/css/adminlte.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("template/plugins/daterangepicker/daterangepicker.css") }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset("template/plugins/summernote/summernote-bs4.min.css") }}">

  {{-- PANEL LEAFET --}}
  <link rel="stylesheet" href="{{ asset('panel-layer/src/leaflet-panel-layers.css') }}" />

  {{-- DATA TABLE --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">              
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  {{-- LEAFET CSS --}}
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
  crossorigin=""></script>

  <script src="{{ asset('js/leaflet.ajax.js') }}"></script>
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset("template/dist/img/AdminLTELogo.png") }}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
    @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

    <!-- Sidebar -->
    @include('layout.sidebar')
    <!-- /.sidebar -->

  

  <!-- Content Wrapper. Contains page content -->
    @yield("content")

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset("template/plugins/jquery/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("template/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset("template/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ asset("template/plugins/chart.js/Chart.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset("template/plugins/sparklines/sparkline.js") }}"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset("template/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("template/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{ asset("template/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ asset("template/plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset("template/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset("template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<!-- Summernote -->
<script src="{{ asset("template/plugins/summernote/summernote-bs4.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("template/dist/js/adminlte.js") }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset("template/dist/js/pages/dashboard.js") }}"></script> --}}




{{-- DATA TABLE --}}
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="{{ asset('panel-layer/src/leaflet-panel-layers.js') }}"></script>

@yield('js')

</body>
</html>
