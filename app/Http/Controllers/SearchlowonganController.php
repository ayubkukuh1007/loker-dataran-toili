<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestClient;
use App\Http\Controllers\MainController;

class SearchlowonganController extends Controller
{
    
    public function index(){   
      $RequestClient = new RequestClient();
      $getjob = $RequestClient->getjob();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $getjob,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function searchjob(Request $request){
      $search_keywords = $request->get('search_keywords');
      $search_region = $request->get('search_region',null);
      $search_graduate = $request->get('search_graduate',null);
      $RequestClient = new RequestClient();
      if ($search_keywords == null && $search_region == null && $search_graduate == null){
         return redirect()->action([MainController::class, 'index']);
      }elseif($search_keywords != null && $search_region == null && $search_graduate == null ){
         return $serachjob = $RequestClient->searchbyjob($search_keywords);
      }elseif($search_keywords != null && $search_region != null && $search_graduate == null ){
         return $serachjob = $RequestClient->searchbyjobregion($search_keywords,$search_region);
      }elseif($search_keywords != null && $search_region == null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbyjobgaduated($search_keywords,$search_graduate);

      }elseif($search_keywords == null && $search_region != null && $search_graduate == null ){
         return $serachjob = $RequestClient->searchbyjregion($search_region);
      }elseif($search_keywords != null && $search_region != null && $search_graduate == null ){
         return $serachjob = $RequestClient->searchbyregionjob($search_region,$search_keywords);
      }elseif($search_keywords == null && $search_region != null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbyregiongraduated($search_region,$search_graduate);

      }elseif($search_keywords == null && $search_region == null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbygraduated($search_graduate);
      }elseif($search_keywords != null && $search_region == null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbygraduatedjob($search_graduate,$search_keywords);
      }elseif($search_keywords == null && $search_region != null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbygraduatedregion($search_graduate,$search_region);

      }elseif($search_keywords != null && $search_region != null && $search_graduate != null ){
         return $serachjob = $RequestClient->searchbyall($search_keywords,$search_region,$search_graduate);
      }else{
         return redirect()->action([MainController::class, 'index']);
      }
   }
}
