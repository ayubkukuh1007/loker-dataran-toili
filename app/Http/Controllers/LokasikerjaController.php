<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasikerja;
use Carbon\Carbon;

class LokasikerjaController extends Controller
{

    public function index()
    {
      return view('adminloker.lokasi.master-lokasi-kerja');
    }

    public function getdata(){
      $lokasi = new Lokasikerja();
      $lokasikerja = $lokasi->getall();   
      return response()->json(['data' => $lokasikerja]);
    }

    public function store(Request $request)
    {
        $lokasi = $request->input('lokasikerja');
        $tanggalbuat = date('Y-m-d H:i:s');
        $tanggalupdate = date('Y-m-d H:i:s');
         
        $Lokasikerja = new Lokasikerja();
        $Lokasikerja->insert($lokasi,$tanggalbuat,$tanggalupdate);
        
        return response()->json([
            'code'=>200,
            'recordsTotal'=> "Message Insert Success"
        ]
        );
    }

    public function edit(Request $request)
    {
        $lokasi = $request->input('lokasikerja');
        $idRow = $request->input('idRow');
        $tanggalbuat = Carbon::now();
        $tanggalupdate = Carbon::now()->toDateTimeString();
         
        $Lokasikerja = new Lokasikerja();
        $Lokasikerja->edit($idRow,$lokasi,$tanggalbuat,$tanggalupdate);

        return response()->json([
            'code'=>200,
            'recordsTotal'=> "Message Edit Success"
        ]
        );
    }

    public function deletedata(Request $request)
    {
        $idRow = $request->input('idRow');
        $Lokasikerja = new Lokasikerja();
        $Lokasikerja->deletedata($idRow);
            return response()->json([
                'code'=>200,
                'recordsTotal'=> "Message Delete Success"
            ]
        );
    }

    public function show($id)
    {
        $lokasi = Lokasikerja::find($id);
        return response()->json($lokasi);
    }

    public function destroy($id)
    {
        $lokasi = Lokasikerja::find($id)->delete();
        return response()->json(['success'=>'Lokasikerja Deleted successfully']);
    }

    //client
     public function clientlocationreq(){
        $location = new Lokasikerja();
        $location->test();
        return response()->json(['data'=> $location]);
     }
}
