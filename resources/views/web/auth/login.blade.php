<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
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
                    <div class="col-md-4 mx-auto">

                        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data" class="php-email-form p-3 p-md-4">
                            @csrf
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="email"> Password</label>
                                <input type="password" class="form-control" name="password" id="Password"
                                    placeholder="Enate Password" required>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Login" class="btn btn-sm btn-success">
                                <p>Don't have an account? <a href="{{ route('register') }}">Create</a></p>
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
