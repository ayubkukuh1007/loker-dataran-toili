<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Lowongan Kerja</title>
  @include('adminloker.lokasi.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('adminloker.lokasi.nav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- /.content --> 
    <!-- Main content -->
    <section class="content">
      <div class="row mb-2"></div>
      <!-- space row -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Lokasi Kerja</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Tempat Kerja</label>
                <input type="text" class="form-control" id="lokasikerja" name="lokasi" placeholder="Tempat Kerja ex. Toili, luwuk">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button class="btn btn-primary" id="btnaction" onclick="savedatalokasi()">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  <div class="row mb-2"></div>
    <div class="">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Lokasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- end card -->
        </div>
    </div>
    </div>
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
 @include('adminloker.lokasi.js')
<script>

    var idRow;

    initialdatatable();

    function initialdatatable(){
        var table = $('#example1').DataTable({
                  "ajax": "http://127.0.0.1:8000/master-lokasi-kerja/show",
                  "order": [[ 0, "desc" ]],
                  "pageLength": 5,
                  "recordsTotal": 50,
                  "dataSrc": 'data',
                  "deferRender": true,
                  "columns": [
                      { data: 'id' },
                      { data: 'location' },
                      { data: 'create_date' },
                      { data: 'update_date' },
                      { data: null,"defaultContent": "<button class=\"edit\">Edit</button>" },
                      { data: null,"defaultContent": "<button class=\"delete\">Delete</button>" }
                  ],        
              });

        $('#example1 tbody').on( 'click', 'button.edit', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            var location = data.location;
            var button = "Edit";
            editdatalokasi(location,button);
        } );

        $('#example1 tbody').on( 'click', 'button.delete', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            deletedatalokasi();
        } );
    }

    function editdatalokasi(location,button){
      document.getElementById("lokasikerja").value = location;
      document.getElementById("btnaction").innerHTML = button;
    }

    function deletedatalokasi(){
       event.preventDefault();
       var lokasikerja = $('#lokasikerja').val();
          let _url = `master-lokasi-kerja/delete`;
          let _token = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: _url,
              type: "POST",
              data: {
              _token,
              idRow : idRow
          },
          beforeSend:function(){
            return confirm("Are you sure?");
          },
          success: function(response) {
            $('#example1').DataTable().ajax.reload();
            clear();
          },
          error: function(response) {
              console.log(response);
          }
        });
    }

    function clear(){
      document.getElementById("lokasikerja").value = "";
      document.getElementById("btnaction").innerHTML = "Simpan";
    }
    
    function savedatalokasi() {
        event.preventDefault();
        var checkbtn = document.getElementById('btnaction').innerHTML;
        if (checkbtn == "Simpan") {
            var lokasikerja = $('#lokasikerja').val();
            let _url = `master-lokasi-kerja/store`;
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                _token,
                lokasikerja : lokasikerja
            },
            beforeSend:function(){
              //return confirm("Are you sure?");
            },
            success: function(response) {
              $('#example1').DataTable().ajax.reload();
              clear();
            },
            error: function(response) {
                console.log(response);
            }
          });
        }else if (checkbtn == "Edit") {
            var lokasikerja = $('#lokasikerja').val();
            let _url = `master-lokasi-kerja/edit`;
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                _token,
                lokasikerja : lokasikerja,
                idRow : idRow
            },
            beforeSend:function(){
              //return confirm("Are you sure?");
            },
            success: function(response) {
              $('#example1').DataTable().ajax.reload();
              clear();
            },
            error: function(response) {
                console.log(response);
            }
          });
        }else {
          alert("Something Wrong");
        }
    }

</script>    

</body>
</html>
