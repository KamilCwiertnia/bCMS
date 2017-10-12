<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   

    <title>Beziworld.eu - Twój świat stron internetowych</title>  

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/public/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('template/public/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('template/public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('template/public/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('template/public/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/rs-plugin/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('template/public/vendor/circle-flip-slideshow/css/component.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('template/public/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('template/public/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('template/public/vendor/modernizr/modernizr.min.js') }}"></script>


    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="body">
            <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Beziworld.eu - Twój świat stron internetowych" width="232" height="60" data-sticky-width="180" data-sticky-height="47" data-sticky-top="33" src="{{ asset('img/logo.png') }}">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            @guest
                                            <li class="hidden-xs">
                                                <a href="{{ url('login') }}"><i class="fa fa-angle-right"></i> Zaloguj się</a>
                                            </li>
                                            <li class="hidden-xs">
                                                <a href="{{ route('register') }}"><i class="fa fa-angle-right"></i> Zarejestruj się</a>
                                            </li>
                                            @else
                                            <div id="userbox" class="userbox">
                                                <a href="#" data-toggle="dropdown">
                                                    <figure class="profile-picture">
                                                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name.' '.Auth::user()->surname }} " class="img-circle" data-lock-picture="/uploads/avatars/{{ Auth::user()->avatar }}" width="40">
                                                    </figure>
                                                    <div class="profile-info" data-lock-name="{{ Auth::user()->name.' '.Auth::user()->surname }} " data-lock-email="{{ Auth::user()->email }}">
                                                        <span class="name">{{ Auth::user()->name.' '.Auth::user()->surname }} </span>
                                                        <span class="role">{{ Auth::user()->roles->get(0)->display_name }}</span>
                                                    </div>
                                                    <i class="fa custom-caret"></i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <ul class="list-unstyled">
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a role="menuitem" tabindex="-1" href=""><i class="fa fa-user"></i> Mój profil</a>
                                                        </li>
                                                        @if(Auth::user()->hasRole('Administrator'))
                                                        <li>
                                                            <a role="menuitem" tabindex="-1" href="{{ url('/admin') }}"><i class="fa fa-lock"></i> Panel administratora</a>
                                                        </li>
                                                        @endif
                                                        <li>
                                                            <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Wyloguj</a>

                                                            <form id="logout-form" 
                                                            action="{{ url('/logout') }}" 
                                                            method="POST" 
                                                            style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        @endguest
                                    </ul>
                                </nav>
                                <div class="header-search hidden-xs">
                                    <form id="searchForm" action="page-search-results.html" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>                                
                            </div>
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="header-social-icons social-icons hidden-xs">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class=" ">
                                                    <a href="{{ url('/') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="{{ url('/o-nas') }}">
                                                        O nas
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="demos.html">
                                                     Oferta
                                                 </a>
                                             </li>
                                             <li class="">
                                                <a href="demos.html">
                                                 Portfolio
                                             </a>
                                         </li>
                                         <li class="">
                                            <a href="demos.html">
                                              Klienci
                                          </a>
                                      </li>
                                      <li class="">
                                        <a href="demos.html">
                                          Blog
                                      </a>
                                  </li>
                                  <li class="">
                                    <a href="demos.html">
                                     Sklep
                                 </a>
                             </li>
                             <li class="">
                                <a href="demos.html">
                                 Kontakt
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</div>
</header>
<div role="main" class="main">
    @yield('slider')
    @yield('content') 
</div>
<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>About Porto</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos... <a href="#" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>
                <hr class="light">
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="mb-sm">Kontakt</h5>
                <span class="phone">518-084-086</span>
                <ul class="list list-icons list-icons-sm">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:biuro@beziworld.eu">biuro@beziworld.eu</a></li>
                </ul>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="index.html" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
                    </a>
                </div>
                <div class="col-md-11">
                    <p>© Copyright 2017. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="{{ asset('template/public/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/vide/vide.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('template/public/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('template/public/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('template/public/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{ asset('template/public/js/views/view.home.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('template/public/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('template/public/js/theme.init.js') }}"></script>



        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
    -->

</body>
</html>
</html>
