      <div class="section footer">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-12">
              <div class="widget clearfix">
                <div class="widget-title">
                  <h4>Contact</h4>
                </div>
                <!-- end widget-title -->
                <div class="link-widget">
                  <ul class="check">
                    <li>
                      <a href="#" target="_blank">Whatsapp</a>
                    </li>
                    <li>
                      <a href="#" target="_blank">Line ID</a>
                    </li>
                    <li>
                      <a href="#">Email</a>
                    </li>
                  </ul>
                  <!-- end check -->
                </div>
                <!-- end link-widget -->
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-2 col-sm-12">
              <div class="widget clearfix">
                <div class="widget-title">
                  <h4>Network</h4>
                </div>
                <!-- end widget-title -->
                <div class="link-widget">
                  <ul class="check">
                    <li>
                      <a href="#" target="_blank">Instagram</a>
                    </li>
                    <li>
                      <a href="#" target="_blank">Facebook</a>
                    </li>
                    <li>
                      <a href="#" target="_blank">Aplikasi</a>
                    </li>
                  </ul>
                  <!-- end check -->
                </div>
                <!-- end link-widget -->
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-2 col-sm-12">
              <div class="widget clearfix">
                <div class="widget-title">
                  <h4>Quick Links</h4>
                </div>
                <!-- end widget-title -->
                <div class="link-widget">
                  <ul class="check">
                    <li>
                      <a href="#">Pasang Lowongan</a>
                    </li>
                    <li>
                      <a href="#">Tentang Kami</a>
                    </li>
                    <li>
                      <a href="#">Format Iklan</a>
                    </li>
                    <li>
                      <a href="#">Kontak</a>
                    </li>
                    <li>
                      <a href="#">Kebijakan</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <br>
                  </ul>
                  <!-- end check -->
                </div>
                <!-- end link-widget -->
              </div>
            </div>
            <!-- end col -->
            <div class="col-sm-12 col-md-6">
              <div class="widget clearfix">
                <div class="widget-title">
                  <img class="flogo" src="{{asset('style/images/logo.png')}}" alt="">
                </div>
                <!-- end widget-title -->
                <div align="justify" class="text-widget">
                  <p>
                    <font color="#F9FAFA">Loker Toili merupakan portal informasi lowongan kerja online No 1 di Toili. Sejak didirikan pada  28 agustus 2021, Loker Toili menjadi sebuah sarana para Job Seeker (pencari kerja) di Dataran Toili dan sekitarnya.</font>
                  </p>
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
                        <i class="fa fa-envelope-o" aria-hidden="true"  style="background: #28689e;"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <i class="fa fa-play" aria-hidden="true" style="background: #28689e;"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="mobileicons">
                    <a href="#" target="_blank">
                      <img src="#" alt="">
                    </a>
                    <a href="#" target="_blank">
                      <img src="#" alt="">
                    </a>
                  </div>
                </div>
                <!-- end text-widget -->
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end footer -->
      <div id="sitefooter-wrap" class="stickyfooter">
        <div id="sitefooter" class="container">
          <div id="copyright" class="row">
            <div class="col-sm-12 text-left col-md-12">
              <p align="center">
                <a href="#">Loker Toili</a> ALL RIGHTS RESERVED
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="dmtop">
        <i class="fa fa-angle-up"></i>
      </div>
      
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>

      <script type="text/javascript">
        (function() {
          var options = {
            whatsapp: "+6281238406669 ", // WhatsApp number
            call: " 081238406669 ", // Call phone number
            call_to_action: "Hubungi Kami", // Call to action
            position: "left", // Position may be 'right' or 'left'
            button_color: "#337ab7", // Color of button
            order: "whatsapp,call", // Order of buttons
            email: "Loker Toili@yahoo.com", // Email
            order: "whatsapp,email", // Order of buttons
          };
          var proto = document.location.protocol,
            host = "whatshelp.io",
            url = proto + "//static." + host;
          var s = document.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = url + '/widget-send-button/js/init.js';
          s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
          };
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        })();
      </script>
      <!-- /WhatsHelp.io widget -->