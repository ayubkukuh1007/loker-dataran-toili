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
   //end search main
   
   //halaman search 
   public function pagination_keywords(Request $request,$page){
      return $this->searchjob_generateview($request);
   }

   public function page_search_generateview($job){
      $html = '';
      //$offset = ($page - 1) * 8; 
      $RequestClient = new RequestClient();
      //$getjob = $RequestClient->pagination_search($offset);
      $getjob = $job;
      //dd($getjob);
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations();
      $convertjobtype = json_decode($getjobtype, true);
      foreach($getjob as $job) {
         $html .= '<div class="row">
                     <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="post-media" style="text-align: center;">
                           <a href="#" target="_blank" class="img-thumbnail">
                           <img width="500" height="500" src='.asset('images/logo/'.$job['logo'].'').'
                           class="img-responsive wp-post-image logo" alt="logo" loading="lazy">
                           </a>
                        </div>
                     </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">';
                     foreach($convertjobtype as $type) {
                        if ($type['type'] == 'Favorite')  {
                           $html .= '<div class="badge job-type favorit">Favorite</div> ';
                        }elseif ($type['type'] == 'Freelance'){
                           $html .= '<div class="badge job-type freelance">Freelance</div> ';
                        }elseif ($type['type'] == 'Full Time'){
                           $html .= ' <div class="badge job-type fulltime">Full Time</div> ';
                        }elseif ($type['type'] == 'Part Time'){
                           $html .= '<div class="badge job-type part-time">Part Time</div> ';
                        }    
                     }
         $html .= '<h3><a href="#" title="" target="_blank" size="5">'.$job['job'].'</a></h3>
                     <small>
                        <span>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> : <a href="#">'.$job['company'].'</a>
                        </span>
                        <span>
                           <i class="fa fa-graduation-cap" aria-hidden="true"></i> : '.$job['graduated'].' </span>&nbsp;&nbsp; <span>
                           <i class="fa fa-clock-o" aria-hidden="true"></i> : '.$job['postdate'].' </span>
                     </small>
                     </div>
                     <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="job-meta">
                        <p></p>
                        <h5>'.$job['location'].'</h5>
                        <small>
                           <li>'.$job['salary'].'</li>
                        </small>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-2 col-xs-12 job-meta text-center">
                     <div class="job-meta text-center">
                        <h4></h4>
                        <a href="#" class="btn btn-primary btn-sm btn-block btn-responsive" target="_blank">Lihat Lowongan</a>
                     </div>
                  </div>
               </div>
            <hr>';
         }
      //dd($html);
      return $html;
   }

   public function searchjob_generateview(Request $request){
      $search_keywords = $request->get('search_keywords');
      $search_region = $request->get('search_region',null);
      $search_graduate = $request->get('search_graduate',null);
      $RequestClient = new RequestClient();
      if ($search_keywords == null && $search_region == null && $search_graduate == null){
         return $this->page_searchempty();
      }elseif($search_keywords != null && $search_region == null && $search_graduate == null ){
         return $this->page_search_generateview($RequestClient->searchbyjob($search_keywords));
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

   public function pagination(Request $request,$page){
      $html = '';
      $offset = ($page - 1) * 8; 
      $RequestClient = new RequestClient();
      $getjob = $RequestClient->pagination($offset);
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations();
      $convertjobtype = json_decode($getjobtype, true);
      foreach($getjob as $job) {
         $html .= '<div class="row">
                     <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="post-media" style="text-align: center;">
                           <a href="#" target="_blank" class="img-thumbnail">
                           <img width="500" height="500" src='.asset('images/logo/'.$job['logo'].'').'
                           class="img-responsive wp-post-image logo" alt="logo" loading="lazy">
                           </a>
                        </div>
                     </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">';
                     foreach($convertjobtype as $type) {
                        if ($type['type'] == 'Favorite')  {
                           $html .= '<div class="badge job-type favorit">Favorite</div> ';
                        }elseif ($type['type'] == 'Freelance'){
                           $html .= '<div class="badge job-type freelance">Freelance</div> ';
                        }elseif ($type['type'] == 'Full Time'){
                           $html .= ' <div class="badge job-type fulltime">Full Time</div> ';
                        }elseif ($type['type'] == 'Part Time'){
                           $html .= '<div class="badge job-type part-time">Part Time</div> ';
                        }    
                     }
         $html .= '<h3><a href="#" title="" target="_blank" size="5">'.$job['job'].'</a></h3>
                     <small>
                        <span>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> : <a href="#">'.$job['company'].'</a>
                        </span>
                        <span>
                           <i class="fa fa-graduation-cap" aria-hidden="true"></i> : '.$job['graduated'].' </span>&nbsp;&nbsp; <span>
                           <i class="fa fa-clock-o" aria-hidden="true"></i> : '.$job['postdate'].' </span>
                     </small>
                     </div>
                     <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="job-meta">
                        <p></p>
                        <h5>'.$job['location'].'</h5>
                        <small>
                           <li>'.$job['salary'].'</li>
                        </small>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-2 col-xs-12 job-meta text-center">
                     <div class="job-meta text-center">
                        <h4></h4>
                        <a href="#" class="btn btn-primary btn-sm btn-block btn-responsive" target="_blank">Lihat Lowongan</a>
                     </div>
                  </div>
               </div>
            <hr>';
         }
      return $html;
   }
}
