<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Lokerkerja extends Model
{
    use HasFactory;
    protected $table = "tb_loker";

    public function getdatafield(){
        $location = DB::table('tb_lokasi')->pluck('location','id');
        $type = DB::table('tb_tipe')->pluck('type','id');
        $graduate = DB::table('tb_lulusan')->pluck('graduated','id');
        return $data = array($location,$type,$graduate);
    }
    
    public function insert($nama_lembaga,$nomor_kontak,$email,$nama_perkerjaan,
        $id_lokasi_perkejaan,$id_tipe_perkerjaan,$id_lulusan_perkerjaan,
        $deskripsi,$tanggal_posting,$tanggal_penutupan,$estimasi_gaji,$logo)
    {
        $insertdata = DB::table('tb_loker')->insert([
            'nama_lembaga' => $nama_lembaga,
            'nomor_kontak' => $nomor_kontak,
            'email' => $email,
            'nama_pekerjaan' => $nama_perkerjaan,
            'id_lokasi_perkerjaan' => $id_lokasi_perkejaan,
            'id_tipe_pekerjaan' => $id_tipe_perkerjaan,
            'id_lulusan_pekerjaan' => $id_lulusan_perkerjaan,
            'deskripsi' => $deskripsi,
            'tanggal_posting' => $tanggal_posting,
            'tanggal_penutupan' => $tanggal_penutupan,
            'estimasi_gaji' => $estimasi_gaji,
            'image' => $logo,
        ]);

        return $insertdata;
    }

    public function edit($idRow,$nama_lembaga,$nomor_kontak,$email,$nama_perkerjaan,
        $id_lokasi_perkejaan,$id_tipe_perkerjaan,$id_lulusan_perkerjaan,
        $deskripsi,$tanggal_posting,$tanggal_penutupan,$estimasi_gaji,
        $create_date,$update_date,$logo)
    {
        $updatedata = DB::table('tb_loker')
              ->where('id', $idRow)
              ->update([
                    'nomor_kontak' => $nomor_kontak,
                    'email' => $email,
                    'nama_perkerjaan' => $nama_perkerjaan,
                    'id_lokasi_perkejaan' => $id_lokasi_perkejaan,
                    'id_tipe_perkerjaan' => $id_tipe_perkerjaan,
                    'id_lulusan_perkerjaan' => $id_lulusan_perkerjaan,
                    'deskripsi' => $deskripsi,
                    'tanggal_posting' => $tanggal_posting,
                    'tanggal_penutupan' => $tanggal_penutupan,
                    'estimasi_gaji' => $estimasi_gaji,
                    'create_date' => $create_date,
                    'update_date' => $update_date,
                    'image' => $logo
                ]);

        return $updatedata;
    }

    public function getdetail($idRow) {
         $getdetail = DB::table('tb_loker')->where('id', $idRow)->first();
         return $getdetail;
    }

    public function deletedata($idRow){
        $deletedata = DB::table('tb_loker')->where('id',$idRow)->delete();
        return $deletedata;
    }

    public function getall(){
        $getall = DB::table('tb_loker')
        ->select('*')
        ->whereColumn([
            ['tanggal_posting', '<=', 'tanggal_penutupan']
         ])->get();
        return $getall;
    }

    public function getallclose(){
        $getall = DB::table('tb_loker')
        ->select('*')
        ->whereColumn([
            ['tanggal_posting', '>=', 'tanggal_penutupan']
         ])->get();
        return $getall;
    }

    public function getlast(){
         $getlast = DB::table('tb_loker')->orderBy('id', 'desc')->first();
         return $getlast;
    }
}
