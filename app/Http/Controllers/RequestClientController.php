<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestClient;

class RequestClientController extends Controller
{
    public function getlocations(){
      $RequestClient = new RequestClient();
      $locations = $RequestClient->getlocations();   
      return response()->json(['data' => $locations]);
    }

    public function getgraduations(){
      $RequestClient = new RequestClient();
      $graduations = $RequestClient->getgraduations();   
      return response()->json(['data' => $graduations]);
    }

    public function getjobtype(){
      $RequestClient = new RequestClient();
      $jobtype = $RequestClient->getjobtype();   
      return response()->json(['data' => $jobtype]);
    }

    public function getjobs(){
      $RequestClient = new RequestClient();
      $jobs = $RequestClient->getjob();  
      return response()->json(['data' => $jobs]);
    }
}
