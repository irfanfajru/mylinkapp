<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyLink-About</title>
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
    <style>
        html,
        body {
            margin: 0;
            font-family: sans-serif;
        }

        main {
            overflow-x: hidden;
            display: flex;
        }

        h1 {
            margin: 0;
            padding: 0;
        }

        section {
            min-width: 100%;
            min-height: 100vh;
            display: block;
            justify-content: center;
            align-items: center;
            font-size: 4ch;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-3 sticky-top shadow-sm" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand d-block" id="logo" href="/">MyLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 gap-1 mb-lg-0">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
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
    <!-- content -->
    <div class="container-fluid text-center" id="content">
        <main>
            <section>
                <h1 id="logo" class="mt-3" data-aos="zoom-in" data-aos-duration="1400">MyLink</h1>
                <p class="h6" data-aos="zoom-in" data-aos-duration="1400">Is A Webapp to Manage Your Link</p>
                <img src="{{asset('images/gambar1.svg')}}" width="350vw" alt="" data-aos="zoom-in" data-aos-duration="1400">
            </section>
            <section>
                <h1 id="logo" class="mt-3" data-aos="zoom-in" data-aos-duration="1400">Ez To manage your link</h1>
                <p class="h6" data-aos="zoom-in" data-aos-duration="1400">Just start register or login <br>Now you can easily manage your page</p>
                <img src="{{asset('images/ez.svg')}}" width="350vw" alt="" data-aos="zoom-in" data-aos-duration="1400">
            </section>
            <section>
                <h1 id="logo" class="mt-3" data-aos="zoom-in" data-aos-duration="1400">Responsive Design Page</h1>
                <p class="h6" data-aos="zoom-in" data-aos-duration="1400">Don't Worry about design<br>Your Page can open in all device resolution</p>
                <img src="{{asset('images/resp.svg')}}" width="350vw" alt="" data-aos="zoom-in" data-aos-duration="1400">
            </section>
            <section>
                <h1 id="logo" class="mt-3" data-aos="zoom-in" data-aos-duration="1400">Make your bussines growth fast</h1>
                <p class="h6" data-aos="zoom-in" data-aos-duration="1400">All link can handle with 1 page<br>I'ts great for your bussines growth</p>
                <img src="{{asset('images/bgrowth.svg')}}" width="350vw" alt="" data-aos="zoom-in" data-aos-duration="1400">
            </section>
        </main>
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
        const scrollContainer = document.querySelector("main");

        scrollContainer.addEventListener("wheel", (evt) => {
            if ("ontouchstart" in window) {
                scrollContainer.addEventListener('touchmove', (evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                });
            }
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>