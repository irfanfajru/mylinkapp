<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyLink-FAQ</title>
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
            <a class="navbar-brand d-block" id="logo" href="/">MyLink</a>
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
    <div class="container text-center mt-1 mb-5" id="content">
        <!-- chat contents -->
        <div class="container rounded shadow bg-white p-1" data-aos="fade-up" data-aos-duration="1000">
            <div class="container text-start bg-dark rounded-3 shadow-sm">
                <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
                <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
                <svg class="text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
            <!-- free -->
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/ava.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
                <div class="col-10 col-md-11 text-start pt-3">
                    <p>Is It Free ? <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg></p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1200">
                <div class="col-10 col-md-11 text-end pt-3">
                    <p><svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> Of course its free,just register and login<br>Now you can manage your page and add link to your page</p>
                </div>
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/avaf.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
            </div>
            <!-- custom -->
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/ava.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
                <div class="col-10 col-md-11 text-start pt-3">
                    <p>Can i change my picture in page ? <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg></p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1200">
                <div class="col-10 col-md-11 text-end pt-3">
                    <p><svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> Yup you can,change whatever you want</p>
                </div>
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/avaf.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
            </div>
            <!-- link -->
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/ava.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
                <div class="col-10 col-md-11 text-start pt-3">
                    <p>How many link can add to my page ? <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg></p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1200">
                <div class="col-10 col-md-11 text-end pt-3">
                    <p><svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> Unlimited link you can add to your page</p>
                </div>
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/avaf.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
            </div>
            <!-- link -->
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/ava.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
                <div class="col-10 col-md-11 text-start pt-3">
                    <p>How about security to my account ? <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg></p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1200">
                <div class="col-10 col-md-11 text-end pt-3">
                    <p><svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg> we do not take your account information at all, even your account password will be hashed</p>
                </div>
                <div class="col-2 col-md-1">
                    <img src="{{asset('images/avaf.svg')}}" class="img-fluid rounded-pill mt-2" alt="">
                </div>
            </div>
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