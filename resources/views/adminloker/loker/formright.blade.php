<div class="card-header">
    <h3 class="card-title">Detail Loker</h3>
</div>
<div class="card-body">
    <div class="form-group">
        <label for="deskripsi">Deskripsi Pekerjaan</label>
        <textarea id="summernote">
            <h4>Deskripsi Lowongan</h4>
            <hr>
            <p> 
            <p><strong>Nama Perusahaan</strong> sedang membutuhkan kandidat untuk mengisi posisi lowker sebagai:</p>
            <p><strong>Nama Pekerjaan</strong></p>
            <p><strong>Kriteria :</strong><br />
            &#8211; Pria/Wanita<br />
            &#8211; Min S1 semua jurusan<br />
            &#8211; Mempunyai skilf fotografi dan videografi (diutamakan)<br />
            &#8211; Menguasai software editing foto dan video<br />
            &#8211; Mampu bekerja di dalam tim</p>
            <p>Kirim lamaran &amp; CV ke :<br />
            <strong>hrd@kontank.com</strong></p>
            <p>atau ke alamat kami :</p>
            <p><strong>Ivory Studio</strong><br />
            Jl. Rajawali No.15B, Sanggrahan, Condongcatur, Yogyakarta</p>
            <p>Info lebih lanjut :<br />
            <strong>0896-7444-5222 (Nama kontak)</strong></p>
            </p>
        </textarea>
    </div>
    
    <div class="form-group">
        <label for="exampleInputFile">Logo</label>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <input type="file" name="image" placeholder="Choose image" id="image">
            </div>
            </div>
            <div class="col-md-12 mb-2">
                <img id="preview-image-before-upload" src="http://127.0.0.1:8000/images/logo/unknown.gif"
                alt="preview image" style="max-height: 100px;">
            </div>
            <button type="button" id="removebtn" onclick="resetUploadPreview()">Remove Logo</button>
        </div>   
    </div>
</div>