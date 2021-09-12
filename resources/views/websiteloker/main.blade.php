<!DOCTYPE html>
<html lang="en">
  <head>
    @include('websiteloker.meta.meta')
    @include('websiteloker.head.head')
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
      <!-- end header -->
      <div class="parallax section homehero" data-stellar-background-ratio="0.5" style="background-image:url('style/upload/tentang-kami.png');">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="home-message">
                <h2> PORTAL LOWONGAN KERJA ONLINE NO 1 <br>DI DATARAN TOILI DAN SEKITARNYA </h2>
                <p> Awali karir profesionalmu mulai sekarang. <br> Download aplikasi LOKER TOILI untuk akses yang lebih mudah di Play Store</p>
                <div class="svg-wrapper">
                  <div class="ttext">
                    <a class="btn btn-custom btn-responsive" href="#" target="_blank">Download Aplikasi <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                  <svg height="59" width="252" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="59" width="252" />
                  </svg>
                </div>
              </div>
              <!-- end message -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end section -->
      <div class="sectionnr nopadding wb">
        <div class="container">
          <form class="submit-form customform" method="GET" action="{{url('search-lowongan')}}">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Kata Kunci" name="search_keywords" id="search_keywords" >
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                  <select class="form-control" name="search_region" id="search_region">
                    <option value="" selected="" disabled="">Semua Lokasi</option>
                    @foreach ($locations as $location)
                      <option value="{{$location->id}}">{{$location->location}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="input-group">
                  <select class="form-control" name="search_graduate" id="search_graduate">
                    <option value="" selected="" disabled="">Semua Lulusan</option>
                    @foreach ($graduates as $graduated)
                      <option value="{{$graduated->id}}">{{$graduated->graduated}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <button type="submit" class="btn btn-primary btn-block">Cari Lowongan</button>
              </div>
              <!-- end col -->
            </div>
          </form>
        </div>
        <!-- end container -->
      </div>
      <!-- end section -->
      <div class="section lb">
        <div class="container">
          <div class="section-title text-center clearfix">
            <h4>Job Fair Everyday</h4>
            <p class="lead">Jangan lupa untuk bergabung juga dengan ratusan ribu komunitas job seeker di sosial media Loker Toili.</p>
          </div>
          <div class="all-jobs job-listing clearfix">
            <div class="job-title hidden-sm hidden-xs">
              <h5>Terbaru</h5>
            </div>
            <div class="job-tab" style="display: block;">
              <div class="row">
                <div class="entry-content">
                  <div class="job_listings">
                    @foreach ($jobs as $job)
                    <p></p>
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
                  <button class="see-more btn-primary job-search load_more_jobs" data-page="2" data-link="{{url('')}}/page/" data-div=".job_listings">LIHAT LOWONGAN LEBIH BANYAK</button> 
                </div>
              </div>
            </div>
          </div>
          <!-- end all-job -->
         </div>
        <!-- end container -->
      </div>
      <!-- end section -->
      <div class="parallax section parallax-off mobilebg" style="background-image:url('style/upload/aboutus.png');">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <div class="section-title-footer text-left clearfix">
                <h2>Mengapa Memilih Loker Toili?</h2>
                <p>Ada beberapa alasan mengapa anda harus memilih Loker Toili</p>
                <ul class="customlist">
                  <p class="lead">
                  <h3>Aktual</h3>
                  <li>Banyak informasi lowongan kerja terbaru dari perusahaan mitra Loker Toili yang ada di Toili dan sekitarnya yang bisa anda temukan setiap hari di sini .</li>
                  </p>
                  <p class="lead">
                  <h3>Faktual</h3>
                  <li>Semua informasi lowongan kerja yang ada di Loker Toili telah melewati tahap verifikasi. Sehingga informasi yang kami berikan benar-benar valid.</li>
                  </p>
                  <p class="lead">
                  <h3>Komprehensif</h3>
                  <li>Loker Toili bekerjasama dengan ribuan perusahaan, baik yang besar, menengah, dan kecil. Agar info lowongan kerja yang ada di sini bisa menyasar semua tingkat lulusan akademik.</li>
                  </p>
                </ul>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end section -->
      <br>
      <br>
      <br>
      <div class="section rb">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="custom_fact_item">
                <div class="custom_fact_name">
                  <h3 class="stat-count">0</h3>
                  <h6>Employers</h6>
                  <span>Perusahaan mitra kami sejak 2015</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="custom_fact_item">
                <div class="custom_fact_name">
                  <h3 class="stat-count">0</h3>
                  <h6>followers</h6>
                  <span>Pengikut kami terus bertambah sejak 2015</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="custom_fact_item">
                <div class="custom_fact_name">
                  <h3 class="stat-count">0</h3>
                  <h6>Jobs completed</h6>
                  <span>Lowongan kerja yang kami post sejak 2015</span>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end section -->
      @include('websiteloker.footer.footer')
  </body>
</html>
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<script>
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
            if (!response.length){
              alert("kosong")
            }
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
