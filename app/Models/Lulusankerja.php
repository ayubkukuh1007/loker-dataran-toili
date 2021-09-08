<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lulusankerja extends Model
{
    use HasFactory;
    protected $table = "tb_lulusan";

    public function insert($graduate,$tanggalbuat,$tanggalupdatpe)
    {
        $insertdata = DB::table('tb_lulusan')->insert([
            'graduated' => $graduate
        ]);
        return $insertdata;
    }

    public function edit($idRow,$graduate,$tanggalbuat,$tanggalupdate)
    {
        $updatedata = DB::table('tb_lulusan')
              ->where('id', $idRow)
              ->update([
                  'graduated' => $graduate,
                  'update_date' => $tanggalupdate    
                ]);

        return $updatedata;
    }

    public function deletedata($idRow){
        $deletedata = DB::table('tb_lulusan')->where('id',$idRow)->delete();
        return $deletedata;
    }

    public function getall(){
        $getall = DB::table('tb_lulusan')->get();
        return $getall;
    }

    public function getlast(){
         $getlast = DB::table('tb_lulusan')->orderBy('id', 'desc')->first();
         return $getlast;
    }
}
