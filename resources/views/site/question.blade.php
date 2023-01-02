@extends('layouts.appPortal')

@section('content')
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
                <h1 data-animation="bounceIn" data-delay="0.2s"> الاسئله الشائعه </h1>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--? Our Services Start -->

  <div class="faq-section section-padding40">
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10">
          <div class="section-tittle">
            <h2> الاسئله الشائعه</h2>
          </div>
          <div class="collapse-wrapper">
          @foreach($allData as $data)
            <div class="accordion" id="accordionExample_{{ $data->id}}">
              <div class="card">
                <div class="card-header" id="heading_{{ $data->id}}">
                  <h2 class="mb-0">
                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                     data-target="#collapse_{{ $data->id}}" aria-expanded="false" 
                     aria-controls="collapse_{{ $data->id}}"> {{$data->category_id}} </a>
                  </h2>
                </div>
                <div id="collapse_{{ $data->id}}" class="collapse" aria-labelledby="heading_{{ $data->id}}" 
                data-parent="#accordionExample_{{ $data->id}}">
                  <div class="card-body">
                    <h3>
                    {{$data->question_ar}}
                      <br>
                      {{ $data->answer_ar}}
                    </h3>
                   
                    
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</main>





@endsection