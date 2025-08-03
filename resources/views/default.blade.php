$
<!doctype html>
<html lang="en">

<head>
    <title>Default Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Stylecss link -->
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts for Elegant Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header Section Start -->
    <section id="headnav">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="{{ url('/') }}">S.I.SAYEED</a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#servicesSec') }}">Service</a>
                        </li>
                    </ul>

                    <!-- Hire Me Button -->
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-hire">Hire Me</a>
                </div>
            </div>
        </nav>
    </section>
    <!-- Header Section End -->
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Footer Section Start -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Column 1: Logo and Description -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a class="logo" href="{{ url('/') }}">S.I.SAYEED</a>
                    <p class="mt-3">
                        I'm a passionate web developer creating beautiful and functional digital experiences.
                        Let's work together to bring your ideas to life with modern web technologies.
                    </p>
                </div>

                <!-- Column 2: Important Links -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Important Links</h5>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Me</a></li>
                        <li><a href="{{ url('/#servicesSec') }}">Services</a></li>
                        <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Additional Links -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms of Service</a></li>
                        <li><a href="#support">Support</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2025 S.I.SAYEED. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>