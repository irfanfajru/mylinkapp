<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyLink</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- any -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-3 sticky-top shadow-sm" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand d-block" id="logo" href="">MyLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 gap-1 mb-lg-0">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-warning text-dark rounded-3 shadow-sm">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-outline-warning text-dark rounded-3 shadow-sm">Log in</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-warning text-dark rounded-3 shadow-sm">Register</a>
                        @endif
                        @endif
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center" id="content">
        <h1 class="mb-3">Manage Your Link Easily</h1>
        <div class="container mb-3">
            <a href="/register" class="btn btn-warning btn-lg rounded-3 shadow-sm mb-3">GET STARTED FOR FREE</a>
        </div>
        <img src="{{asset('images/gambar1.svg')}}" class="img-fluid mb-5" alt="">
        <div class="row mt-5 mb-5">
            <div class="col-6" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1200">
                <img src="{{asset('images/custom.svg')}}" class="img-fluid rounded p-3 bg-white shadow" style="transform: rotate(-4deg);" alt="customable">
            </div>
            <div class="col-6" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1200">
                <p class="h4 align-middle">Customize Your Page</p>
                <p class="align-middle">You can change your background color,and your avatar picture</p>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-6" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1200">
                <p class="h4">Responsive Design</p>
                <p>Don't worry about design</p>
            </div>
            <div class="col-6" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1200">
                <img src="{{asset('images/resp.svg')}}" class="img-fluid rounded p-3 bg-white shadow" style="transform: rotate(3deg);" alt="customable">
            </div>
        </div>
        <div class="row mt-5 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1200">
            <div class="col-2"></div>
            <div class="col-8">
                <img src="{{asset('images/simple.svg')}}" class="rounded p-3 bg-white shadow img-fluid" style="transform: rotate(-1deg);" alt="customable">
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="container mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1300">
            <p class="h1">Totally Free<br>Create your page now!</p>
        </div>
    </div>
    <div class="container-fluid bg-white p-2 shadow-sm">
        <div class="container text-center text-warning">MyLink-Manage Your Link</div>
        <div class="row text-muted container">
            <div class="col-4 text-center">
                <p>Created By <a href="https://irfanfajru.github.io" target="_blank">Irfan Fajru</a></p>
            </div>
            <div class="col-8 text-end">
                <p><a href="/about" class="text-muted" style="text-decoration: none;">About</a></p>
                <p><a href="/faq" class="text-muted" style="text-decoration: none;">FAQ</a></p>
                <p><a href="/contact" class="text-muted" style="text-decoration: none;">Contact Us</a></p>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.backgroundColor = "white";
            } else {
                document.getElementById("navbar").style.backgroundColor = "transparent";
            }
        }
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>