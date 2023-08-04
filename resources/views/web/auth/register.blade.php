<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Create Account</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('web_assets') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('web_assets') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('web_assets') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('web_assets') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('web_assets') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('web_assets') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('web_assets') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('web_assets') }}/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <main id="main">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <form action="{{  route('register') }}" method="post" role="form"
                            class="php-email-form p-3 p-md-4" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" required id="Name"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" required id="email"
                                    placeholder="Email" required>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 form-group">
                                    <label for="name">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="bg-success">Register</button>
                                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('web_assets') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('web_assets') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('web_assets') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('web_assets') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('web_assets') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('web_assets') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('web_assets') }}/assets/js/main.js"></script>

</body>

</html>
