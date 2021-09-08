<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lulusankerja;
use Carbon\Carbon;

class LulusankerjaController extends Controller
{

    public function index()
    {
      return view('adminloker.lulusan.master-lulusan-kerja');
    }

    public function getdata(){
      $lulus = new Lulusankerja();
      $lulusankerja = $lulus->getall();   
      return response()->json(['data' => $lulusankerja]);
    }

    public function store(Request $request)
    {
        $graduated = $request->input('graduated');
        $date = date('Y-m-d H:i:s');
        $dateupade = date('Y-m-d H:i:s');
         
        $lulusan = new Lulusankerja();
        $lulusan->insert($graduated,$date,$dateupade);
        
        return response()->json([
            'code'=>200,
            'message'=> "Message Insert Success"
        ]
        );
    }

    public function edit(Request $request)
    {
        $graduated = $request->input('graduated');
        $idRow = $request->input('idRow');
        $date = Carbon::now();
        $dateupdate = Carbon::now()->toDateTimeString();
         
        $lulusan = new Lulusankerja();
        $lulusan->edit($idRow,$graduated,$date,$dateupdate);

        return response()->json([
            'code'=>200,
            'message'=> "Message Edit Success"
        ]
        );
    }

    public function deletedata(Request $request)
    {
        $idRow = $request->input('idRow');
        $lulusankerja = new Lulusankerja();
        $lulusankerja->deletedata($idRow);
            return response()->json([
                'code'=>200,
                'message'=> "Message Delete Success"
            ]
        );
    }

}
