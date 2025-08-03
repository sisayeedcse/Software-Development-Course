@extends('default')

@section('content')
    <!-- Blog Hero Section Start -->
    <section class="about-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="about-hero-title">My Blog</h1>
                    <p class="about-hero-subtitle">
                        Thoughts, tutorials, and insights about web development
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero Section End -->

    <!-- Blog Content Section Start -->
    <section class="about-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title-large">Coming Soon</h2>
                    <p class="about-text-large">
                        I'm currently working on creating valuable content for developers and tech enthusiasts.
                        Stay tuned for tutorials, coding tips, and insights about the latest web technologies.
                    </p>
                    <div class="mt-4">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-envelope me-2"></i>Get Notified
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Content Section End -->

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@endsection