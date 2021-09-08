<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lokasikerja extends Model
{
    use HasFactory;
    protected $table = "tb_lokasi";
    public function insert($lokasi,$tanggalbuat,$tanggalupdatpe)
    {
        $insertdata = DB::table('tb_lokasi')->insert([
            'location' => $lokasi
        ]);
        return $insertdata;
    }

    public function edit($idRow,$lokasi,$tanggalbuat,$tanggalupdate)
    {
        $updatedata = DB::table('tb_lokasi')
              ->where('id', $idRow)
              ->update([
                  'location' => $lokasi,
                  'update_date' => $tanggalupdate    
                ]);

        return $updatedata;
    }

    public function deletedata($idRow){
        $lokasi = DB::table('tb_lokasi')->where('id',$idRow)->delete();
        return $lokasi;
    }

    public function getall(){
        $lokasi = DB::table('tb_lokasi')->get();
        return $lokasi;
    }

    public function getlast(){
         $lastdata = DB::table('tb_lokasi')->orderBy('id', 'desc')->first();
         return $lastdata;
    }
    
}
