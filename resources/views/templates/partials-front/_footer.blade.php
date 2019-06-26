    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 footer-info">
            <a href="#intro" class="scrollto"
                ><img src="{{ asset('front-assets/img/tanibrebes.png')}}"/></a
            ><br /><br />
            <p>
                Kerjasama Universitas Pancasakti Tegal dengan Dinas Pertanian
                dan Ketahanan Pangan Kabupaten Brebes
            </p>
            </div>

            <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
                {{ $about->address ? $about->address:'Jl. Halmahera No.KM. 01, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121' }}<br />
                <strong>Phone:</strong> {{ $about->phone ? $about->phone:'+62 856 4025 1605' }} <br />
                <strong>Email:</strong> {{ $about->email ? $about->email:'admin@gmail.com' }}<br />
            </p>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
          &copy; Copyright 2019 <strong>Tani Brebes</strong>. All Rights
          Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->

          {{-- Design By <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
          By <a href="https://fredynurapriyanto.com">Fredy</a>
          & <a href="https://instagram.com/maulanaabdulsiddiq">Maulana</a>
        </div>
      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    {{-- Uncomment below i you want to use a preloader --}}
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('front-assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{ asset('front-assets/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('front-assets/js/main.js')}}"></script>
  </body>
</html>
