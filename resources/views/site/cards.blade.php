@extends('layouts.appPortal')

@section('content')
<style>
  .small-text {
    color: #2c2b0c;
  }

  .work-process-section {
    width: 100%;
    display: block;
    padding: 90px 0px 100px;
  }

  .work-process-section .heading-block {
    width: 100%;
    display: block;
    max-width: 600px;
    margin: 0px auto 60px;
    text-align: center;
  }

  .work-process-section .heading-block .description {
    font-size: 16px;
    color: #666666;
    margin-bottom: 0px;
  }

  .work-process-block {
    max-width: 1600px;
    width: 100%;
    margin: 0px auto;
    /* height: 450px; */
  }

  .work-process-layout1 .work-process-top .number {
    display: inline-block;
    width: 80px;
    height: 80px;
    text-align: center;
    border: 5px solid;
    font-size: 26px;
    font-weight: 700;
    line-height: 73px;
    margin-left: 40px;
    margin-bottom: 25px;
    background-color: #404DFF !important;
    border-radius: 50%;
    position: relative;
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
  }

  .work-process-layout1 .work-process-top {
    text-align: center;
    position: relative;
  }

  .work-process-layout1 .work-process-top .shape {
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
    display: inline-block;
    position: absolute;
    left: 25px;
    top: 63px;
    width: 100%;
    height: 270px;
    max-width: 270px;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%);
    border-radius: 10px;
    z-index: 0;
    -webkit-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    transform: rotate(-5deg);
    background-color: #a340cc;
  }

  .work-process-layout1 .vs-work-process-2 .shape {
    background: #8233a3 !important;
  }

  .work-process-layout1 .vs-work-process-2 .number {
    background: #404DFF !important;
  }

  .work-process-layout1 .vs-work-process-2 .work-process-content {
    border-color: #be79db !important;
  }

  /* .work-process-layout1 .vs-work-process-3 .shape { background: #008dc4  !important; }
.work-process-layout1 .vs-work-process-3 .number{ background: #008dc4  !important; }
.work-process-layout1 .vs-work-process-3 .work-process-content { border-color: #008dc4  !important; }
 */
  .work-process-layout1 .vs-work-process-4 .shape {
    background: #8233a3 !important;
  }

  .work-process-layout1 .vs-work-process-4 .number {
    background: #404DFF !important;
  }

  .work-process-layout1 .vs-work-process-4 .work-process-content {
    border-color: #be79db !important;
  }

  .work-process-layout1 .work-process-content {
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
    border-radius: 10px;
    box-shadow: 0px 3px 0px 0px rgba(17, 180, 245, 0.004),
      0px 3px 50px 0px rgba(17, 180, 245, 0.1);
    background-color: rgba(255, 255, 255, 0.969);
    padding: 35px 20px;
    padding-bottom: 30px;
    max-width: 270px;
    border-bottom: 3px solid #be79db;
    position: relative;
  }

  .work-process-layout1 .work-process-content.odd-block {
    border-color: #be79db;
  }

  .work-process-layout1 .work-process-content .icon {
    width: 45px;
    height: 45px;
    margin: 0px auto 20px;
  }

  .work-process-layout1 .work-process-content .icon img {
    width: 100%;
    height: 100%;
  }

  .work-process-layout1 .work-process-content .process-title {
    color: #1d165c;
    font-size: 20px;
    line-height: 30px;
    transition: all 500ms ease;
    font-weight: 600;
    margin-bottom: 12px;
  }

  .work-process-layout1 .work-process-content .text {
    position: relative;
    font-size: 14px;
    line-height: 24px;
    color: #666666;
    transition: all 500ms ease;
    margin-bottom: 0px;
  }

  .work-process-layout1 .vs-work-process:hover .work-process-top .shape {
    -webkit-transform: rotate(0);
    -ms-transform: rotate(0);
    transform: rotate(0);
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  }

  .work-process-layout1 .vs-work-process:hover .work-process-top .number {
    margin-bottom: 0px;
    margin-left: 0%;
  }

  .screen-img {
    display: flex !important;
    justify-content: flex-end !important;
    margin-left: auto !important;
    margin-right: 0 !important;
  }
</style>

<main>
  <!--? slider Area Start-->
  <section class="slider-area slider-area2">
    <div class="slider-active">
      <!-- Single Slider -->
      <div class="single-slider slider-height2">
        <div class="container">
          <div class="row justify-content-center ">
            <div class="col-xl-8 col-lg-11 col-md-12">
              <div class="hero__caption hero__caption2 text-center ">
                <h1 data-animation="bounceIn" data-delay="0.2s">منصة جهات</h1>
                <!--div class="screen-img ">
                  <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" 
                  alt="" class=" w-50">
                </div-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="work-process-section " id="processDiv">
    <!--<div class="container-fluid">
    <div class="heading-block">
      <p class="small-text  "> _Work Flow_ </p>
      <h1 class="heading "> Our service Process </h1>
      <p class="description "> Web designing in a powerful way of just not a profession, however, in a passion for our Company. We have a tendency to believe the idea that smart looking. </p>
    </div>-->

    <div class="container">
    <div class=" work-process-block work-process-layout1">
      <div class="row">
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated">
              <span class="shape"></span>
              <span class="number border-white text-white">04</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>-->
              <h3 class="process-title heading4">المعارض الافتراضيه</h3>
              <p class="text">يتم عرض جميع المعارض الموجود فى المنصه وتفاصيل كل معرض</p><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-2 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.2s">
              <span class="shape"></span>
              <span class="number border-white text-white">03</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.2s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>-->
              <h3 class="process-title heading4">المتاجر الالكترونيه</h3>
              <p class="text">يتم العمل عليها فى الوقت الحالى وسيتم رفعها قريبا</p><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-3 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.3s">
              <span class="shape"></span>
              <span class="number border-white text-white">02</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.3s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>-->
             
              <h3 class="process-title heading4">مكتبى  </h3>
              <p class="text">عرض جميع المعارض الموجود فى المنصه وتفاصيل كل معرض</p><br>
              <a href="https://app.jehat.sa/client_login.aspx" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</a>


            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-4 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.4s">
              <span class="shape"></span>
              <span class="number border-white text-white">01</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.4s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>-->
              
              <h3 class="process-title heading4">المكاتب الافتراضيه</h3>
              <p class="text">يتم عرض جميع الشركات الموجوده فى المنصه وكذلك الاقسام الخاصه بها وايضا الموظفين</p><br>
              <a href="{{ URL :: to ('/allCompanies')}}" 
              class="btn btn-outline-secondary  btn-sm pt-8 ">المزيد</a>

            </div>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
    <!--  -->


    </div>

  </section>


</main>
@endsection