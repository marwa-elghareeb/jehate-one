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
								<h1 data-animation="bounceIn" data-delay="0.2s"> المركز الاعلامي</h1>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	<div class="row align-items-center justify-content-center ">

	
	<a href="{{ asset('public/web-assets/presentation.pdf' ) }}" class="btn hero-btn"  data-animation="fadeInUp" data-delay="0.7s" > تحميل ملف آلية عمل المنصة </a>
	<a href="{{ asset('public/web-assets/user guide.pdf' ) }}"class="btn hero-btn"  data-animation="fadeInUp" data-delay="0.7s"> تحميل ملف دليل المستخدم </a>
	</div>             
              

	<div class="section-top-border">
	<div class="container">
		<h1>شرح منصة مستفيد </h1>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
					<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g1.jpg' ) }}">

					<h3> انشاء جهه جديده </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g5.jpg' ) }}">
					<h3> الية التسجيل كمستفيد </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g3.jpg' ) }}">
					<h3> تغيير لغة العرض </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g8.jpg' ) }}">
					<h3> حضور الاجتماعات والتصويت </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g4.jpg' ) }}">
					<h3> استرجاع كلمه المرور </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g2.jpg' ) }}">
					<h3> تعديل البيانات الشخصيه </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g9.jpg' ) }}">
					<h3> اضافه المفوضين واداره المستندات </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g6.jpg' ) }}">
					<h3> اضافه واداره المواعيد </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g10.jpg' ) }}">
					<h3> اضافه ومتابعه طلب </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g7.jpg' ) }}">
					<h3> الانتقال الى مكتبي </h3>
				</a>
			</div>
		</div>
	</div>
</div>
	<div class="section-top-border">
	<div class="container">
		<h3>شرح منصة الموظف</h3>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h1.jpg' ) }}">
					<h3> اضافه وادارة الفواتير الالكترونية</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h2.jpg' ) }}">
					<h3> اضافه ومتابعه الطلبات </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h3.jpg' ) }}">
					<h3> ادارة الاجتماع اثناء الانعقاد</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h4.jpg' ) }}">
					<h3>التعليقات وانواع الاسناد</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h5.jpg' ) }}">
					<h3>ادارة العملاء والاقسام </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h6.jpg' ) }}">
					<h3> ادارة غرف الفيديو كونفرس</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h7.jpg' ) }}">
					<h3> الية انشاء  الاجتماعات</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h8.jpg' ) }}">
					<h3> استخدام فلتر بحث المعاملات</h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h9.jpg' ) }}">
					<h3> ادارة الموظفين </h3>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h10.jpg' ) }}">
					<h3> اضافه واداره المواعيد</h3>
				</a>
			</div>
		</div>
	</div>
</div>
	@endsection