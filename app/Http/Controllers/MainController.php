<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestClient;

class MainController extends Controller
{
   public function index(){   
      $RequestClient = new RequestClient();
      $getjob = $RequestClient->getjob();
      $getgraduations = $RequestClient->getgraduations(); 
      $getjobtype = $RequestClient->getjobtype();
      $getlocations = $RequestClient->getlocations(); 
      return view('websiteloker.main',
         [  'jobs' => $getjob,
            'locations' => $getlocations,
            'jobtypes' => $getjobtype,
            'graduates' => $getgraduations
         ]);
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
