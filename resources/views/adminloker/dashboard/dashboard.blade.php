<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Lowongan Kerja</title>
  @include('adminloker.dashboard.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('adminloker.dashboard.nav')
  <!-- Content Wrapper. Contains page content -->
  @include('adminloker.dashboard.content')   
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  @include('adminloker.dashboard.js')
</body>
</html>
