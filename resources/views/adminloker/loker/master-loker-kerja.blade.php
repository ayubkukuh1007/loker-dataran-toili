<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Lowongan Kerja</title>
  @include('adminloker.loker.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('adminloker.loker.nav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="row mb-2"></div>
      <form method="POST" enctype="multipart/form-data" id="data-upload">
        <section class="content">
          <div class="card-header">
            <div class="card card-primary">
              @include('adminloker.loker.tableloker')
            </div>
              <div class="card card-primary">
              @include('adminloker.loker.tablelokerclose')
            </div>
          </div>
            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      @include('adminloker.loker.formleft')
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-primary">
                      @include('adminloker.loker.formright')
                    </div>
                  </div>
              </div>
            </div>
            <div class="card-footer">
            <button type="submit" id="btnaction" onclick="savedataloker()"
                class="btn btn-primary">Simpan</button>
            </div>
          </section>
      </form>
  </div>
  
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
  @include('adminloker.loker.js')
  @include('adminloker.loker.summernote')
  @include('adminloker.loker.ajax')
</body>
</html>
