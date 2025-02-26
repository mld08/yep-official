<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Join the Youth Empowerment Program in Freetown. Training in entrepreneurship, leadership, and more to empower young Africans.">
    <meta name="keywords"
        content="youth empowerment, Freetown, entrepreneuriat, leadership, Sierra Leone, jeunes innovateurs, youth empowerment program">
    <title>Youth Empowerment Program | Contact</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('yep-assets/Logo/SVG Files/Favicon.svg') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('yep-assets/css/style.css') }}">
    <script src="https://kit.fontawesome.com/332e91a08f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--Navbar-->
    <div class="header bg-white">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('yep-assets/Logo/SVG Files/Logo Horizontal.svg') }}" alt=""
                        width="190">
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
                        <li class="nav-item mx-4"><a href="#" class="btn btn-pink px-4">REGISTER!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- End Navbar-->

    <!-- End Navbar-->


    <!-- Bouton pour remonter -->
    <a href="#" class="btn btn-primary back-to-top" id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </a>

    <div class="d-flex justify-content-center align-items-center bg-bluee p-4 mb-4 py-5">
        <h1 class="mb-0 text-white py-2 font-hepidova">CONTACT</h1>
    </div>

    <div class="container py-5">
        @if (session('success'))
            <div class="px-2 alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row">
            <div class="col-lg-4">
                <h4>Contact info</h4>
                <hr width="50">
                <p>The Youth Empowerment Program is developed by the Africa Governance Institute (AGI) and financed by the BADEA.</p>
                <p><i class="fa-regular fa-envelope"></i> info@africayep.com</p>
                <p>
                <ul class="list-unstyled d-flex justify-content-center justify-content-md-start fs-5">
                    <li class="ms-0"><a class="link-body-emphasis color-blue" href="#"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis color-blue" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis color-blue" href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis color-blue" href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </li>
                </ul>
                </p>
            </div>
            <div class="col-lg-8">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Sujet</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Partners And Sponsors -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h1 class="mb-4 mt-2 font-hepidova color-blue">PARTNERS AND SPONSORS </h1>
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-md-2 row-cols-lg-5 g-4">
                    <!-- Exemple de logos -->
                    <div class="col">
                        <div class="card border-0 text-center">
                            <img src="{{ asset('yep-assets/img/Partners Logo/PNG Files/BADEA.png') }}"
                                class="card-img-top img-fluid logo-img" alt="BADEA">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 text-center">
                            <img src="{{ asset('yep-assets/img/Partners Logo/PNG Files/Government of Sierra Leone.png') }}"
                                class="card-img-top img-fluid logo-img" alt="BADEA">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 text-center">
                            <img src="{{ asset('yep-assets/img/Partners Logo/PNG Files/Office of the First Lady.png') }}"
                                class="card-img-top img-fluid logo-img" alt="Office of First Lady - Sierra Leone">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 text-center">
                            <img src="{{ asset('yep-assets/img/Partners Logo/PNG Files/UNDP.png') }}"
                                class="card-img-top img-fluid logo-img" alt="UNDP">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 text-center">
                            <img src="{{ asset('yep-assets/img/Partners Logo/PNG Files/AGI.png') }}"
                                class="card-img-top img-fluid logo-img" alt="AGI">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partners And Sponsors -->

    </div>

    <!-- Footer -->
    <div class="bg-blue text-white">
        <footer class="pt-5 container">
            <div class="row gy-4">
                <!-- Logo et Réseaux Sociaux -->
                <div class="col-md-4 text-center text-md-start">
                    <img src="{{ asset('yep-assets/Logo/SVG Files/Logo.svg') }}" alt="Youth Empowerment Program"
                        width="200" class="img-fluid mb-3">
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
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Programme</a>
                        </li>
                        <li class="nav-item mb-2"><a href="/sponsors" class="nav-link p-0 text-white">Sponsors</a>
                        </li>
                        <li class="nav-item mb-2"><a href="/articles" class="nav-link p-0 text-white">Articles</a>
                        </li>
                    </ul>
                </div>

                <!-- Autres Liens -->
                <div class="col-md-2 text-center text-md-start">
                    <h5 class="fw-bold mb-3">More Info</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Press
                                Releases</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privacy
                                Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact Us</a>
                        </li>
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
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/countdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="js/backtotop.js"></script>

</body>

</html>
