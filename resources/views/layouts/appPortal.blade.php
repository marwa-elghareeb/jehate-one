<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> منصة جهات</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" href="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/web-assets/img/favicon.png')}}">

    <!-- CSS here -->
    <link rel="preconnect" href="https://fonts.gstatic.com ">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/slicknav.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets//css/flaticon.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="  {{ asset('public/web-assets/css/gijgo.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/magnific-popup.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/fontawesome-all.min.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/themify-icons.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/slick.css ') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/nice-select.css ') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/style.css ') }}">
     <link rel="stylesheet" href="{{ asset('public/web-assets/css/css.css ') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('public/web-assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header dir="rtl">
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src=" {{ asset('public/web-assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="{{ URL :: to ('/')}}">الرئيسية</a></li>
                                                <li><a href="{{ URL :: to ('/aboutUs')}}">من نحن</a></li>
                                                
                                                
                                                <li><a href="{{ URL :: to ('/contactUs')}}">تواصل معنا</a></li>

                                                <li><a href="#">دليل المستخدم</a>
                                                <ul class="submenu">
                                                    
                                                    <li><a href="{{ URL :: to ('/helpcenter')}}">مركز المساعدة</a></li>
                                                    <li><a href="{{ URL :: to ('/media')}}">المركز الأعلامي </a></li>
                                                    <li><a href="{{ URL :: to ('/question')}}">اسئلة شائعة</a></li>
                                                  
                                                </ul>

                                                <!--li><a href="{{ URL :: to ('/helpcenter')}}">مركز المساعدة </a></li-->
                                                <li><a href="{{ URL :: to ('/cards')}}">الأبراج الأفتراضية</a>
                                                    <!--ul class="submenu">
                                                            <li><a href="blog.html">الشركات</a></li>
                                                            <li><a href="blog_details.html">الموظفين</a></li>
                                                           <<li><a href="elements.html">Element</a></li>
</ul-->

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-65">
                                        <a href="https://app.jehat.sa/client_login.aspx" class="border-btn">تسجيل الدخول</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->


    @yield('content')



     <!--? Want To work 01-->
    
     <section class="wantToWork-area ">
            <div class="container">
                <div class="wants-wrapper w-padding2 section-bg2" data-background="{{ asset('public/web-assets/img/gallery/section_bg02.png') }}">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption text-center">
                                <h2>كيف يمكنني تحميل التطبيق</h2>
                                <p>تستطيع تحميل تطبيق جهات من متجر جوجل أو أبستور</p>
                                <a href="https://apps.apple.com/eg/app/jehat/id1600983802">
                                    <img src=" {{ asset('public/web-assets/img/gallery/nmn.png') }}" alt="" style="height: 50px; width: 150px;"></a>
                                <a href="https://play.google.com/store/apps/">
                                    <img src="{{ asset('public/web-assets/img/gallery/mmm.png') }}" alt="" style="height: 50px; width: 150px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->

    </main>
</section>



    <footer dir="rtl">
        <div class="footer-wrappper section-bg" data-background=" {{ asset('public/web-assets/img/gallery/footer-bg.png') }}">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src=" {{ asset('public/web-assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-tittle text-center">
                                            <p>  &nbsp; يمكنك متابعتنا على قنوات التواصل الأجتماعي </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a target="_blank" href="https://twitter.com/jehat_Platform"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100084844831017"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                        <a target="_blank" href="https://www.instagram.com/invites/contact/?i=an5lcynrcsp3&utm_content=n0t065o"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://www.youtube.com/channel/UCfwE7stMZzQlurXJN2eQvIQ"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>عن منصة جهات</h4>
                                    <ul>
                                        <li><a href="{{ URL :: to ('/aboutUs')}}"> من نحن </a></li>
                                        <li><a href="{{ URL :: to ('/ourTeam')}}">  فريق العمل </a></li>
                                        <li><a href="#">الشهادات</a></li>
                                        <li><a href="#">اعضاء الادارة</a></li>
                                        

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>المسؤولية القانونية</h4>
                                    <ul>
                                        <li><a href="{{ URL :: to ('/footerPages')}}">شروط استخدام المنصة</a></li>
                                        <li><a href="#">حماية العملاء</a></li>
                                        <li><a href="#">سياسة الخصوصية</a></li>
                                        <li><a href="#">شركائنا</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>تواصل معنا</h4>
                                    <ul>
                                        <li><a href="#">الدعم الفني</a></li>
                                        <li><a href="#">info@jehat.sa</a></li>
                                        <li><a href="#">+966553777769</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        
                                        جميع الحقوق محفوظة منصة جهات &copy; 2022
                                   
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src=" {{ asset('public/web-assets/js/vendor/modernizr-3.5.0.min.js  ') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src=" {{ asset('public/web-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/popper.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src=" {{ asset('public/web-assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="  {{ asset('public/web-assets/js/owl.carousel.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/slick.min.js ') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('public/web-assets/js/wow.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/animated.headline.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.magnific-popup.js ') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('public/web-assets/js/gijgo.min.js ') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('public/web-assets/js/jquery.nice-select.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src=" {{ asset('public/web-assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src=" {{ asset('public/web-assets/js/jquery.counterup.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/waypoints.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.countdown.min.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src=" {{ asset('public/web-assets/js/contact.js') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.form.js  ') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.validate.min.js') }}"></script>
    <script src="  {{ asset('public/web-assets/js/mail-script.js ') }}"></script>
    <script src=" {{ asset('public/web-assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src=" {{ asset('public/web-assets/js/plugins.js ') }}"></script>
    <script src="{{ asset('public/web-assets/js/main.js ') }}"></script>

</body>

</html>