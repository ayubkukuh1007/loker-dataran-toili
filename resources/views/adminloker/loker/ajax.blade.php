<script>
  
    var idRow;
    var imageCompany;
    var fileReader;
    var pathimage;

    getdatafield();
    initialdatatable();
    initialdatatable2();

    //priview image upload logo
    $('#image').change(function(){
        let reader = new FileReader();
        fileReader = reader;
        fileReader.onload = (e) => { 
            $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        fileReader['readAsDataURL'](this.files[0]); 
        imageCompany = this.files[0];
    });

    function resetUploadPreview() {
      if (!$('#preview-image-before-upload').val()) {
        $("#image").val('');
        $('#preview-image-before-upload').attr('src', 'http://127.0.0.1:8000/images/logo/unknown.gif');
      }else {
        $("#image").val('');
         $('#preview-image-before-upload').attr('src', 'http://127.0.0.1:8000/images/logo/unknown.gif');
      }
    }

    function initialdatatable(){
        var table = $('#example1').DataTable({
              "columnDefs": [ 
                  {
                    targets: 4,
                    render: $.fn.dataTable.render.ellipsis(5, true )
                  },
                  {
                    targets: 5,
                    render: $.fn.dataTable.render.ellipsis(5, true )
                  } 
                ],
                "ajax": "http://127.0.0.1:8000/pasang-lowongan-kerja/show",
                "order": [[ 0, "desc" ]],
                "pageLength": 5,
                "autoWidth": false,
                "recordsTotal": 50,
                "dataSrc": 'data',
                "deferRender": true,
                "columns": [
                    { data: 'id' },
                    { data: 'image',render: function (data, type, row, meta) {
                        if (!data==""){
                          return '<img src=http://127.0.0.1:8000/images/logo/'+data+' height="50" width="50"/>';   
                        }else{
                          return '<img src=http://127.0.0.1:8000/images/logo/unknown.gif height="50" width="50"/>';   
                        }
                      }
                    },
                    { data: 'nama_lembaga' },
                    { data: 'nomor_kontak' },
                    { data: 'email' },
                    { data: 'nama_pekerjaan' },
                    { data: 'tanggal_posting' },
                    { data: 'tanggal_penutupan' },
                    { data: null,"defaultContent": "<button type=\"button\" class=\"detail\">Detail</button>" },
                    // { data: null,"defaultContent": "<button type=\"button\" class=\"edit\" >Edit</button>" },
                    { data: null,"defaultContent": "<button type=\"button\" class=\"delete\">Delete</button>" }
                ],        
          });

         $('#example1 tbody').on( 'click', 'button.detail', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            getdetail(idRow);
        });

        $('#example1 tbody').on( 'click', 'button.edit', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            getdetailedit(idRow);
        });

        $('#example1 tbody').on( 'click', 'button.delete', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            pathimage = data.image;
            deletedataloker();
        });
    }

    function initialdatatable2(){
        var table = $('#example2').DataTable({
              "columnDefs": [ 
                  {
                    targets: 4,
                    render: $.fn.dataTable.render.ellipsis(5, true )
                  },
                  {
                    targets: 5,
                    render: $.fn.dataTable.render.ellipsis(5, true )
                  } 
                ],
                "ajax": "http://127.0.0.1:8000/pasang-lowongan-kerja/close",
                "order": [[ 0, "desc" ]],
                "pageLength": 5,
                "autoWidth": false,
                "recordsTotal": 50,
                "dataSrc": 'data',
                "deferRender": true,
                "columns": [
                    { data: 'id' },
                    { data: 'image',render: function (data, type, row, meta) {
                        if (!data==""){
                          return '<img src=http://127.0.0.1:8000/images/logo/'+data+' height="50" width="50"/>';   
                        }else{
                          return '<img src=http://127.0.0.1:8000/images/logo/unknown.gif height="50" width="50"/>';   
                        }
                      }
                    },
                    { data: 'nama_lembaga' },
                    { data: 'nomor_kontak' },
                    { data: 'email' },
                    { data: 'nama_pekerjaan' },
                    { data: 'tanggal_posting' },
                    { data: 'tanggal_penutupan' },
                    { data: null,"defaultContent": "<button type=\"button\" class=\"detail\">Detail</button>" },
                    // { data: null,"defaultContent": "<button type=\"button\" class=\"edit\" >Edit</button>" },
                    { data: null,"defaultContent": "<button type=\"button\" class=\"delete\">Delete</button>" }
                ],        
          });

         $('#example2 tbody').on( 'click', 'button.detail', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            getdetail(idRow);
        });

        $('#example2 tbody').on( 'click', 'button.edit', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            getdetailedit(idRow);
        });

        $('#example2 tbody').on( 'click', 'button.delete', function () {
            var data = table.row( $(this).parents('tr') ).data();
            idRow = data.id;
            deletedataloker();
        });
    }


    function imagedatatable(data, type, full, meta) {
       return '<img  src="full[7]" />';
    }

    function getdetail(idRow){
        let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/getdetail`;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: _url,
            type: "POST",
            data: {
            _token,
            idRow
        },
          success: function(response) {
             detailloker(response);
          },
          error: function(response) {
              console.log(response);
          }
        });
    }

      function getdetailedit(idRow){
        let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/getdetail`;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: _url,
            type: "POST",
            data: {
            _token,
            idRow
        },
          success: function(response) {
             editdetailloker(response);
          },
          error: function(response) {
              console.log(response);
          }
        });
    }

    function detailloker(data){
        $('#nama_lembaga').val(data.data.nama_lembaga);
        $('#nomor_kontak').val(data.data.nomor_kontak);
        $('#email').val(data.data.email);
        $('#nama_pekerjaan').val(data.data.nama_pekerjaan);
        $("#select_location option:contains(" + data.data.id_lokasi_perkerjaan +")").attr("selected", true);
        $("#select_tipe_pekerjaan option:contains(" + data.data.id_tipe_pekerjaan +")").attr("selected", true);
        $("#select_lulusan_pekerjaan option:contains(" + data.data.id_lulusan_pekerjaan +")").attr("selected", true);
        $('#summernote').summernote('code', data.data.deskripsi);
        $('#tgl_posting').text(data.data.tanggal_posting);
        $('#tgl_penutupan').text(data.data.tanggal_penutupan);
        $('#estimasi_gaji').val(data.data.estimasi_gaji);
    }

    function editdetailloker(data){
        $('#nama_lembaga').val(data.data.nama_lembaga);
        $('#nomor_kontak').val(data.data.nomor_kontak);
        $('#email').val(data.data.email);
        $('#nama_pekerjaan').val(data.data.nama_pekerjaan);
        $("#select_location option:contains(" + data.data.id_lokasi_perkerjaan +")").attr("selected", true);
        $("#select_tipe_pekerjaan option:contains(" + data.data.id_tipe_pekerjaan +")").attr("selected", true);
        $("#select_lulusan_pekerjaan option:contains(" + data.data.id_lulusan_pekerjaan +")").attr("selected", true);
        $('#summernote').summernote('code', data.data.deskripsi);
        $('#tgl_posting').text(data.data.tanggal_posting);
        $('#tgl_penutupan').text(data.data.tanggal_penutupan);
        $('#estimasi_gaji').val(data.data.estimasi_gaji);
        $("#btnaction").html("Edit");
    }

    // data field lokasi,tipe,lulusan
    function getdatafield(){
        let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/getdatafield`;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: _url,
            type: "GET",
            data: {
        },
        success: function(response) {
          console.log(response);
          generatelocation(response);
          generatetype(response);
          generategraduate(response);
        },
        error: function(response) {
            console.log(response);
        }
      });
    }

    function generatelocation(response){
      var obj = response.data[0];
      for (var key in obj){
        optionText = obj[key];
        optionValue = key;
        $('#select_location').append(new Option(optionText, optionValue));
      } 
    }

    function generatetype(response){
      var obj = response.data[1];
      for (var key in obj){
        optionText = obj[key];
        optionValue = key;
        $('#select_tipe_pekerjaan').append(new Option(optionText, optionValue));
      } 
    }

    function generategraduate(response){
      var obj = response.data[2];
      for (var key in obj){
        optionText = obj[key];
        optionValue = key;
        $('#select_lulusan_pekerjaan').append(new Option(optionText, optionValue));
      } 
    }

    function deletedataloker(){
       event.preventDefault();
          let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/delete`;
          let _token = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: _url,
              type: "POST",
              data: {
              _token,
              idRow : idRow,
              fileimage : pathimage
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
      cleardata();
    }

    function cleardata(){
        $('#nama_lembaga').val("");
        $('#nomor_kontak').val("");
        $('#email').val("");
        $('#nama_pekerjaan').val("");
        $('#select_location').val("- pilih -");
        $('#select_tipe_pekerjaan').val("- pilih -");
        $('#select_lulusan_pekerjaan').val("- pilih -");
        $('#summernote').html("");
        $('#tanggal_posting').val("");
        $('#tanggal_penutupan').val("");
        $('#estimasi_gaji').val("");
        $('#tgl_posting').text("");
        $('#tgl_penutupan').text("");
        var content = "<h4>Deskripsi Lowongan</h4>"+
          "<hr>"+
          "<p>"+
          "<p><strong>Nama Perusahaan</strong> sedang membutuhkan kandidat untuk mengisi posisi lowker sebagai:</p>" +
          "<p><strong>Nama Pekerjaan</strong></p>" +
          "<p><strong>Kriteria :</strong><br />"+
          "&#8211; Pria/Wanita<br />"+
          "&#8211; Mempunyai skilf fotografi dan videografi (diutamakan)<br />"+
          "&#8211; Menguasai software editing foto dan video<br />"+
          "&#8211; Mampu bekerja di dalam tim</p>"+
          "<p>Kirim lamaran &amp; CV ke :<br />"+
          "<strong>hrd@kontank.com</strong></p>"+
          "<p>atau ke alamat kami :</p>"+
          "<p><strong>Ivory Studio</strong><br />"+
          "Jl. Rajawali No.15B, Sanggrahan, Condongcatur, Yogyakarta</p>"+
          "<p>Info lebih lanjut :<br />"+
          "<strong>0896-7444-5222 (Nama kontak)</strong></p>"+
          "</p>";
        $('#summernote').summernote('reset');
        $('#summernote').summernote('code', content);
        //reset image logo
        resetUploadPreview();
    }
    
    function editdata(){
        let _url = `pasang-lowongan-kerja/getdatafield`;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: _url,
            type: "GET",
            data: {
            _token
        },
          success: function(response) {
            generatelocation(response);
            generatetype(response);
            generategraduate(response);
          },
          error: function(response) {
              console.log(response);
          }
        });
    }

    function savedataloker() {
        event.preventDefault();
        var checkbtn = document.getElementById('btnaction').innerHTML;
        if (checkbtn == "Simpan") {
            var nama_lembaga = $('#nama_lembaga').val();
            var nomor_kontak = $('#nomor_kontak').val();
            var email = $('#email').val();
            var nama_pekerjaan = $('#nama_pekerjaan').val();
            // var select_location = $('#select_location').find(":selected").text();
            var select_location = $('#select_location').val();
            var select_tipe_pekerjaan = $('#select_tipe_pekerjaan').val();
            var select_lulusan_pekerjaan = $('#select_lulusan_pekerjaan').val();
            var summernote = $('#summernote').val();
            var tanggal_posting = $('#tanggal_posting').val();
            var tanggal_penutupan = $('#tanggal_penutupan').val();
            var estimasi_gaji = $('#estimasi_gaji').val();
            let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/store`;
            let _token = $('meta[name="csrf-token"]').attr('content');
            var image = imageCompany;

            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => { 
                  $('#preview-image-before-upload').attr('src', e.target.result); 
                }
                reader.readAsDataURL(this.files[0]); 
            });

            var data = {
                    '_token' : _token  ,
                    'nama_lembaga' : nama_lembaga,
                    'nomor_kontak' : nomor_kontak,
                    'email' : email,
                    'nama_perkerjaan' : nama_pekerjaan,
                    'id_lokasi_pekerjaan' : select_location,
                    'id_tipe_perkerjaan' : select_tipe_pekerjaan,
                    'id_lulusan_perkerjaan' : select_lulusan_pekerjaan,
                    'tanggal_posting' : tanggal_posting,
                    'tanggal_penutupan' :tanggal_penutupan,
                    'estimasi_gaji' : estimasi_gaji
                };

            var formData = new FormData(document.getElementById("data-upload"));
            var postData = JSON.stringify(data);
            formData.append("data",postData);
            formData.append("deskripsi", summernote)

            $.ajax({
                url: _url,
                type: "POST",   
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                cache:false,
                contentType: false,
                processData: false ,
            beforeSend:function(){
              confirm("Are you sure?");
            },
            success: function(response) {
              $('#example1').DataTable().ajax.reload();
               cleardata()
            },
            error: function(response) {
                console.log(response);
            }
          });
        }else if (checkbtn == "Edit") {
            var nama_lembaga = $('#nama_lembaga').val();
            var nomor_kontak = $('#nomor_kontak').val();
            var email = $('#email').val();
            var nama_pekerjaan = $('#nama_pekerjaan').val();
            var select_location = $('#select_location').val();
            var select_tipe_pekerjaan = $('#select_tipe_pekerjaan').val();
            var select_lulusan_pekerjaan = $('#select_lulusan_pekerjaan').val();
            var summernote = $('#summernote').val();
            var tanggal_posting = $('#tanggal_posting').val();
            var tanggal_penutupan = $('#tanggal_penutupan').val();
            var estimasi_gaji = $('#estimasi_gaji').val();
            let _url = `http://127.0.0.1:8000/pasang-lowongan-kerja/edit`;
            let _token = $('meta[name="csrf-token"]').attr('content');
            var image = imageCompany;

            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => { 
                  $('#preview-image-before-upload').attr('src', e.target.result); 
                }
                reader.readAsDataURL(this.files[0]); 
            });

            var data = {
                    '_token' : _token,
                    'idRow' : idRow,
                    'nama_lembaga' : nama_lembaga,
                    'nomor_kontak' : nomor_kontak,
                    'email' : email,
                    'nama_perkerjaan' : nama_pekerjaan,
                    'id_lokasi_pekerjaan' : select_location,
                    'id_tipe_perkerjaan' : select_tipe_pekerjaan,
                    'id_lulusan_perkerjaan' : select_lulusan_pekerjaan,
                    'tanggal_posting' : tanggal_posting,
                    'tanggal_penutupan' :tanggal_penutupan,
                    'estimasi_gaji' : estimasi_gaji
                };

            var formData = new FormData(document.getElementById("data-upload"));
            var postData = JSON.stringify(data);
            formData.append("data",postData);
            formData.append("deskripsi", summernote)

            $.ajax({
                url: _url,
                type: "POST",   
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                cache:false,
                contentType: false,
                processData: false ,
            beforeSend:function(){
              confirm("Are you sure?");
            },
            success: function(response) {
              $('#example1').DataTable().ajax.reload();
               cleardata()
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