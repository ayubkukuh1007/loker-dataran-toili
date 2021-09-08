<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RequestClient extends Model
{
    use HasFactory;

     //client 
    public function getlocations(){
        $location = DB::table('tb_lokasi')->select('id','location')->get();
        return $location;
    }

    public function getgraduations(){
        $graduation = DB::table('tb_lulusan')->select('id','graduated')->get();
        return $graduation;
    }

    public function getjobtype(){
        $jobtype = DB::table('tb_tipe')->select('id','type')->get();
        return $jobtype;
    }

    public function pagination($offset){
        $type_job = DB::table('tb_loker')->select('*')
        ->whereColumn([ ['tanggal_posting', '<=', 'tanggal_penutupan']])
        ->orderBy('id', 'desc')
        ->skip($offset)
        ->take(8)
        ->get();
        $typjob = json_decode($type_job,true);
        $totaldata = count($typjob);
        $type = [];
            for ($i=0; $i<=$totaldata-1; $i++) {
                $json = [];
                $pushtypejob = [];
                $job = $typjob[$i]['id_tipe_pekerjaan'];
                $idlocation = $typjob[$i]['id_lokasi_perkerjaan'];
                $idgraduate = $typjob[$i]['id_lulusan_pekerjaan'];
                $explode = explode(",",$job);
                // location
                $location = DB::table('tb_lokasi')->select('location')->where('id', '=', $idlocation)->get();
                $jsonlocation = json_decode($location,true);
                // graduated
                $graduated = DB::table('tb_lulusan')->select('graduated')->where('id', '=', $idgraduate)->get();
                $jsongraduated = json_decode($graduated,true);
                // type              
                for ($j=0; $j<=count($explode)-1; $j++){
                    $dataTQuerytype = DB::table('tb_tipe')->select('type')->where('id', '=', $explode[$j])->get();
                    $covert = json_decode($dataTQuerytype,true);
                    $totalconvert = count($covert);
                    for ($k=0; $k<=$totalconvert-1; $k++) {
                        $result = $covert[$k]['type'];
                        array_push($pushtypejob,$result);     
                    }         
                }
                array_push($json,$pushtypejob);
                $json['jobtype'] = $json['0'];
                unset($json['0']);
                $json['id'] = $typjob[$i]['id'];
                $json['logo'] = $typjob[$i]['image'];
                $json['job'] = $typjob[$i]['nama_pekerjaan'];
                $json['company'] = $typjob[$i]['nama_lembaga'];
                $json['graduated'] = $jsongraduated[0]['graduated'];
                $json['postdate'] = $typjob[$i]['tanggal_posting'];
                $json['location'] = $jsonlocation[0]['location'];
                $json['salary'] = $typjob[$i]['estimasi_gaji'];
                array_push($type,$json);
            }
        return $type;
    }

    public function getjob(){
        $type_job = DB::table('tb_loker')->select('*')
        ->whereColumn([ ['tanggal_posting', '<=', 'tanggal_penutupan']])
        ->orderBy('id', 'desc')
        ->skip(0)
        ->take(8)
        ->get();
        $typjob = json_decode($type_job,true);
        $totaldata = count($typjob);
        $type = [];
            for ($i=0; $i<=$totaldata-1; $i++) {
                $json = [];
                $pushtypejob = [];
                $job = $typjob[$i]['id_tipe_pekerjaan'];
                $idlocation = $typjob[$i]['id_lokasi_perkerjaan'];
                $idgraduate = $typjob[$i]['id_lulusan_pekerjaan'];
                $explode = explode(",",$job);
                // location
                $location = DB::table('tb_lokasi')->select('location')->where('id', '=', $idlocation)->get();
                $jsonlocation = json_decode($location,true);
                // graduated
                $graduated = DB::table('tb_lulusan')->select('graduated')->where('id', '=', $idgraduate)->get();
                $jsongraduated = json_decode($graduated,true);
                // type              
                for ($j=0; $j<=count($explode)-1; $j++){
                    $dataTQuerytype = DB::table('tb_tipe')->select('type')->where('id', '=', $explode[$j])->get();
                    $covert = json_decode($dataTQuerytype,true);
                    $totalconvert = count($covert);
                    for ($k=0; $k<=$totalconvert-1; $k++) {
                        $result = $covert[$k]['type'];
                        array_push($pushtypejob,$result);     
                    }         
                }
                array_push($json,$pushtypejob);
                $json['jobtype'] = $json['0'];
                unset($json['0']);
                $json['id'] = $typjob[$i]['id'];
                $json['logo'] = $typjob[$i]['image'];
                $json['job'] = $typjob[$i]['nama_pekerjaan'];
                $json['company'] = $typjob[$i]['nama_lembaga'];
                $json['graduated'] = $jsongraduated[0]['graduated'];
                $json['postdate'] = $typjob[$i]['tanggal_posting'];
                $json['location'] = $jsonlocation[0]['location'];
                $json['salary'] = $typjob[$i]['estimasi_gaji'];
                array_push($type,$json);
            }
        return $type;
    }
    
}
