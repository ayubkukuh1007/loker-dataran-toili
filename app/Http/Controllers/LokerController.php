<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokerkerja;
use Carbon\Carbon;

class LokerController extends Controller
{
    public function getdatafield(){
        $loker = new Lokerkerja();
        $json = $loker->getdatafield();
        return response()->json(['data' => $json]);
    }

    public function index()
    {
      return view('adminloker.loker.master-loker-kerja');
    }

    public function getdata(){
      $loker = new Lokerkerja();
      $lokerkerja = $loker->getall();   
      return response()->json(['data' => $lokerkerja]);
    }

    public function getdataclose(){
      $loker = new Lokerkerja();
      $lokerkerja = $loker->getallclose();   
      return response()->json(['data' => $lokerkerja]);
    }

    public function store(Request $request)
    {
        $data = $request->input('data');  
        $deskripsi_loker = $request->input('deskripsi');   
        $json_string = stripslashes($data);
        $dataloker = json_decode($json_string, true);
        $nama_lembaga = $dataloker['nama_lembaga'];
        $nomor_kontak = $dataloker['nomor_kontak'];
        $email = $dataloker['email'];
        $nama_perkerjaan = $dataloker['nama_perkerjaan'];
        $id_lokasi_pekerjaan = $dataloker['id_lokasi_pekerjaan'];
        $jointypejob = $dataloker['id_tipe_perkerjaan'];
        $id_tipe_perkerjaan = join(",",$jointypejob);
        $id_lulusan_perkerjaan = $dataloker['id_lulusan_perkerjaan'];
        $deskripsi = $deskripsi_loker;
        $tanggal_posting = $dataloker['tanggal_posting'];
        $tanggal_penutupan =$dataloker['tanggal_penutupan'];
        $estimasi_gaji =$dataloker['estimasi_gaji'];

        // upload image logo perusahaan
        $validatedData = $request->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        if ($validatedData) {
            $nameimage = $request->file('image')->getClientOriginalName();
            $path = $request->image->move(public_path('images/logo'), $nameimage);
        }
        
        $loker = new Lokerkerja();
        $loker->insert($nama_lembaga,$nomor_kontak,$email,$nama_perkerjaan,
        $id_lokasi_pekerjaan,$id_tipe_perkerjaan,$id_lulusan_perkerjaan,
        $deskripsi,$tanggal_posting,$tanggal_penutupan,$estimasi_gaji,$nameimage);

        return response()->json([
            'code'=>200,
            'message'=> "Message Insert Success"
         ]
        );
    }

    public function edit(Request $request)
    {

        $data = $request->input('data');  
        $deskripsi_loker = $request->input('deskripsi');   
        $json_string = stripslashes($data);
        $dataloker = json_decode($json_string, true);
        $idRow = $dataloker['idRow'];  
        $nama_lembaga = $dataloker['nama_lembaga'];
        $nomor_kontak = $dataloker['nomor_kontak'];
        $email = $dataloker['email'];
        $nama_perkerjaan = $dataloker['nama_perkerjaan'];
        $id_lokasi_pekerjaan = $dataloker['id_lokasi_pekerjaan'];
        $jointypejob = $dataloker['id_tipe_perkerjaan'];
        $id_tipe_perkerjaan = join(",",$jointypejob);
        $id_lulusan_perkerjaan = $dataloker['id_lulusan_perkerjaan'];
        $deskripsi = $deskripsi_loker;
        $tanggal_posting = $dataloker['tanggal_posting'];
        $tanggal_penutupan =$dataloker['tanggal_penutupan'];
        $estimasi_gaji =$dataloker['estimasi_gaji'];

        // upload image logo perusahaan
        $validatedData = $request->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        if ($validatedData) {
            $nameimage = $request->file('image')->getClientOriginalName();
            $path = $request->image->move(public_path('images/logo'), $nameimage);
        }      

        $loker = new Lokerkerja();
        $loker->edit($idRow,$nama_lembaga,$nomor_kontak,$email,$nama_perkerjaan,
        $id_lokasi_pekerjaan,$id_tipe_perkerjaan,$id_lulusan_perkerjaan,
        $deskripsi,$tanggal_posting,$tanggal_penutupan,$estimasi_gaji,$nameimage);

        return response()->json([
            'code'=>200,
            'message'=> "Message Edit Success"
         ]
        );
    }

    public function getdetail(Request $request) {
        $idRow = $request->input('idRow');
        $loker = new Lokerkerja();
        $detailloker = $loker->getdetail($idRow);

        return response()->json([
            'code' => 200,
            'message' => "get detail data success",
            'data' => $detailloker
        ]);
    }

    public function deletedata(Request $request)
    {
        $idRow = $request->input('idRow');
        $fileimage = $request->input('fileimage');

        $loker = new Lokerkerja();
        $loker->deletedata($idRow);

        if(file_exists(public_path('images/logo/'.$fileimage))){
            unlink(public_path('images/logo/'.$fileimage));
        }

        return response()->json([
            'code'=>200,
            'message'=> "Message Delete Success"
        ]);
    }
}
