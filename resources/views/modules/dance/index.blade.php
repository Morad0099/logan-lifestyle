@extends('layouts.app')

@section('title', 'Dance Parties')

@section('page_background', asset('images/dance.jpg'))


@section('content')

<div class="single-page-container">
    <h1 class="single-page-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Dance Parties at Logan Lifestyle</h1><br>
    
    <img src="images/dance.jpg" alt="Logan Lifestyle Dance Venue" class="single-page-image" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">

    <h2 class="single-page-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Get Ready to Dance the Night Away!</h2>

    <p class="single-page-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        Our event center is the perfect place for unforgettable dance parties, offering a vibrant atmosphere and top-notch amenities to make your event a hit. With our spacious dance floor and modern sound system, we cater to every party-goer's desires.
    </p><br>

    <h3 class="venue-highlights" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Venue Highlights</h3><br>
    <ul class="highlights-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <li>Spacious Dance Floor: A large, well-lit dance floor perfect for any dance party.</li>
        <li>Modern Sound System: State-of-the-art audio equipment to keep the music pumping all night.</li>
        <li>Dynamic Lighting: Professional lighting systems to create the perfect party ambiance.</li>
        <li>Outdoor Area: A beautiful outdoor space for mingling and taking a break from the dance floor.</li>
        <li>On-Site Catering: Delicious catering options to keep your guests fueled and happy.</li>
        <li>Event Coordination: Professional event coordinators to ensure everything runs smoothly.</li>
        <li>Ample Parking: Convenient parking for all your guests.</li>
    </ul><br>

    <h3 class="event-packages" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Event Packages</h3><br>
    <ul class="package-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <li><strong>Basic Package:</strong> 4-hour access, standard setup, event coordinator, refreshment station</li>
        <li><strong>Deluxe Package:</strong> 6-hour access, enhanced setup, DJ services, catering services</li>
        <li><strong>Ultimate Party Package:</strong> Full-day access, customizable setup, professional DJ, catering and bar services</li>
    </ul><br>

    <div class="image-row">
        <img src="images/dance.jpg" alt="Spacious Dance Floor" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <img src="images/dance.jpg" alt="Modern Sound System" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <img src="images/dance.jpg" alt="Dynamic Lighting" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    </div>

    <p class="client-comment" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        "Our dance party at Logan Lifestyle was incredible! The sound system was amazing, the lighting created the perfect vibe, and the staff made sure everything went smoothly. Our guests had an unforgettable night." <br> - Jamie, Event Organizer -
    </p>

    <div class="social-icons" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div><br>

    <h3 class="reply-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">INTAKE FORM</h3>

    <p class="reply-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        Your email address will not be published. Required fields are marked *
    </p>

    <form class="reply-form" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fname">First Name *</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lname">Last Name *</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Personal Address *</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date *</label>
                    <input type="date" class="form-control" id="date" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="duration">Event Duration *</label>
                    <input type="text" class="form-control" id="duration" placeholder="Enter the duration of the event" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="people">Number of People *</label>
                    <input type="text" class="form-control" id="people" placeholder="Enter the number of people" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Description *</label>
            <textarea id="comment" class="form-control" rows="4" placeholder="Enter a brief description" required></textarea>
        </div>
        <button type="submit" class="submit-button">
            Send Message <i class="fas fa-arrow-right"></i>
        </button>
    </form>

</div>

@endsection