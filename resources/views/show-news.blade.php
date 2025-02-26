<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Join the Youth Empowerment Program in Freetown. Training in entrepreneurship, leadership, and more to empower young Africans.">
    <meta name="keywords"
        content="youth empowerment, Freetown, entrepreneuriat, leadership, Sierra Leone, jeunes innovateurs, youth empowerment program">
    <title>Youth Empowerment Program | Freetown 2025</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('yep-assets/Logo/SVG Files/Favicon.svg')}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('yep-assets/css/style.css')}}">
    <script src="https://kit.fontawesome.com/332e91a08f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--Navbar-->
    <div class="header bg-white">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('yep-assets/Logo/SVG Files/Logo Horizontal.svg')}}" alt="" width="190">
                </a>
                <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-list"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto nav nav-pills">
                        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="/speakers" class="nav-link">Speakers</a></li>
                        <li class="nav-item"><a href="/sponsors" class="nav-link">Sponsors</a></li>
                        <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="/articles" class="nav-link">Articles</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                        <li class="nav-item mx-4"><a href="#" class="btn btn-pink px-4">REGISTER!</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- End Navbar-->

    <!-- Bouton pour remonter -->
    <a href="#" class="btn btn-primary back-to-top" id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </a>

    <div class="container py-5 mt-3">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Image News" class="img-fluid rounded mx-auto d-block mb-4">
            </div>
            <div class="col-12 bg-light p-3">
                <h1 class="text-center">{{$news->title}}</h1>
            </div>
            <div class="col-12 bg-light p-4">
                <p class="lead">
                    {!! nl2br($news->content) !!}
                </p>
            </div>

        </div>
    </div>


    <!-- Footer -->
    <div class="bg-blue">
        <footer class="pt-5 container">
            <div class="row">
                <!-- Logo et Réseaux Sociaux -->
                <div class="col-12 col-md-4 mb-4 text-center text-md-start">
                    <img src="{{asset('yep-assets/Logo/JPEG Files/YEP - Logo Alt.jpg')}}" alt="Youth Empowerment Program" class="img-fluid mb-3" style="max-width: 200px;">
                    <ul class="list-unstyled d-flex justify-content-center justify-content-md-start fs-5">
                        <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis text-white" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>

                <!-- Liens Utiles -->
                <div class="col-6 col-md-2 mb-4">
                    <h5 class="text-white"><strong>Useful Links</strong></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Programme</a></li>
                        <li class="nav-item mb-2"><a href="/sponsors" class="nav-link p-0 text-white">Sponsors</a></li>
                        <li class="nav-item mb-2"><a href="/articles" class="nav-link p-0 text-white">Articles</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <h5 class="text-white"><strong>Other Links</strong></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Press Releases</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-12 col-md-4 mb-4">
                    <form>
                        <h5 class="text-white"><strong>Newsletter</strong></h5>
                        <p class="text-white">Subscribe for the latest info in your inbox.</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email address" aria-label="Email address">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bas de page -->
            <div class="text-center py-4 text-white border-top">
                <p class="mb-0">Copyright &copy; 2024 Africa Governance Institute. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="{{asset('yep-assets/js/countdown.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="{{asset('yep-assets/js/backtotop.js')}}"></script>

</body>

</html>
