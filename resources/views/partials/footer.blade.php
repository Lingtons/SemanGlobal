
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-2 col-sm-12">
                <div class="footer-widget">
                    <img src="{{asset('img/log-color.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://appunit-ltd.com/" target="_blank">AppUnit</a>
        </div>
    </div>
</footer>


<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>


@yield('scripts')
