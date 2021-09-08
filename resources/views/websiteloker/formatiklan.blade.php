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
      <!-- end header -->
      <div class="parallax section parallax-off" style="background-image:url('style/upload/tentang-kami.png');">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <font color="#604935"><h1>Format Iklan</h1></font> 
                </div>
                  <p class="lead">Format permasangan iklan pada Loker Toili</p>  
            </div>
        </div>
      </div>
      <div class="container">
          <div class="section text-left clearfix">
						<p class="lead">     
							</p><p> Untuk lebih memudahkan para pencari/pelamar kerja, harap mengirimkan format pemasangan iklan dengan lengkap seperti dibawah ini:</p> 
							<b>Logo Usaha/Lembaga (bila ada)<br>
								Nama Usaha/Lembaga:<br>
								Alamat Lengkap:<br>
								No Kontak/Email:<br>
								Jenis Pekerjaan: (Full time, Part time, Freelance)<br>
								Posisi yang dicari:<br>
								Kriteria/Syarat:<br>
								Gaji/Benefit:<br>
								Kirim lamaran ke: </b> 
                <h4 style="text-align: left;">----------------------------------------	 </h4>
								CONTOH <br>
							  <p><b>Nama Usaha/Lembaga:</b> Pizza Hut Restoran <br>
								<b>Alamat Lengkap:</b> Jl. Jendral Sudirman No. 65 Yogyakarta <br>
								<b>No Kontak/Email:</b> 0274-584833 / pizzahut@gmail.com <br>
								<b>Jenis Pekerjaan:</b> Full Time <br>
								</p><p><b>Posisi yang dicari:</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
                1. Waiter<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                2. Koki<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                3. Kasir<br></p><p><b>Kriteria/Syarat:</b> <br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Pria / Wanita (1,2)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Wanita (3)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Usia max 30th (1,2) dan 25th (3)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Pendidikan minimal SMA Sederajat (1,2,3)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Mampu bekerja dengan baik, Jujur dan Bertanggungjawab (1,2,3)<br>
								</p><p><b>Gaji/Benefit:</b> 1.200k - 1.800k <br>
								<b>Kirim lamaran ke:</b> <br>
								Pizza Hut Restoran, Jl. Jendral Sudirman No. 65 Yogyakarta.<br>
								Atau via Email ke: pizzahut@gmail.com</p>
					    	<p></p><p></p><p></p><p>
              </p>
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