@extends('Author.master')


@section('content')
    
    <!--Start rev slider wrapper-->     
    <section class="rev_slider_wrapper">
        @include('Author.include.slider')
    </section>
    <!--End rev slider wrapper--> 



    <section class="about-2 sec-padd3">
        @include('Author.include.blood_donation')
    </section>


    <section class="urgent-cause2 with-bg sec-padd3">
        @include('Author.include.urgent')
    </section>


    <section class="about sec-padd2">
        @include('Author.include.about')
    </section>


    <section class="parallax sec-padd">
        @include('Author.include.savechildren')
    </section>

    <section class="gallery sec-padd">
         @include('Author.include.lastproject')    
    </section>

    <section class="fact-counter fact-counter-2 sec-padd" style="background-image: url({{ asset('front_end/images/background/10.jpg') }});">
        @include('Author.include.counter') 
    </section>

    <section class="testimonials-section3 sec-padd" style="background-image: url({{ asset('front_end/images/background/8.jpg') }});">
        @include('Author.include.testimonial') 
    </section>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

    <section class="clients-section">
        @include('Author.include.sponser')  
    </section>

    <section class="blog-section sec-padd2">
        @include('Author.include.latest_news') 
    </section>


    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Subscribe and receive weekly our newsletter</h4>
            </div>
            <div class="float_right">
                <a href="#" class="thm-btn style-3">Subscribe</a>
            </div>
                    
        </div>
    </section>



@endsection

                    



               
