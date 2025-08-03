@extends('default')

@section('content')
    <!-- Contact Hero Section Start -->
    <section class="contact-hero">
        <div class="floating-elements">
            <div class="floating-circle"></div>
            <div class="floating-circle"></div>
            <div class="floating-circle"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="contact-hero-title">Get In Touch</h1>
                    <p class="contact-hero-subtitle">
                        Let's discuss your project and bring your ideas to life
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Hero Section End -->

    <!-- Main Contact Section Start -->
    <section class="contact-main-section">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-8 mb-5">
                    <div class="contact-form-card">
                        <h2 class="section-title-large mb-4">Send Me a Message</h2>
                        <p class="section-subtitle mb-4">
                            Have a project in mind? Fill out the form below and I'll get back to you as soon as possible.
                        </p>

                        <form action="#" method="POST" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" name="name" class="form-control-custom"
                                            placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" name="email" class="form-control-custom"
                                            placeholder="Enter your email address" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control-custom"
                                            placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subject *</label>
                                        <select name="subject" class="form-control-custom" required>
                                            <option value="">Select a subject</option>
                                            <option value="web-development">Web Development</option>
                                            <option value="consultation">Technical Consultation</option>
                                            <option value="collaboration">Collaboration</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Project Budget</label>
                                <select name="budget" class="form-control-custom">
                                    <option value="">Select budget range</option>
                                    <option value="500-1000">$500 - $1,000</option>
                                    <option value="1000-2500">$1,000 - $2,500</option>
                                    <option value="2500-5000">$2,500 - $5,000</option>
                                    <option value="5000+">$5,000+</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Message *</label>
                                <textarea name="message" rows="6" class="form-control-custom"
                                    placeholder="Tell me about your project, requirements, timeline, and any specific details..."
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-send">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h3 class="mb-4">Contact Information</h3>
                        <p class="mb-4 opacity-75">
                            Feel free to reach out through any of these channels. I'm always excited to discuss new
                            opportunities and projects.
                        </p>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Address</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Phone</h5>
                                <p>+880 123 456 789</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email</h5>
                                <p>sayeed@example.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Availability</h5>
                                <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="social-links">
                            <a href="#" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link" title="GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="social-link" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        // Simple form validation and enhancement
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('.form-control-custom');

            // Add focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function () {
                    if (this.value === '') {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });

            // Form submission
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Simple validation
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (field.value.trim() === '') {
                        isValid = false;
                        field.style.borderColor = '#dc3545';
                    } else {
                        field.style.borderColor = '#28a745';
                    }
                });

                if (isValid) {
                    // Simulate form submission
                    const submitBtn = form.querySelector('.btn-send');
                    const originalText = submitBtn.innerHTML;

                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                    submitBtn.disabled = true;

                    setTimeout(() => {
                        alert('Message sent successfully! I\'ll get back to you soon.');
                        form.reset();
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;

                        // Reset field styles
                        inputs.forEach(input => {
                            input.style.borderColor = '#e9ecef';
                        });
                    }, 2000);
                } else {
                    alert('Please fill in all required fields.');
                }
            });
        });
    </script>

@endsection