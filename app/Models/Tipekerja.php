<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tipekerja extends Model
{
    use HasFactory;
    protected $table = "tb_tipe";
    
    public function insert($graduate,$tanggalbuat,$tanggalupdatpe)
    {
        $insertdata = DB::table('tb_tipe')->insert([
            'type' => $graduate
        ]);
        return $insertdata;
    }

    public function edit($idRow,$graduate,$tanggalbuat,$tanggalupdate)
    {
        $updatedata = DB::table('tb_tipe')
              ->where('id', $idRow)
              ->update([
                  'type' => $graduate,
                  'update_date' => $tanggalupdate    
                ]);

        return $updatedata;
    }

    public function deletedata($idRow){
        $deletedata = DB::table('tb_tipe')->where('id',$idRow)->delete();
        return $deletedata;
    }

    public function getall(){
        $getall = DB::table('tb_tipe')->get();
        return $getall;
    }

    public function getlast(){
         $getlast = DB::table('tb_tipe')->orderBy('id', 'desc')->first();
         return $getlast;
    }
}
