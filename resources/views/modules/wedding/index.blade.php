@extends('layouts.app')

@section('title', 'Wedding')

@section('content')

<div class="single-page-container">
    <h1 class="single-page-title" >Celebrate your love story at Logan Lifestyle</h1><br>
    
    <img src="images/wedding.jpg" alt="Logan Lifestyle Wedding Venue" class="single-page-image" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">

    <h2 class="single-page-subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">The Perfect Blend of Elegance and Charm</h2><br>

    <p class="single-page-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        Our stunning event center offers the perfect blend of elegance and charm, making it the ideal venue for your unforgettable wedding day. With our Silver, Gold, and Platinum packages, we cater to every couple's unique needs and desires.
    </p>

    <div class="image-row">
        <img src="images/wedding.jpg" alt="Image 1" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <img src="images/wedding.jpg" alt="Image 2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <img src="images/wedding.jpg" alt="Image 3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    </div>

    <p class="client-comment" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        "Our wedding at Logan Lifestyle was everything we dreamed of and more. The venue was stunning, the staff was incredible, and every detail was perfect. We couldn't have asked for a better experience." <br> - Mr & Mrs Dekyi -
    </p>

    <div class="social-icons" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>

    <h3 class="reply-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Leave a Reply</h3>

    <p class="reply-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        Your email address will not be published. Required fields are marked *
    </p>

    <form class="reply-form" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment *</label>
            <textarea id="comment" required></textarea>
        </div>
        <button type="submit" class="submit-button">
            Send Message <i class="fas fa-arrow-right"></i>
        </button>
    </form>
</div>

@endsection