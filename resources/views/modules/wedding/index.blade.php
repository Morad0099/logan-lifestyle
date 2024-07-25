@extends('layouts.app')

@section('title', 'Wedding')

@section('page_background', asset('images/weddings/stylish-elegant-white-wedding-aisle-chairs-stairs.jpg'))


@section('content')

    <div class="single-page-container">
        <h1 class="single-page-title">Weddings at Logan Lifestyle</h1><br>

        <img src="images/weddings/low-angle-people-celebrating-wedding-nature.jpg" alt="Logan Lifestyle Wedding Venue"
            class="single-page-image" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">

        <h2 class="single-page-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">The Perfect Blend of
            Elegance and Charm</h2><br>

        <p class="single-page-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Our stunning event center offers the perfect blend of elegance and charm, making it the ideal venue for your
            unforgettable wedding day. With our Silver, Gold, and Platinum packages, we cater to every couple's unique needs
            and desires.
        </p>

        <div class="image-row">
            <img src="images/weddings/stylish-elegant-white-wedding-aisle-chairs-stairs.jpg" alt="Image 1"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img src="images/weddings/lesbian-couple-celebrating-their-wedding-day-with-guests-friends.jpg" alt="Image 2"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img src="images/weddings/bunch-flowers-leaves-table.jpg" alt="Image 3" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="200">
        </div>

        <p class="client-comment" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            "Our wedding at Logan Lifestyle was everything we dreamed of and more. The venue was stunning, the staff was
            incredible, and every detail was perfect. We couldn't have asked for a better experience." <br> - Mr & Mrs James
            -
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
            action="{{ route('wedding.store') }}">
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
