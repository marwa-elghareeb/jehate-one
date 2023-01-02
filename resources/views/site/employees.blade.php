@extends('layouts.appPortal')


@section('content')
<style>
    .icon i {
        display: inline-block;
        font-size: 16px;
        color: #232323;
        text-align: center;
        border: 1px solid #232323;
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        margin: 0 5px;
    }

    .icon-block {
        float: left;
        width: 100%;
        margin-top: 15px;
    }

    .icon-block a {
        text-decoration: none;
    }

    .icon i:hover {
        background-color: #232323;
        color: #fff;
        text-decoration: none;
    }
</style>
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s"> الموظفين لقسم ({{ $DData->name_ar}}) </h1>

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
            <div class="row d-flex flex-row-reverse">

                <div class="col-lg-8 posts-list">
                    @foreach($allData as $data)
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
                    @endforeach

                </div>





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
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">الاقسام</h4>
                            <ul class="list cat-list">

                                @foreach($allDept as $data)
                                <li>
                                    <a href="{{ URL :: to ('/employe' , $data->id )}}" class="d-flex">
                                        <p> {{ $data->name_ar }}</p>
                                        <p>({{ $data->empCount}})</p>
                                    </a>
                                </li>
                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection