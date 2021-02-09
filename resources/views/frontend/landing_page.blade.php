@extends('layouts.frontend')
@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                @foreach($get_land_slider as $slider)
                <div class="carousel-item active" style="background-image: url({{asset('uploads/lander_banner/')}}/{{$slider->image}});">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{$slider->title}}</h2>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Slide 2 -->
               <!--  <div class="carousel-item" style="background-image: url(assets/img/gallery/gallery-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Infosys applied AI: Integrated Offering
                                for Enterprises to Scale and Future-proof AI-powered Transformation</h2>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div> -->

                <!-- Slide 3 -->
                <!-- <div class="carousel-item" style="background-image: url(assets/img/gallery/gallery-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Infosys applied AI: Integrated Offering
                                for Enterprises to Scale and Future-proof AI-powered Transformation</h2>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div> -->

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Description Section ======= -->
   <section id="description" class="description" style="background: url({{asset('frontend_assets/img/description/bg.jpg')}});">
            <div class="container" data-aos="fade-up">
                <h1 class="text-center" style="color: #fff;">{{$get_land_description->title}}</h1>
                <div class="desc-content">
                    <div class="row">
                        <div class="col-md-6 col-12" data-aos="fade-right">
                            <p style="color: #fff;">{{$get_land_description->paragraph}}</p>
                        </div>
                        <div class="col-md-6 col-12" data-aos="fade-left">
                            <div class="desc-img">
                                <img src="{{asset('uploads/lander_description/')}}/{{$get_land_description->image}}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Description Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">
                            <h1>Request For Services</h1>
                            <p>Find out more about how we can help your organization navigate its next. Let us know your
                                areas of interest so that we can serve you better.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="First Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="Last Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="company" id="company"
                                        placeholder="Company" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="job" id="job"
                                        placeholder="Job Title" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="number" class="form-control" name="Phone" id="Phone"
                                        placeholder="Phone" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea style="resize: none;" class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact Section -->


    </main><!-- End #main -->
@endsection