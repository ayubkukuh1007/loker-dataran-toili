<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipekerja;
use Carbon\Carbon;

class TipekerjaController extends Controller
{
   public function index()
    {
      return view('adminloker.tipe.master-tipe-kerja');
    }

    public function getdata(){
      $type = new Tipekerja();
      $typekerja = $type->getall();   
      return response()->json(['data' => $typekerja]);
    }

    public function store(Request $request)
    {
        $type = $request->input('type');
        $date = date('Y-m-d H:i:s');
        $dateupade = date('Y-m-d H:i:s');
         
        $typekerja = new Tipekerja();
        $typekerja->insert($type,$date,$dateupade);
        
        return response()->json([
            'code'=>200,
            'message'=> "Message Insert Success"
        ]
        );
    }

    public function edit(Request $request)
    {
        $type = $request->input('type');
        $idRow = $request->input('idRow');
        $date = Carbon::now();
        $dateupdate = Carbon::now()->toDateTimeString();
         
        $typekerja = new Tipekerja();
        $typekerja->edit($idRow,$type,$date,$dateupdate);

        return response()->json([
            'code'=>200,
            'message'=> "Message Edit Success"
        ]
        );
    }

    public function deletedata(Request $request)
    {
        $idRow = $request->input('idRow');
        $typekerja = new Tipekerja();
        $typekerja->deletedata($idRow);
            return response()->json([
                'code'=>200,
                'message'=> "Message Delete Success"
            ]
        );
    }
}
