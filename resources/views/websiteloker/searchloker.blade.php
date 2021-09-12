<!DOCTYPE html>
<html lang="en">
  <head>
    @include('websiteloker.meta.meta')
    @include('websiteloker.head.head')
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loading.css')}}">
  <body>
    <div id="wrapper">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12 center-xs">
              <p class="topbar-text">
                <strong>
                 <i class="fa fa-phone" aria-hidden="true"></i>
                </strong>
                <font color="#F9FAFA">08123-840-6669</font><strong>
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </strong>
                <font color="#F9FAFA">lokerdatarantoiil@gmail.com</font>
              </p>
            </div>
            <!-- end col -->
            <div class="col-md-6 col-sm-12 center-xs text-right">
              <div class="social-topbar">
                <ul class="list-inline social-small">
                  <li>
                    <a href="#" target="_blank">
                      <i class="fa fa-instagram" style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="fa fa-facebook-square" style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="fa fa-whatsapp" aria-hidden="true"  style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="fa fa-play" aria-hidden="true" style="background: #28689e;"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end topbar -->
      <header class="header">
        <div class="container-fluid">
          <nav class="navbar navbar-default yamm">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="" href="#">
                  <img src="{{asset('style/images/logo.png')}}" alt="" class="img-responsive">
                </a>
              </div>
              <!-- end navbar header -->
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li>
                    <a title="" href="{{ url('/') }}">Home</a>
                  </li>
                  <li>
                    <a title="" href="{{ url('format-iklan') }}">Format Iklan</a>
                  </li>
                  <li class="dropdown yamm-half hasmenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="{{ url('kontak') }}">Kontak</a>
                      </li>
                      <li>
                        <a href="{{ url('kebijakan') }}">Kebijakan</a>
                      </li>
                      <li>
                        <a href="{{ url('tentang-kami') }}">Tentang Kami</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="btn btn-primary" title="" href="{{url('pasang-lowongan')}}">Pasang Lowongan Kerja</a>
                  </li>
                </ul>
                <!-- end dropdown -->
              </div>
              <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
          </nav>
          <!-- end nav -->
        </div>
        <!-- end container -->
      </header> 
      <div class="section lb">
          <div class="container">
             <div class="all-jobs job-listing clearfix">
                <div class="job-tab" style="display: block;">
                    <div class="entry-content">
                        <div class="job_listings">
                            @include('websiteloker.filter.filter')
                            <div class="loader">
                                <img src="{{asset('images/gif/spinner.gif')}}" alt="loading.."> 
                              </div>
                            <div id="listjob">
                              @foreach ($jobs as $job)
                                <div class="row"> 
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                      <div class="post-media" style="text-align: center;">
                                        <a href="#" target="_blank" class="img-thumbnail">
                                          <img width="500" height="500" src="{{asset('images/logo/')}}/{{$job['logo']}}" 
                                          class="img-responsive wp-post-image logo" alt="logo" loading="lazy">
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        @foreach ($job['jobtype'] as $type)
                                          @if ($type == 'Favorite')
                                              <div class="badge job-type favorit">Favorite</div>
                                          @elseif ($type == 'Part Time')
                                              <div class="badge job-type part-time">Part Time</div>
                                          @elseif ($type == 'Freelance')
                                              <div class="badge job-type freelance">Freelance</div>
                                          @elseif ($type == 'Full Time')
                                              <div class="badge job-type fulltime">Full Time</div>                              
                                          @endif
                                        @endforeach
                                        <h3><a href="#" title="" target="_blank" size="5">{{$job['job']}}</a></h3>
                                        <small>
                                          <span>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i> : <a href="#">{{$job['company']}}</a>
                                          </span>
                                          <span>
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i> : {{$job['graduated']}} </span>&nbsp;&nbsp; <span>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> : {{$job['postdate']}} </span>
                                          <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i> : <a href="#">{{$job['posttime']}}</a>
                                          </span>
                                        </small>
                                      </div>
                                      <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta">
                                          <p></p>
                                          <h5>{{$job['location']}}</h5>
                                          <small>
                                            <li>{{$job['salary']}}</li>
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
                                <hr>
                              @endforeach
                            </div>
                             <button class="see-more btn-primary job-search load_more_jobs" data-page="2" data-link="{{url('')}}/page/" data-div="#listjob">LIHAT LOWONGAN LEBIH BANYAK</button> 
                        </div>
                    </div>
                </div> 
             </div>
          </div>
      </div>
      @include('websiteloker.footer.footer')
  </body>
</html>
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<script>

  $(function() {
      $("#search_keywords").focus();
  });

  $('#search_keywords').keypress(function(e){
      if(e.which == 13){
          e.preventDefault();
          var search_keywords = $('#search_keywords').val();
          var search_graduate = $('#search_graduate').val(); 
          var search_region = $('#search_region').val();  
          $div = $($(this).data('div')); 
          $link = $(this).data('link'); 
          $page = $(this).data('page'); 
          $href = $link + $page; 
          let _url = $href;
          let _token = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: _url,
              type: "POST",
              data: {
                search_keywords : search_keywords,
                search_graduate : search_graduate,
                search_region : search_region,
                _token
          },
          beforeSend: function() {
            $('.loader').css('display','block');
          },
          success: function(response) {
              $('.loader').css('display','none');
              $('#listjob').empty();
              $html = response;
              $div.append($html);
              var str = (parseInt($page) + 1);
              $("#search_keywords").data('page', String(str));
          },
          error: function(response) {
            
          }
          });
        }
    });

  //load more
  $(".see-more").click(function() {
      event.preventDefault();
      $div = $($(this).data('div')); 
      $link = $(this).data('link'); 
      $page = $(this).data('page'); 
      $href = $link + $page; 
      let _url = $href;
      let _token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
          url: _url,
          type: "GET",
          data: {
      },
        success: function(response) {
            $html = response;
            $div.append($html);
            var str = (parseInt($page) + 1);
            $(".see-more").data('page', String(str));
        },
        error: function(response) {
          
        }
      });
  });
  
</script>