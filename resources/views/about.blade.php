@extends('default')

@section('content')
    <!-- Hero Section Start -->
    <section class="about-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="about-hero-title">About Me</h1>
                    <p class="about-hero-subtitle">
                        Passionate CSE Engineering Student & Full Stack Web Developer
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- About Content Section Start -->
    <section class="about-content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title-large">My Journey</h2>
                    <p class="section-subtitle">From Student to Developer</p>
                    <p class="about-text-large">
                        I'm S.I. Sayeed, a passionate Computer Science Engineering student with a deep love for web
                        development.
                        My journey began with curiosity about how websites work, and it has evolved into a professional
                        pursuit
                        of creating innovative digital solutions.
                    </p>
                    <p class="about-text-large">
                        Currently pursuing my CSE degree, I combine academic knowledge with practical experience to build
                        modern, responsive, and user-friendly web applications. I believe in continuous learning and staying
                        updated with the latest technologies in the ever-evolving world of web development.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="personal-info-card">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Name</div>
                                <div class="info-value">S.I. Sayeed</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Age</div>
                                <div class="info-value">22 Years</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Education</div>
                                <div class="info-value">CSE Student</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Location</div>
                                <div class="info-value">Bangladesh</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Email</div>
                                <div class="info-value">sayeed@example.com</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Phone</div>
                                <div class="info-value">+880 123 456 789</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Content Section End -->

    <!-- Quote Section Start -->
    <section class="quote-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="quote-text">
                        "Code is like humor. When you have to explain it, it's bad."
                    </p>
                    <p class="quote-author">- Cory House</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote Section End -->

    <!-- Call to Action Section Start -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="section-title-large">Let's Work Together</h2>
                    <p class="about-text-large">
                        I'm always excited to work on new projects and collaborate with amazing people.
                        If you have an idea or need help with your web development project, let's discuss!
                    </p>
                    <div class="mt-4">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-envelope me-2"></i>Get In Touch
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-download me-2"></i>Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Section End -->

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@endsection