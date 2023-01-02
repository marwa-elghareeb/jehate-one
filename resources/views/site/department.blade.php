@extends('layouts.appPortal')
@section('content')

<main>
    <!--?-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s"> الاقسام والموظفين ({{ $cData->name_ar}}) </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row ">


                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='البحث عن موظف' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">بحث</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget  text-center">
                            <h4 class="widget_title" style="color: #2d2d2d;">الاقسام</h4>
                            <ul class="list cat-list text-center">

                                @foreach($allData as $data)
                                <li>
                                    <a href="{{ URL :: to ('/employe' , $data->id )}}" class="d-flex ">
                                        <p class=" text-center"> {{ $data->name_ar }}</p>
                                        <p class=" text-center">({{ $data->empCount}})</p>
                                    </a>
                                </li>
                                @endforeach

                    </div>
                </div>


                <div class="col-lg-8 posts-list">
                    <div class="single-post"></div>
                    @foreach($allEmp as $data)


                    <div class="blog-author">
                        <div class="media align-items-center">

                            <div class="media-body">
                                <a href="#">
                                    <h4>{{ $data->name }}</h4>
                                </a>
                                <p>{{ $data->position }}</p>
                                <div class="p-3 mb-2 pt-4 ">

                                    <div class="icon-block">
                                        <a class="icon" href="mailto:{{ $data->email }}"><i class="fa fa-envelope"></i></a>
                                        <a class="icon" href="https://wa.me/{{ $data->whats_app }}?text="> <i class="fab fa-whatsapp"></i></a>
                                        <a class="icon" href="{{ $data->meeting_link }}"> <i class="fa fa-link"></i></a>
                                    </div>

                                </div>
                            </div>
                            <img src="{{ URL ::to ('public/upload/'.$data->image)}}" alt="">
                        </div>
                    </div>

                    <!--div class="blog-author">
                        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                        <div class="card">
                           <div class="team-image-wrapper">
                            <img src="{{ URL ::to ('public/upload/'.$data->image)}}" alt="" class="img-fluid team-member-image  img-thumbnail rounded-circle" alt="image1">
                            </div>
                            <div class="media-body ">
                                <a href="#">
                                    <h4 class="text-blk name">{{ $data->name }}</h4>
                                </a>
                                <p class="text-blk position">{{ $data->position }}</p>
                                <div class="p-3 mb-2 pt-4 "> 
                                 
                                 <div class="icon-block">
                                    <a class="icon" href="mailto:{{ $data->email }}"><i class="fa fa-envelope"></i></a>
                                    <a class="icon" href="https://wa.me/{{ $data->whats_app }}?text="> <i class="fab fa-whatsapp"></i></a>
                                    <a  class="icon"href="{{ $data->meeting_link }}"> <i class="fa fa-link"></i></a>
                                </div>

                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                    </div-->
                    @endforeach

                </div>





            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!--title>برج جهات الافتراضي</title>
<style type="text/css">
        .section {
            background-color: #f3f4f5;
        }
    </style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel='stylesheet' href='https://demo.themesberg.com/pixel-pro/css/pixel.css'>

<div class="section section-md py-5">
    <div class="container">
      
        <div class="row">
            <div class="col-md-4 text-center mx-auto">
                <div class="mb-5">
                    <a href="#">
                        <img src="{{ URL ::to ('public/upload/'.$cData->image)}}" alt="image" class="mb-4" style="width: 75px;">
                        <h1 class="h3 mb-4" style="text-decoration: underline;">{{ $cData->name_ar }}</h1>
                    </a>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10 mx-auto">
             
                <div class="timeline timeline-one">

                @foreach($allData as $data)
                   
                    <div class="timeline-item">
                        <span class="icon icon-info icon-lg"><i class="fab fa-react"></i></span>
                        <h5 class="my-3" style="text-decoration: underline;">
                            <a href="{{ URL :: to ('/employe' , $data->id )}}">
                                {{ $data->name_ar }}</a></h5>
                        <p>يتم عرض الاقسام الخاصه بالشركه وعند اختيار قسم معين يتم الدخول الى صفحه الموظفين الخاصين بالشركه </p>
                    </div>
                    @endforeach

                </div>
                
            </div>
        </div>


        <div class="col-sm">
            
        </div>
    </div>
</div>
</div>
</div>
</div-->

    @endsection