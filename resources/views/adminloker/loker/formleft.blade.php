<div class="card-header">
    <h3 class="card-title">Input Data Loker</h3>
</div>
<form>
    <div class="card-body">
        <div class="form-group">
            <label for="inputnamalembaga">Nama Usaha/Lembaga</label>
            <input type="text" id="nama_lembaga" class="form-control" placeholder="Nama Perusahaan">
        </div>
        <div class="form-group">
            <label for="inputkontak">Nomor Kontak</label>
            <input type="text" id="nomor_kontak" class="form-control" placeholder="Nomor Kontak">
        </div>
        <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="text" id="email" class="form-control" placeholder="Email Perusahaan">
        </div>
        <div class="form-group">
            <label for="inputnamakerja">Nama Pekerjaan</label>
            <input type="text" id="nama_pekerjaan" class="form-control" placeholder="Pekerjaan">
        </div>
        <div class="form-group">
            <label for="input">Lokasi Pekerjaan</label>
            <select id="select_location" class="form-control">
                <option>- pilih -</option>
            </select>
        </div>
        <div class="form-group">
            <label for="input">Tipe Pekerjaan</label>
            <select  multiple="multiple" id="select_tipe_pekerjaan" class="form-control">
                <option>- pilih -</option>
            </select>
        </div>
        <div class="form-group">
            <label for="input">Lulusan Pekerja</label>
            <select id="select_lulusan_pekerjaan" class="form-control">
                <option>- pilih -</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal Pembukaan Lowongan <span id="tgl_posting" style="color: red; background: yellow;"></span></label>
            <input type="datetime-local" id="tanggal_posting" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal Penutupan Lowongan <span id="tgl_penutupan" style="color: red; background: yellow;"></span></span></label>
            <input type="datetime-local" id="tanggal_penutupan" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputrupiah">Gaji Kisaran</label>
            <input type="text" id="estimasi_gaji" class="form-control" placeholder="Estimasi Gaji">
        </div>
    </div>
</form>