

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>kmu logistic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="landingpage/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="landingpage/lib/animate/animate.min.css" rel="stylesheet">
    <link href="landingpage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="landingpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="landingpage/css/style.css" rel="stylesheet">
</head>



<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-4">
        <div class="owl-carousel header-carousel position-relative mb-4">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="landingpage/img/bg.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div style="align-items: center;">
                               <center> <h1 class="display-3 text-white animated slideInDown mb-4">WELCOME TO KMU <span class="text-primary">LOGISTICS</span></h1></center>
                                <center>  <h5 class="text-white text-uppercase mb-3 animated slideInDown">#1 LIABLE SYSTEM</h5></center>
                                <center>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <form action="{{ route('login') }}" method="GET">
                    <button type="submit" class="text-sm text-gray-700 dark:text-gray-500 underline focus:outline-none"><b>Log in</b></button>
                </form>
                <br><br>
                @if (Route::has('register'))
                    <form action="{{ route('register') }}" method="GET">
                        <button type="submit" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline focus:outline-none"><b>Register</b></button>
                    </form>
                @endif
            @endauth
        </div>
    @endif
</center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- Carousel End -->






    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="landingpage/lib/wow/wow.min.js"></script>
    <script src="landingpage/lib/easing/easing.min.js"></script>
    <script src="landingpage/lib/waypoints/waypoints.min.js"></script>
    <script src="landingpage/lib/counterup/counterup.min.js"></script>
    <script src="landingpage/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="landingpage/js/main.js"></script>
</body>

</html>
