@extends('layouts.app')

@section('title', 'Spiritual & Meditation')

@section('content')

    <div class="single-page-container">
        <h1 class="single-page-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Spiritual & Meditation
            Events at Logan Lifestyle</h1><br>

        <img src="images/meditation.jpg" alt="Logan Lifestyle Spiritual Venue" class="single-page-image" data-aos="fade-up"
            data-aos-duration="800" data-aos-delay="200">

        <h2 class="single-page-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Find Peace and
            Tranquility</h2><br>

        <p class="single-page-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Our serene event center is the perfect setting for spiritual retreats, meditation sessions, and wellness
            workshops, providing a calm and inspiring environment for your guests. With our peaceful spaces and modern
            amenities, we cater to all your spiritual and meditation needs.
        </p><br>

        <h3 class="venue-highlights" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Venue Highlights</h3>
        <br>
        <ul class="highlights-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <li>Peaceful Indoor Spaces: Quiet, spacious rooms designed for meditation and spiritual practices.</li>
            <li>Scenic Outdoor Area: Beautiful gardens and natural surroundings ideal for outdoor meditation and mindfulness
                activities.</li>
            <li>Modern Amenities: Comfortable seating, climate control, and high-quality audio systems for guided sessions.
            </li>
            <li>On-Site Catering: Healthy catering options to nourish your body and mind.</li>
            <li>Event Coordination: Professional support to help plan and execute a seamless event.</li>
            <li>Ample Parking: Convenient parking for all your guests.</li><br>
        </ul>

        <h3 class="event-packages" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Event Packages</h3><br>
        <ul class="package-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <li><strong>Basic Package:</strong> 4-hour access, standard setup, event coordinator, refreshment station</li>
            <li><strong>Deluxe Package:</strong> 6-hour access, enhanced setup, catering services, indoor and outdoor spaces
            </li>
            <li><strong>Ultimate Retreat Package:</strong> Full-day access, customizable setup, comprehensive services,
                additional wellness amenities</li>
        </ul><br>

        <div class="image-row">
            <img src="images/meditation.jpg" alt="Peaceful Indoor Space" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
            <img src="images/meditation.jpg" alt="Scenic Outdoor Area" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
            <img src="images/meditation.jpg" alt="Modern Amenities" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
        </div><br>

        <p class="client-comment" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            "Our meditation retreat at Logan Lifestyle was a truly transformative experience. The peaceful setting and
            attentive staff created the perfect environment for relaxation and inner peace. We couldn't have asked for a
            better venue." <br> - Sarah, Retreat Organizer -
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
            action="{{ route('meditation.store') }}">
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
