@extends('layouts.frontend')
@section('content')
	<!-- ======= Hero Section ======= -->
	<section id="hero" style=" background: url({{asset('uploads/banner/')}}/{{$get_banner->image}}) top center;" class="d-flex align-items-center">
		<div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
			<div class="row">
				<div class="col-lg-8">
					<h1>{{$get_banner->title}}</h1>
					<div class="btns">
						<a href="#menu" class="btn-menu animated fadeInUp scrollto">{{$get_banner->button}}</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<!-- ======= About Section ======= -->
		<section id="about" class="about" style="background-image: url({{asset('uploads/description/')}}/{{$get_description->image}});">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
						<!-- <div class="about-img">
							<img src="{{asset('frontend_assets/img/about/about.jpg')}}" alt="">
						</div> -->
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
						<h3>{{$get_description->heading}}</h3>
						<p class="font-italic">{{$get_description->short_heading}}</p>
						<div class="btns">
							<a href="#menu" class="btn-menu animated fadeInUp scrollto">{{$get_description->button}}</a>
						</div>

						<div class="cases">
							<p>{{$get_description->case_head}}</p>
							<div class="row">
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description->ca_one_title}}</p>
									<a href="#">{{$get_description->ca_one_btn}}</a>
								</div>
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description->ca_two_title}}</p>
									<a href="">{{$get_description->ca_two_btn}}</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End About Section -->
		<section id="about" class="about" style="background-image: url({{asset('uploads/description_one/')}}/{{$get_description_one->image}});">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
						<!-- <div class="about-img">
							<img src="assets/img/about/about.jpg" alt="">
						</div> -->
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content">
						<h3>{{$get_description_one->heading}}</h3>
						<p class="font-italic" style="color: #35b729;">{{$get_description_one->short_heading}}</p>
						<!-- <div class="btns">
							<a href="#menu" class="btn-menu animated fadeInUp scrollto">Read More</a>
						</div> -->

						<div class="cases">
							<p>{{$get_description_one->case_head}}</p>
							<div class="row">
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description_one->ca_one_title}}</p>
									<div class="btns">
										<a href="https://arifonoy.com" class="btn-menu animated fadeInUp scrollto">{{$get_description_one->ca_one_button}}</a>
									</div>
								</div>
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description_one->ca_two_title}}</p>
									<div class="btns">
										<a href="https://arifonoy.com" class="btn-menu animated fadeInUp scrollto">{{$get_description_one->ca_two_button}}</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				

			</div>
		</section>

			<section id="about" class="about" style="background-image: url({{asset('uploads/description_two/')}}/{{$get_description_two->image}});">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
						<!-- <div class="about-img">
							<img src="assets/img/about/about.jpg" alt="">
						</div> -->
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
						<h3>{{$get_description_two->heading}}</h3>
						<p class="font-italic" style="color: #35b729;">{{$get_description_two->short_heading}}</p>
						<!-- <div class="btns">
							<a href="#menu" class="btn-menu animated fadeInUp scrollto">Read More</a>
						</div> -->

						<div class="cases">
							<p>{{$get_description_two->case_head}}</p>
							<div class="row">
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description_two->ca_one_title}}</p>
									<div class="btns">
										<a href="https://arifonoy.com" class="btn-menu animated fadeInUp scrollto">{{$get_description_two->ca_one_button}}</a>
									</div>
								</div>
								<div class="col-md-6 col-12 case-study">
									<p>{{$get_description_two->ca_two_title}}</p>
									<div class="btns">
										<a href="https://arifonoy.com" class="btn-menu animated fadeInUp scrollto">{{$get_description_two->ca_two_button}}</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				

			</div>
		</section>

<!-- ======= services Section ======= -->
		<section id="services" class="services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Our Service Areas</h2>
					<p>Industries Hiring</p>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-3">
						<ul class="nav nav-tabs flex-column">
							@foreach($get_service as $service)
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-{{$service->id}}">
									<img src="{{asset('uploads/service_icon/')}}/{{$service->service_icon}}" alt="" srcset="">
									<span>{{$service->service_name}}</span>
								</a>
							</li>
							@endforeach
							<!-- <li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2">
									<img src="assets/img/icons/icon2.svg" alt="" srcset="">
									<span>Hospitality</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-3">
									<img src="assets/img/icons/icon3.svg" alt="" srcset="">
									<span>Manufacturing</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-4">
									<img src="assets/img/icons/icon4.svg" alt="" srcset="">
									<span>Education &amp; Government</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-5">
									<img src="assets/img/icons/icon5.svg" alt="" srcset="">
									<span>Software/IT</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-6">
									<img src="assets/img/icons/icon6.svg" alt="" srcset="">
									<span>Front Line Support</span>
								</a>
							</li> -->
						</ul>
					</div>
					<div class="col-lg-9 mt-4 mt-lg-0">
						<div class="tab-content">
							<div class="tab-pane active" id="tab-2">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img style="width: 100%" src="{{asset('frontend_assets/img/services/service.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Learn More About Our Services</h3>
										<!-- <p class="font-italic">26 Jobs in 10 Different Companies</p> -->
									</div>
								</div>
							</div>
							@foreach($get_service as $service)
							<div class="tab-pane" id="tab-{{$service->id}}">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('uploads/service/')}}/{{$service->image}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>{{$service->image_title}}</h3>
										<p class="font-italic">{{$service->image_sub_title}}</p>
									</div>
								</div>
							</div>
							@endforeach
							<!-- <div class="tab-pane" id="tab-2">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('frontend_assets/img/services/service-3.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Manufacturing</h3>
										<p class="font-italic">26 Jobs in 10 Different Companies</p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-3">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('frontend_assets/img/services/service-2.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Hospitality</h3>
										<p class="font-italic">26 Jobs in 10 Different Companies</p>
									</div>
								</div>
							</div>
							
							<div class="tab-pane" id="tab-4">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('frontend_assets/img/services/service-4.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Education & Government</h3>
										<p class="font-italic">26 Jobs in 10 Different Companies</p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-5">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('frontend_assets/img/services/service-5.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Software/IT</h3>
										<p class="font-italic">26 Jobs in 10 Different Companies</p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-6">
								<div class="row">
									<div class="col-lg-12 details order-2 order-lg-1">
										<div class="tab-img">
											<img src="{{asset('frontend_assets/img/services/service-6.jpg')}}" alt="" class="img-fluid">
											<div class="tab-overlay"></div>
										</div>
									</div>
									<div class="serv-img-txt">
										<h3>Front Line Support</h3>
										<p class="font-italic">26 Jobs in 10 Different Companies</p>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End Specials Section -->

		<!-- ======= careers Section ======= -->
		<section id="careers" class="careers">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>careers</h2>
					<p>What Our Clients Say</p>
				</div>
				<div class="careers-img">
					<!-- <img src="assets/img/gallery/gallery-1.jpg" alt=""> -->
				</div>
				<div class="row">
					<!-- <div class="col-md-7 d-none d-md-block"></div> -->
					<div class="col-md-12 col-12">
						<div class="careers-testimonial">
							<!-- <h2>What Our Clients Say</h2> -->
							<div class="owl-carousel careers-carousel" data-aos="fade-up" data-aos-delay="100">
								@foreach($get_carrer_slider as $slider)
								<div class="row career-item">
									<div class="col-lg-3">
										<img src="{{asset('uploads/carrer_slider/')}}/{{$slider->image}}" class="img-fluid" alt="">
									</div>
									<div class="col-lg-9 pt-4 pt-lg-0 content">
										<p class="font-italic">
											{{$slider->description}}
										</p>
									</div>
								</div>
								@endforeach
								<!-- <div class="row career-item">
									<div class="col-lg-3">
										<img src="{{asset('frontend_assets/img/careers/testimonials-2.jpg')}}" class="img-fluid" alt="">
									</div>
									<div class="col-lg-9 pt-4 pt-lg-0 content">
										<p class="font-italic">
											"I'm most excited about the opportunity to grow at
											Infosys.I'm most excited about the opportunity to grow at
											Infosys.I'm most excited about the opportunity to grow at
											Infosys."
										</p>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End careers Section -->

		<!-- ======= Contact Section ======= -->
		<!-- <section id="contact" class="contact">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>Contact</h2>
					<p>Contact Us</p>
				</div>
				<div class="row">
					<div class="col-md-7 col-12">

					</div>
					<div class="col-md-5 col-12"></div>
				</div>
			</div>
		</section> -->
		<!-- End Contact Section -->
				<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>Contact</h2>
					<p>Contact Us</p>
				</div>
				<div class="row">
					<div class="col-md-7 col-12">
						<div class="row">
							<div class="col-6">
								<p class="contact-region" onclick="redirectC()">{{$get_country->country_one}}</p>
							</div>
							<div class="col-6">
								<p class="contact-region" onclick="redirectC()">{{$get_country->country_two}}</p>
							</div>
							<div class="col-6">
								<p class="contact-region" onclick="redirectC()">{{$get_country->country_three}}</p>
							</div>
							<div class="col-6">
								<p class="contact-region" onclick="redirectC()">{{$get_country->country_four}}</p>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-12">
						<h2 class="contact-h2">{{$get_country->title}}</h2>
						<div class="btns">
							<a href="{{url('landing_page')}}" class="btn-menu animated fadeInUp scrollto">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Section -->

@endsection