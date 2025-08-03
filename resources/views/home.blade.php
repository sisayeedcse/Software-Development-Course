@extends('default')

@section('content')
    <!-- Hero Banner Section Start -->
    <section id="heroBanner" class="hero-section">
        <div class="container">
            <div class="container-fluid">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 col-md-12 hero-content">
                        <div class="hero-text">
                            <h1 class="hero-title">Hi, I'm <span class="text-primary">S.I. Sayeed</span></h1>
                            <h2 class="hero-subtitle">Full Stack Web Developer</h2>
                            <p class="hero-description">
                                Passionate CSE Engineering Student & Web Developer creating innovative digital solutions.
                                I build modern, responsive websites and applications using cutting-edge technologies.
                            </p>
                            <div class="hero-buttons">
                                <a href="#" class="btn btn-primary btn-download me-3">
                                    <i class="fas fa-download me-2"></i>Download CV
                                </a>
                                <a href="{{ url('/contact') }}" class="btn btn-outline-primary btn-contact">
                                    <i class="fas fa-envelope me-2"></i>Contact Me
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 hero-image">
                        <div class="developer-illustration">
                            <!-- Creative Developer SVG Illustration -->
                            <svg viewBox="0 0 500 400" class="developer-svg">
                                <!-- Background Circle -->
                                <circle cx="250" cy="200" r="180" fill="#f8f9fa" stroke="#e9ecef" stroke-width="2" />

                                <!-- Laptop -->
                                <rect x="180" y="220" width="140" height="90" rx="8" fill="#343a40" />
                                <rect x="185" y="225" width="130" height="75" rx="4" fill="#000" />
                                <rect x="190" y="230" width="120" height="65" rx="2" fill="#007bff" />

                                <!-- Code Lines -->
                                <rect x="195" y="235" width="80" height="3" fill="#fff" />
                                <rect x="195" y="242" width="60" height="3" fill="#fff" />
                                <rect x="195" y="249" width="90" height="3" fill="#fff" />
                                <rect x="195" y="256" width="70" height="3" fill="#fff" />

                                <!-- Developer Character -->
                                <circle cx="120" cy="180" r="25" fill="#fdbcb4" />
                                <rect x="105" y="200" width="30" height="40" rx="15" fill="#007bff" />
                                <rect x="100" y="215" width="40" height="25" rx="12" fill="#343a40" />

                                <!-- Floating Icons -->
                                <circle cx="80" cy="120" r="15" fill="#28a745" opacity="0.8" />
                                <text x="80" y="127" text-anchor="middle" fill="#fff" font-size="12"
                                    font-weight="bold">{}</text>

                                <circle cx="370" cy="140" r="15" fill="#ffc107" opacity="0.8" />
                                <text x="370" y="147" text-anchor="middle" fill="#fff" font-size="12"
                                    font-weight="bold">&lt;/&gt;</text>

                                <circle cx="350" cy="280" r="15" fill="#dc3545" opacity="0.8" />
                                <text x="350" y="287" text-anchor="middle" fill="#fff" font-size="12"
                                    font-weight="bold">JS</text>

                                <circle cx="100" cy="300" r="15" fill="#6f42c1" opacity="0.8" />
                                <text x="100" y="307" text-anchor="middle" fill="#fff" font-size="12"
                                    font-weight="bold">CSS</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Banner Section End -->

    <!-- About Section Start -->
    <section id="aboutSec" class="about-section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">About Me</h2>
                    <div class="title-underline"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="about-content">
                        <h3 class="about-subtitle">CSE Engineering Student & Web Developer</h3>
                        <p class="about-text">
                            I'm a passionate Computer Science Engineering student with a deep love for web development.
                            My journey in programming started with curiosity and has grown into a professional pursuit
                            of creating innovative digital solutions.
                        </p>
                        <p class="about-text">
                            With expertise in modern web technologies including HTML5, CSS3, JavaScript, React, Laravel,
                            and database management, I enjoy building responsive and user-friendly applications that
                            solve real-world problems.
                        </p>

                        <div class="skills-list">
                            <div class="skill-item">
                                <span class="skill-name">Frontend Development</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <span class="skill-name">Backend Development</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <span class="skill-name">Database Design</span>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{ asset('assets/Sayeed.png') }}" alt="S.I. Sayeed"
                            class="img-fluid rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="servicesSec" class="services-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">My Services</h2>
                    <div class="title-underline"></div>
                    <p class="section-description">
                        I provide comprehensive web development services to help bring your digital vision to life.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Service 1: Frontend Development -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 class="service-title">Frontend Development</h4>
                        <p class="service-description">
                            Creating responsive and interactive user interfaces using modern frameworks like React, Vue.js,
                            and vanilla JavaScript with clean, semantic HTML5 and CSS3.
                        </p>
                    </div>
                </div>

                <!-- Service 2: Backend Development -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h4 class="service-title">Backend Development</h4>
                        <p class="service-description">
                            Building robust server-side applications using Laravel, Node.js, and PHP.
                            Creating RESTful APIs and handling complex business logic efficiently.
                        </p>
                    </div>
                </div>

                <!-- Service 3: Database Design -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4 class="service-title">Database Design</h4>
                        <p class="service-description">
                            Designing and optimizing database structures using MySQL, PostgreSQL, and MongoDB.
                            Ensuring data integrity and optimal performance.
                        </p>
                    </div>
                </div>

                <!-- Service 4: Full Stack Development -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4 class="service-title">Full Stack Development</h4>
                        <p class="service-description">
                            End-to-end web application development combining frontend and backend technologies
                            to create complete, scalable solutions.
                        </p>
                    </div>
                </div>

                <!-- Service 5: Web App Optimization -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4 class="service-title">Performance Optimization</h4>
                        <p class="service-description">
                            Optimizing web applications for speed, SEO, and user experience.
                            Implementing best practices for faster loading times and better rankings.
                        </p>
                    </div>
                </div>

                <!-- Service 6: Technical Consulting -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="service-title">Technical Consulting</h4>
                        <p class="service-description">
                            Providing technical guidance and consultation for web projects.
                            Helping teams choose the right technology stack and architecture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    {{-- stylesheet css link --}}
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection