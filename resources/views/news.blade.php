<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Join the Youth Empowerment Program in Freetown. Training in entrepreneurship, leadership, and more to empower young Africans.">
    <meta name="keywords"
        content="youth empowerment, Freetown, entrepreneuriat, leadership, Sierra Leone, jeunes innovateurs, youth empowerment program">
    <title>Youth Empowerment Program | Articles</title>
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

    <div class="d-flex justify-content-center align-items-center bg-bluee p-4 mb-4 py-5">
        <h1 class="mb-0 text-white py-5 font-hepidova">ARTICLES</h1>
    </div>

    <div class="container py-5">

        <h2 class="mb-4">Latest News</h2>
        <div class="row">
            @foreach ($news as $new)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $new->image) }}" class="card-img-top" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$new->title}}</h5>
                            <p class="card-text">{{$new->updated_at->format('F d, Y')}}</p>
                            <a href="{{ route('show', ['slug' => Str::slug($new->title), 'news' => $new->id]) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Footer -->
    <div class="bg-blue text-white">
        <footer class="pt-5 container">
            <div class="row gy-4">
                <!-- Logo et Réseaux Sociaux -->
                <div class="col-md-4 text-center text-md-start">
                    <img src="{{asset('yep-assets/Logo/SVG Files/Logo.svg')}}" alt="Youth Empowerment Program" width="200" class="img-fluid mb-3">
                    <div class="d-flex justify-content-center justify-content-md-start gap-3 fs-5">
                        <a class="link-light" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="link-light" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a class="link-light" href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a class="link-light" href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                </div>

                <!-- Liens Utiles -->
                <div class="col-md-2 text-center text-md-start">
                    <h5 class="fw-bold mb-3">Useful Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Programme</a></li>
                        <li class="nav-item mb-2"><a href="/sponsors" class="nav-link p-0 text-white">Sponsors</a></li>
                        <li class="nav-item mb-2"><a href="/articles" class="nav-link p-0 text-white">Articles</a></li>
                    </ul>
                </div>

                <!-- Autres Liens -->
                <div class="col-md-2 text-center text-md-start">
                    <h5 class="fw-bold mb-3">More Info</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Press Releases</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="/contact" class="nav-link p-0 text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3 text-center text-md-start">Newsletter</h5>
                    <p class="text-center text-md-start">Subscribe for the latest info in your inbox.</p>
                    <form class="d-flex gap-2 flex-column flex-sm-row">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-pink" type="button">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center py-4 border-top mt-4">
                <p class="mb-0">&copy; 2025 Africa Governance Institute. All rights reserved.</p>
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
