@extends('layouts.appPortal')


@section('content')

<style>
.btn {
font-size: 30px;}

.slider-height {
    min-height: 900px; }

.slider-area .hero__caption,
.slider-area2 .hero__caption {
    text-align: center;
    padding-top: 190px
}

</style>

 <!--? slider Area Start-->
 <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">منصة جهات مستقبل كل الجهات</h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">تُتيح للجهات فتح مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر </p>
                                    
                                    <a href="{{ URL :: to ('/cards')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s">منصة جهات
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">منصة جهات مستقبل كل الجهات</h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">تُتيح للجهات فتح مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر </p>
                                    
                                <a href="{{ URL :: to ('/cards')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s"> 
                                        منصة جهات</a>
                                </div>
                                <!--########################################################################################################-->
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <div class="project-screen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="screen-img">
                        <br>
                            <img src=" {{ asset('public/web-assets/img/gallery/screen.png' ) }} " alt="" class=" w-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!--? Brand Area Start -->
        <br>
        <br>
        <br>
 <div class="brand-area">
            <div class="container">
                <h1 >أكثر من 850 جهة وشركة وثقوا بنا</h1>
                <br>
                <div class="brand-active brand-border pt-50">
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand1.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand2.png  ') }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand3.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('public/web-assets/img/gallery/brand4.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand5.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand6.png ' ) }}" alt="">
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
          <!--? Brand Area Start -->
        
		
        <!-- Brand Area End -->
        <!--? Our Services Start -->
        <section class="our-services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                        <h2>لماذا منصة جهات هي الأفضل</h2>
                            <!--<p></p>-->
                        </div>
                    </div>
                </div>
                <div class="row  d-flex justify-content-center">
                    <div class=" col-lg-4 col-md-6 col-sm-6  text-center">
                        <div class=" mb-30 single-services">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services1.png ') }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center ">
                                <h2  class="font-weight-bold" ><a href="#" >التطوير المستمر</a></h2>
                                <h3 class="font-weight-light">تمتع بتصميم صديق للجوال وموديلات متعددة الاستخدام تواكب كل جديد</h3>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class=" mb-30 single-services">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services2.png' ) }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2 class="font-weight-bold" ><a href="#">دعم فني</a></h2>
                                <h3>دعم فني على مدار الساعه لدينا فريق تقني مدرب على اعلى مستوي لحل كافة المشكلات</h3>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class=" single-services mb-30">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services3.png ') }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2 class="font-weight-bold" ><a href="#">التخزين السحابي</a></h2>
                                <h3>بكل أمان ويسر يمكنك متابعه جميع معاملاتك من اى مكان دون الخوف من فقدانها</h3>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services  mb-30">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services4.png') }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2 class="font-weight-bold" ><a href="#"> تقارير متعددة</a></h2>
                                <h3>تقدم المنصه تقارير واحصائيات متعددة قابله للعرض وايضا للطباعة</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class=" single-services mb-30">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services55.png') }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2 class="font-weight-bold" ><a href="#">فواتير إلكترونية</a></h2>
                                <h3>بكل مرونه تستطيع إنشاء فواتير الكترونية موثقة ب QR مع إمكانية المسح الرقمي</h3>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/services66.png ') }}" alt="">
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2 class="font-weight-bold" ><a href="#">معاملات متعددة</a></h2>
                                <h3>إدارة المعاملات باحترافيه وإدارة شئون الموظفين بكل يسر وعدد غير محدود من العملاء</h3>
                            </div>
                        </div>
                    </div>
                </div>
</div>
        </section>
        <!-- Our Services End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40 section-bg2" data-background="{{ asset('public/web-assets/img/gallery/section-bg3.png') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <div class="about-icon">
                                <img src=" {{ asset('public/web-assets/img/icon/about.svg') }}" alt="">
                            </div>
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>منصة الجهات</h2>
                            </div>
                            <p class="mb-20">
                                أول أبراج مكتبية أفتراضية .... نعم اول أبراج أفتراضيه تعكس الواقع الفعلي للابراج المكتبيه وتستطيع أي جهة أن تأخذ مساحة بهذا البرج وتفتح مكاتب أفتراضية لكل موظفيها فتتمكن الجهة من نقل العمل المكتبي الى بيئة الكترونية منظمة وفق احدث المتطلبات ومعايير الحماية

                            </p>
                            <a href="https://app.jehat.sa/client_register.aspx" class="all-btn"><button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">سجل الأن</button></a>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-icon embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" 
                            src="{{asset('public/web-assets/img/jehat.mp4')}} " 
                            allowfullscreen></iframe>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? About Area  -->
        <section class="about-area2 pb-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 col-md-9">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src=" {{ asset('public/web-assets/img/gallery/about1.jpg ') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <div class="about-icon">
                                <img src="  {{ asset('public/web-assets/img/icon/about.svg') }}" alt="">
                            </div>
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>منصة المستفيد</h2>
                            </div>
                            
                            <p class="mb-20">  كل شخص يستطيع بهويته الشخصية ان يفتح له مكتب أفتراضي ويتواصل من مكتبه مع أي جهة موجوده داخل المنصة بسهولة ويسر والتمتع بكافة المزايا التقنية من ترتيب وتنظيم المعاملات والاجتماعات والمواعيد فلا حاجه للذهاب الى مقر الجهة ولا تقلق من نسيان موعد تابع جميع معاملاتك لحظه بلحظه كل هذا واكثر سارع بالتسجيل الان</p>
                            <a href="https://app.jehat.sa/client_register.aspx" class="all-btn"><button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">سجل الأن</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        
        <!--? Testimonial Area Start -->
        <section class="testimonial-area fix">    
            <div class="container" >   
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center">
                            <h2>ماذا قال عملائنا عنا</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrapper section-bg2 pt-15">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-8 col-md-12 col-sm-9">
                            <div class="about-caption">
                                <!-- Testimonial Start -->
                                <div class="h1-testimonial-active dot-style">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src=" {{ asset('public/web-assets/img/icon/mm.png ') }}" alt="" class="quotes-sign"> 
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src="{{ asset('public/web-assets/img/icon/quotes-sign.png') }}" alt="" class="quotes-sign">                      
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src="{{ asset('public/web-assets/img/icon/mn.png ') }}" alt="" class="quotes-sign">                      
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->

       

@endsection