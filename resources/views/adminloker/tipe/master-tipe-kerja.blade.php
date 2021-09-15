<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Lowongan Kerja</title>
  @include('adminloker.tipe.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('adminloker.tipe.nav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Main content -->
    <section class="content">
      <div class="row mb-2"></div>
      <!-- space row -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tipe Kerja</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="Tipekerja">Tipe Kerja</label>
                <input type="text" class="form-control" id="typekerja" name="tipe" placeholder="Tipe ex. Development, Farmer">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button class="btn btn-primary" id="btnaction" onclick="savedatatipe()">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </section>
      <!-- /.content --> 
  <div class="row mb-2"></div>
    <div class="">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Tipe</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe</th>
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
 @include('adminloker.tipe.js')
<script>

    var idRow;

    initialdatatable();

    function initialdatatable(){
        var table = $('#example1').DataTable({
                  "ajax": "{{url('master-tipe-kerja/show')}}",
                  "order": [[ 0, "desc" ]],
                  "pageLength": 5,
                  "recordsTotal": 50,
                  "dataSrc": 'data',
                  "deferRender": true,
                  "columns": [
                      { data: 'id' },
                      { data: 'type' },
                      { data: 'create_date' },
                      { data: 'update_date' },
                      { data: null,"defaultContent": "<button class=\"edit\">Edit</button>" },
                      { data: null,"defaultContent": "<button class=\"delete\">Delete</button>" }
                  ],        
              });

        $('#example1 tbody').on( 'click', 'button.edit', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            var type = data.type;
            var button = "Edit";
            editdatatype(type,button);
        } );

        $('#example1 tbody').on( 'click', 'button.delete', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            deletedatatype();
        } );
    }

    function editdatatype(type,button){
      document.getElementById("typekerja").value = type;
      document.getElementById("btnaction").innerHTML = button;
    }

    function deletedatatype(){
       event.preventDefault();
          let _url = "{{url('master-tipe-kerja/show')}}";
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
      document.getElementById("typekerja").value = "";
      document.getElementById("btnaction").innerHTML = "Simpan";
    }
    
    function savedatatipe() {
        event.preventDefault();
        var checkbtn = document.getElementById('btnaction').innerHTML;
        if (checkbtn == "Simpan") {
            var type = $('#typekerja').val();
            let _url = "{{url('master-tipe-kerja/store')}}";
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                _token,
                type : type
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
            var type = $('#typekerja').val();
            let _url = "{{url('master-tipe-kerja/edit')}}";
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                _token,
                type : type,
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
