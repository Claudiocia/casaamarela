<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="{{route('/')}}" class="logo d-flex align-items-center">
                        <img src="{{asset('site/img/logo_pluripensar_hor_web.png')}}" alt="">
                    </a>
                    <p>Um Espaço para o debate sobre o ensino superior gratuito e de qualidade. Veja como participar</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Links</h4>
                    @if(Auth::guest())
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Participar</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contato</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Cadastro</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Login</a></li>
                        </ul>
                    @else
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Participar</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contato</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Logout</a></li>
                        </ul>
                    @endif
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>MarketingMix</span></strong>. Todos os direitos reservados.
        </div>
        <div class="credits">
            Designed by <a href="#">MarketingMix</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('site/vendor/aos/aos.js')}}"></script>
<script src="{{asset('site/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('site/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('site/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('site/vendor/glightbox/js/glightbox.min.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('site/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
            $("#celular").mask('(00) 00000-0000');
</script>
<script type="text/javascript">
    function handleInput(e) {
        var ss = e.target.selectionStart;
        var se = e.target.selectionEnd;
        e.target.value = e.target.value.toUpperCase();
        e.target.selectionStart = ss;
        e.target.selectionEnd = se;
    }
</script>
@livewireScripts
</body>

</html>
