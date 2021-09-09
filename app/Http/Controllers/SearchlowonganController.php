<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestClient;
use App\Http\Controllers\MainController;

class SearchlowonganController extends Controller
{ 
   public function index(Request $request){  
      return $this->searchjob($request);
   }

   public function page_searchempty(){
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

   public function page_search_byjob($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbyjobregion($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }


   public function page_searchbyjobgraduated($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbyregion($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbyregionkeywords($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbyregiongraduated($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbygraduated($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbygraduatedkeywords($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchbygraduatedregion($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
   }

   public function page_searchall($job){
      $RequestClient = new RequestClient();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.searchloker',
         [  'jobs' => $job,
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
         return $this->page_searchempty();
      }elseif($search_keywords != null && $search_region == null && $search_graduate == null ){
         return $this->page_search_byjob($RequestClient->searchbyjob($search_keywords));
      }elseif($search_keywords != null && $search_region != null && $search_graduate == null ){
         return $this->page_searchbyjobregion($RequestClient->searchbyjobregion($search_keywords,$search_region));
      }elseif($search_keywords != null && $search_region == null && $search_graduate != null ){
         return $this->page_searchbyjobgraduated($RequestClient->searchbyjobgaduated($search_keywords,$search_graduate));

      }elseif($search_keywords == null && $search_region != null && $search_graduate == null ){
         return $this->page_searchbyregion($RequestClient->searchbyjregion($search_region));
      }elseif($search_keywords != null && $search_region != null && $search_graduate == null ){
         return $this->page_searchbyregionkeywords($RequestClient->searchbyregionjob($search_region,$search_keywords));
      }elseif($search_keywords == null && $search_region != null && $search_graduate != null ){
        return $this->page_searchbyregiongraduated($RequestClient->searchbyregiongraduated($search_region,$search_graduate));

      }elseif($search_keywords == null && $search_region == null && $search_graduate != null ){
         return $this->page_searchbygraduated($RequestClient->searchbygraduated($search_graduate));
      }elseif($search_keywords != null && $search_region == null && $search_graduate != null ){
         return $this->page_searchbygraduatedregion($RequestClient->searchbygraduatedjob($search_graduate,$search_keywords));
      }elseif($search_keywords == null && $search_region != null && $search_graduate != null ){
         return $this->page_searchbygraduatedregion($RequestClient->searchbygraduatedregion($search_graduate,$search_region));

      }elseif($search_keywords != null && $search_region != null && $search_graduate != null ){
        return $this->page_searchall($RequestClient->searchbyall($search_keywords,$search_region,$search_graduate));
      }else{
         return redirect()->action([MainController::class, 'index']);
      }
   }
}
