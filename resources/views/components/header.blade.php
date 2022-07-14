
        <header class="home-architecture">
        @if(Request::is('/') || Request::is('about'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top sticky navbar-boxed navbar-static-overlay header-reverse-scroll navbar-cover" style="position:fixed;padding-top: 20px;">
        @else
        <nav id="navbar-with-background" class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top sticky navbar-boxed navbar-static-overlay header-reverse-scroll navbar-cover" style="position:fixed; padding-top: 20px;">
        @endif
                    <div class="container-fluid h-100px md-h-70px">
                        <div class="col-6 col-lg-2 me-auto ps-lg-0">
                            <a class="navbar-brand" href="{{url('/')}}">
                            <img id="navbar-logo-white" src="assets/img/logo9.png" data-at2x="assets/img/logo9.png" class="default-logo" alt="" style="max-height: 60px;">
                            <img id="navbar-logo-black" src="assets/img/logo10.png" data-at2x="assets/img/logo10.png" class="default-logo" alt="" style="max-height: 60px;display: none;">
                             <img src="assets/img/logo10.png" data-at2x="assets/img/logo10.png" class="alt-logo" alt="" style="max-height: 60px;">
                            <img id="navbar-logo-white-mob" src="assets/img/logo9.png" data-at2x="assets/img/logo9.png" class="mobile-logo" alt="" style="max-height: 60px;">
                            <img id="navbar-logo-black-mob" src="assets/img/logo10.png" data-at2x="assets/img/logo10.png" class="mobile-logo" alt="" style="max-height: 60px; display: none;">
                            </a>
                        </div>
                        <div id="white-menu-container" class="col-auto text-white text-end" style="transform: scale(1.5); margin-right: 15px;">
                            <div class="header-push-button">
                                <a href="javascript:void(0);" class="push-button" id="white-menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div id="black-menu-container" class="col-auto text-black text-end" style="transform: scale(1.5); margin-right: 15px; display: none;">
                            <div class="header-push-button">
                                <a href="javascript:void(0);" class="push-button" id="black-menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="hamburger-menu hamburger-menu-big-font bg-extra-medium-slate-blue xl-w-30 lg-w-20 md-w-30 sm-w-100">
                    <a href="javascript:void(0);" class="close-menu text-white"><i class="ti-close"></i></a>
                    <div class="row g-0 h-100">
                        <div class="col-lg-12">
                            <div class="row g-0 align-items-center justify-content-center h-100 padding-3-rem-all xs-padding-3-rem-all">
                                <div class="col-12 menu-list-wrapper menu-list-wrapper-small text-center text-md-start" data-scroll-options='{ "theme": "light" }'>
                                    <!-- start menu -->
                                    <ul class="menu-list alt-font w-100">
                                        <!-- start menu item -->
                                        <li class="menu-list-item"><a href="{{ url('/') }}">home</a>
                                    </li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/research') }}">expertise</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/projects') }}">projects</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/about') }}">about us</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/social-posts') }}">social posts</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/contact') }}">contact</a></li>
                                        <!-- end menu item -->
                                    </ul>
                                    <!-- end menu -->
                                </div>
                                <div class="col-12 d-none d-md-block">
                                    <div class="alt-font margin-50px-top social-icon-style-12 text-small text-uppercase">
                                        <ul class="list-style-03 light">
                                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f w-30px"></i>Facebook</a></li>
                                            <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter w-30px"></i>Twitter</a></li>
                                            <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram w-30px"></i>Instagram</a></li>
                                            <li class="no-border"><a class="dribbble" href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble w-30px"></i>Dribbble</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>