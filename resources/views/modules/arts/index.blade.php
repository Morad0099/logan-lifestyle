@extends('layouts.app')

@section('title', 'Art Shows & Pop Ups')

@section('page_background', asset('images/acts/side-view-man-with-braids-portrait.jpg'))

@section('content')
    <div class="single-page-container">
        <h1 class="single-page-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Art Shows & Pop Ups at
            Logan Lifestyle</h1>

        <img data-src="{{ asset('images/acts/Untitled.jpeg') }}" alt="Logan Lifestyle Art Venue" class="single-page-image lazyload"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">

        <h2 class="single-page-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Immerse Your
            Audience in a World of Creativity</h2>

        <p class="single-page-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Our versatile event center is the perfect canvas for your art shows and pop-up events, offering a dynamic space
            that brings your vision to life. With our flexible spaces and modern amenities, we cater to every artist's
            unique needs and desires.
        </p><br>

        <h3 class="venue-highlights" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Venue Highlights</h3>
        <br>
        <ul class="highlights-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <li>Flexible Spaces: Adaptable areas for intimate pop-ups to large-scale art exhibitions.</li>
            <li>Modern Amenities: State-of-the-art lighting, sound systems, and climate control to enhance your artworks.
            </li>
            <li>Outdoor Area: A beautiful outdoor space for open-air displays and interactive installations.</li>
            <li>On-Site Catering: Gourmet catering options for your guests.</li>
            <li>Event Coordination: Professional support for seamless event planning and execution.</li>
            <li>Ample Parking: Convenient parking for artists, exhibitors, and attendees.</li>
        </ul><br>

        <div class="image-row">
            <img data-src="{{ asset('images/acts/side-view-man-with-braids-portrait.jpg') }}" alt="Flexible Spaces"
            class="lazyload" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img data-src="{{ asset('images/acts/close-up-woman-s-hand-painting-canvas-with-holding-messy-palette.jpg') }}"
            class="lazyload" alt="Modern Amenities" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img data-src="{{ asset('images/acts/Untitled1.jpeg') }}" alt="Outdoor Area" data-aos="fade-up"
            class="lazyload" data-aos-duration="800" data-aos-delay="200">
        </div>

        <p class="client-comment" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            "Hosting our art show at Logan Lifestyle was a fantastic experience. The space was perfect, the staff was
            incredibly helpful, and the event went off without a hitch. We received rave reviews from all our attendees."
            <br> - Alex, Event Organizer -
        </p>

        <div class="social-icons" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div><br>

        @if (session('success'))
            <div class="alert alert-success" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h3 class="reply-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">INTAKE FORM</h3>

        <p class="reply-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Your email address will not be published. Required fields are marked *
        </p>

        <form class="reply-form" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" method="POST"
            action="{{ route('events.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname">First Name *</label>
                        <input type="text" class="form-control" id="fname" name="fname"
                            placeholder="Enter your first name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lname">Last Name *</label>
                        <input type="text" class="form-control" id="lname" name="lname"
                            placeholder="Enter your last name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email address" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone *</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter your phone number" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Personal Address *</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Enter your address" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Preferred Date *</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="duration">Event Duration *</label>
                        <input type="text" class="form-control" id="duration" name="duration"
                            placeholder="Enter event duration" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="people">Number of People *</label>
                        <input type="number" class="form-control" id="people" name="people"
                            placeholder="Enter number of people" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Comment *</label>
                <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Enter your comments"
                    required></textarea>
            </div>
            <button type="submit" class="submit-button">
                Send Message <i class="fas fa-arrow-right"></i>
            </button>
        </form>
    </div>
@endsection
