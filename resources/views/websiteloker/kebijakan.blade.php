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
                    <font color="#604935"><h1>Kebijakan</h1></font> 
                </div>
                  <p class="lead">kebijakan yang perlu di perhatikan</p>  
            </div>
        </div>
      </div>
      <div class="container">
        <div class="section text-left clearfix">
		    <p class="lead">
                </p><p>Demi terus menjaga kredibilitas Jogjalowker, maka kami mengeluarkan kebijakan bagi semua follower sebagai berikut.<br><br>        
                <b>DEAR PENCARI / PELAMAR KERJA</b> <br>
                </p><p>1. Harap cek terlebih dahulu kredibilitas perusahaan / tempat kerja yang akan anda lamar.</p>
                <p>2. Silahkan kirimkan lamaran kerja ke perusahaan yang anda inginkan secara manual (Via Email, Kontak, atau datang langsung).</p>
                <p>3. Kami memberikan fitur hybrid “Lamar Kerja” secara otomatis &amp; secara manual di website, agar Jogjalowker bisa dinikmati oleh semua perusahaan, baik perusahaan besar, menengah, ataupun kecil yang dapat digunakan secara otomatis dan secara tradisional dalam merekrut palamar kerja.</p>
                <p>4. Harap laporkan kepada kami jika ada unsur penipuan atau pemungutan biaya dalam proses perekrutan karyawan baru dalam lowongan kerja yang masuk di Jogjalowker</p>
                <p>5. Semua informasi lowongan kerja yang masuk di Jogjalowker telah melewati tahap verifikasi Admin. Kami berusaha semaksimal mungkin untuk memposting Info Lowongan Kerja yang valid demi kenyamanan dan kemaslahatan bersama</p>								
                <br>                                      
                <p>	<b>LARANGAN</b> <br>      
                </p><p>1. Kami melarang semua follower memberikan berkomentar yang melanggar SARA, fitnah, atau menebar kebencian di sosial media Jogjalowker.</p>
                <p>2. Kami melarang semua aktifitas spam di kolom komentar sosial media Jogjalowker.</p>
                <p>3. Apabila ketahuan melakukan pelanggaran diatas, maka kami akan memblokir akun tersebut secara permanen.</p> <br>
                <p>	<b>DEAR PENGIKLAN LOWONGAN KERJA</b> <br>
                </p><p>1. Apabila anda ingin memasang/mengiklankan lowongan kerja di Jogjalowker, Silahkan langsung hubungi kontak kami. Agar kami bisa menverifikasi iklan anda.</p>
                <p>2. Harap mengirimkan detail informasi lowongan kerja yang ingin anda iklankan dengan jelas. Nama Perusahaan / Lembaga, Alamat, Posisi yang di cari, Kriteria, Fulltime / Partime, No kontak / email, dan lain-lain</p>
                <p>3. Harap tidak mengirimkan info lowongan kerja kepada kami, jika anda bukan orang yang berwenang di perusahaan tersebut. Agar info yang masuk pada kami benar-benar info yang valid.</p>
                <p>4. Iklan lowongan kerja yang sudah masuk atau sedang tayang, tidak dapat di pending atau dibatalkan dengan alasan apapun. Kecuali pengiklan ingin iklan dihapus dan kontrak iklan dinyatakan selesai.</p> <br>
                <p>	<b>LARANGAN</b> </p>
                <p>1. Dilarang memasukkan informasi lowongan kerja yang tidak jelas dan bersifat penipuan.</p>
                <p>2. Dilarang memanipulasi posisi lowongan kerja untuk mengecoh pelamar (Contoh: Iklan posisi Supir, ternyata jadi Sales Marketing).</p>
                <p>3. Dilarang meminta/menarik sejumlah uang kepada pelamar kerja dengan alasan apapun (psikotes, cek kesehatan, dll).</p>
                <p>4. Apabila ketahuan melakukan pelanggaran diatas, maka demi menjaga kredibilitas Jogjalowker dan kemaslahatan bersama, kami berhak menolak pemasangan iklan tersebut.</p>
                <p>5. Apabila iklan sudah tayang, maka kami berhak untuk menghapus iklan tersebut dari semua media kami, dan semua proses iklan kami nyatakan selesai</p><br>
                <p>Sekian kebijakan dari kami untuk kemaslahatan bersama. Membaca atau tidak, kami anggap anda SETUJU dengan semua kebijakan kami. Atas perhatiannya, kami ucapkan terimakasih<br></p><br>
                <p>Hormat kami<br>Founder Jogjalowker</p><p></p> <p></p><p></p><p>
            </p>		
         </div>
	   </div>
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