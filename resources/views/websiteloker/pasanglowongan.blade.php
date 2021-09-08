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
                    <a href="https://www.instagram.com/Loker Toili/" target="_blank">
                      <i class="fa fa-instagram" style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Loker Toili.co.id/" target="_blank">
                      <i class="fa fa-facebook-square" style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://play.google.com/store/apps/details?id=id.co.Loker Toili" target="_blank">
                      <i class="fa fa-whatsapp" aria-hidden="true"  style="background: #28689e;"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://itunes.apple.com/id/app/Loker Toili/id1451701919?mt=8" target="_blank">
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
                <a class="navbar-brand" title="" href="https://www.Loker Toili.co.id/">
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
      <div class="parallax section parallax-off" style="background-image:url('style/upload/tentang-kami.png');">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <font color="#604935"><h1>Pasang Lowongan</h1></font> 
                </div>
                  <p class="lead">Biaya Pemasangan Iklan Lowongan Kerja Untuk Saat Ini 
                      <span style="
                          background: darkgreen;
                          font-size: 20px;
                          font-weight: bold;
                      ">GRATIS!!</span>
                  </p>  
            </div>
        </div>
      </div>
      <div class="container">
        <div class="page-title text-center">
            <div class="heading-holder"> 
                <br> 
                <img src="{{asset('style/lowongan/format-lowongan.png')}}" alt="" >
            </div>
            <br>
        </div>
      </div>
      <!-- end section -->
      @include('websiteloker.footer.footer')
  </body>
</html>
<script src='https://stats.wp.com/e-202135.js' defer></script>
<script>
  _stq = window._stq || [];
  _stq.push(['view', {
    v: 'ext',
    j: '1:10.0',
    blog: '137155195',
    post: '2',
    tz: '7',
    srv: 'www.Loker Toili.co.id'
  }]);
  _stq.push(['clickTrackerInit', '137155195', '2']);
</script>