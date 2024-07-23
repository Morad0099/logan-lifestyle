@extends('layouts.app')

@section('title', 'About Us')

@section('page_background', asset('images/arts.jpg'))

@section('content')
<div class="why-us-section goldman-font container text-center py-5">
    <h1 class="display-4 mb-5">Why Us?</h1>
    
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                At Logan Lifestyle, we're passionate about creating unforgettable experiences. From enchanting weddings to vibrant art shows, pulsating dance parties to serene spiritual meditations, we bring your visions to life with creativity and precision.
            </p>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Our team of experienced event planners and creative designers work tirelessly to ensure every detail of your event is perfect. We believe in the power of moments, and we're dedicated to making each one count.
            </p>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Choose us for our:
            </p>
            <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <li>Innovative and personalized approach to event planning</li>
                <li>Attention to detail and commitment to excellence</li>
                <li>Wide network of top-tier vendors and venues</li>
                <li>Passion for creating memorable experiences</li>
            </ul>
        </div>
    </div>

    <h2 class="display-5 mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Recent Reviews</h2>

    <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="review-content">
                    <blockquote class="blockquote">
                        <i class="mb-0">"Logan Lifestyle transformed our wedding into a fairy tale. Every detail was perfect!"</i>
                    </blockquote>
                    <img src="{{ asset('images/hack.jpg') }}" alt="Client 1" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                    <div>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="review-content">
                    <blockquote class="blockquote">
                        <i class="mb-0">"The art show they organized was a massive success. Couldn't have done it without them!"</i>
                    </blockquote>
                    <img src="{{ asset('images/hack.jpg') }}" alt="Client 2" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                    <div>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection