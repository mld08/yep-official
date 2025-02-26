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

    <!-- Hero -->
    <div class="hero-section d-flex justify-content-center align-items-center">
        <div class="hero-content-1 d-flex">
            <p class="mx-3"><i class="fa-solid fa-location-dot color-yellow"></i> Freetown, Sierra Leone</p>
            <p class="mx-3"><i class="fa-regular fa-calendar color-yellow"></i> 21 - 23 January 2025</p>
        </div>
        <div class="container hero-content-3 mt-2">
            <h1 class="font-poppins-h1"><span class="color-yellow">Empowering</span> youth to lead <br> as resilient <span
                    class="color-yellow">innovators</span> for <br> stronger communities<span
                    class="color-pink">.</span></h1>
        </div>
        <div class="container hero-content-2 mt-4 pt-2">
            <div class="mx-3">
                <div class="row justify-content-center">
                    <!-- Bloc Jours -->
                    <div class="col-3 col-sm-3 col-md-2 mx-3 countdown-item">
                        <div class="value" id="days">00</div>
                        <div class="label">Days</div>
                    </div>

                    <!-- Bloc Heures -->
                    <div class="col-3 col-sm-3 col-md-2 mx-3 countdown-item">
                        <div class="value" id="hours">00</div>
                        <div class="label">Hours</div>
                    </div>

                    <!-- Bloc Minutes -->
                    <div class="col-3 col-sm-3 col-md-2 mx-3 countdown-item">
                        <div class="value" id="minutes">00</div>
                        <div class="label">Minutes</div>
                    </div>

                    <!-- Bloc Secondes -->
                    <div class="col-3 col-sm-3 col-md-2 mx-3 countdown-item">
                        <div class="value" id="seconds">00</div>
                        <div class="label">Seconds</div>
                    </div>
                </div>
            </div>

            <a href="{{asset('yep-assets/pdf/YEP Sierra Leone 2025 - Programme.pdf')}}" class="btn btn-register mt-3 hero-content-2">DOWNLOAD PROGRAM</a>
        </div>

    </div>
    <div class="bg-light">
        <div class="container">
            <div class="d-flex w-100 pt-4 row justify-content-center text-center">
                <p class="col-md-2 mx-2"><strong>500</strong> Participants</p>
                <p class="col-md-2 mx-2"><strong>9</strong> Workshops</p>
                <p class="col-md-2 mx-2"><strong>5</strong> Breakout Session</p>
                <p class="col-md-2 mx-2"><strong>11</strong> Speakers</p>
                <p class="col-md-2 mx-2"><strong>Certificate Delivery</strong></p>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Program -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="font-hepidova color-blue"><span class="color-pink">SIERRA LEONE</span> YOUTH EMPOWERMENT PROGRAMME <span
                    class="color-pink">2025</span></h1>
                <div class="mt-3">
                    <p>The Africa Governance Institute (AGI) envisions a prosperous and stable Africa led by
                        empowered and engaged youth. Recognizing the immense potential of Sierra Leone's young
                        population, AGI is committed to launching a comprehensive young entrepreneurship program
                        in the country.
                    </p>
                    <p>This initiative is designed to address critical challenges faced by the
                        youth in Sierra Leone, including high unemployment, limited access to education and vocational
                        training, and the need for sustainable economic development. </p>
                    <p>The Youth Empowerment Program
                        aims to empower young Sierra Leoneans through entrepreneurship training, mentorship, and
                        access to financial resources, fostering a generation of economically active citizens.</p>

                        <a href="{{asset('yep-assets/pdf/YEP Sierra Leone 2025 - Programme.pdf')}}" class="btn btn-register px-3 mt-2">DOWNLOAD PROGRAM</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-hover-one col-lg-12 col-md-12 col-sm-12 py-3 px-3 mx-auto my-3"
                    style="height: 30rem; background-image: url('{{asset('yep-assets/img/Intro YEP2025.jpg')}}');background-size: cover;background-position: center;">

                </div>
            </div>
        </div>
    </div>
    <!-- End Program -->

    <!-- Video -->
    <div class="container-fluid justify-content-center py-3 bg-light">
        <div class="container">
            <p class="text-uppercase text-center">Watch the gambia 2018 youth empowerment program</p>
            <div class="position-relative">
                <!-- Image overlay -->
                <img src="{{asset('yep-assets/img/GCCI   Skills Enhancement Training 2018 GAMBIA 5-8 screenshot.png')}}"
                    class="img-fluid w-100" alt="Video Overlay">

                <!-- Play button -->
                <button class="btn position-absolute top-50 start-50 translate-middle text-white text-decoration-none"
                    data-bs-toggle="modal" data-bs-target="#videoModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                        viewBox="0 0 100 100">
                        <path
                            d="M50.0002 8.33337C41.7593 8.33337 33.7035 10.7771 26.8514 15.3555C19.9994 19.9339 14.6589 26.4413 11.5052 34.0549C8.35155 41.6685 7.52641 50.0463 9.13413 58.1288C10.7418 66.2113 14.7102 73.6356 20.5374 79.4628C26.3646 85.29 33.7889 89.2584 41.8714 90.8661C49.954 92.4738 58.3317 91.6487 65.9453 88.495C73.5589 85.3414 80.0663 80.0008 84.6447 73.1488C89.2231 66.2967 91.6668 58.2409 91.6668 50C91.6668 44.5283 90.5891 39.1101 88.4951 34.0549C86.4012 28.9997 83.3321 24.4064 79.463 20.5373C75.5938 16.6681 71.0005 13.599 65.9453 11.5051C60.8901 9.41111 55.4719 8.33337 50.0002 8.33337ZM41.6668 68.75V31.25L66.6668 50L41.6668 68.75Z">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- Bootstrap Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="videoModalLabel">Video Player</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="ratio ratio-16x9">
                                <iframe id="youtubePlayer" src="https://www.youtube.com/embed/UwHwQdsOO8U"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video -->

    <!-- Outcomes -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span>WHAT WILL YOU GET!</span>
                    <h1 class="mb-4 mt-2 font-hepidova color-blue">EXPECTED OUTCOMES</h1>
                </div>
            </div>
            <div class="row">
                <div class="card col-lg-3 col-md-3 col-sm-12 p-2 py-4 mx-auto my-3 border-0 border-start border-end border-blue"
                    style="width: 18rem; border-radius:20px;">
                    <img src="{{asset('yep-assets/img/Entrepreneurial Empowermentr.jpg')}}" class="card-img-top" alt="..." width="100%"
                        height="180">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Entrepreneurial Empowerment</strong></h5>
                        <p class="card-text">Skills-building workshops
                            designed to empower
                            youth with entrepreneurial
                            and leadership skills.</p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-3 col-sm-12 p-2 py-4 mx-auto my-3 border-0 border-start border-end border-pink"
                    style="width: 18rem; border-radius:20px;">
                    <img src="{{asset('yep-assets/img/Collaborative Innovation.jpg')}}" class="card-img-top" alt="..." width="100%"
                        height="180">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Collaborative Innovation Hubs</strong></h5>
                        <p class="card-text">Small-group discussions
                            with peers, mentors, and
                            community leaders to ex-
                            plore innovative solutions.</p>
                    </div>
                </div>
                <div class="card bg-pink col-lg-3 col-md-3 col-sm-12 p-2 py-4 mx-auto my-3 border-0 border-start border-end border-pink"
                    style="width: 18rem; border-radius:20px;">
                    <img src="{{asset('yep-assets/img/Partnership for Capital Access.jpg')}}" class="card-img-top" alt="..." width="100%"
                        height="180">
                    <div class="card-body text-center text-white">
                        <h5 class="card-title"><strong>Partnerships for Capital Access</strong></h5>
                        <p class="card-text">Connect with financial
                            institutions and investors
                            for microloans, grants,
                            and funding opportunities.</p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-3 col-sm-12 p-2 py-4 mx-auto my-3 border-0 border-start border-end border-blue"
                    style="width: 18rem; border-radius:20px;">
                    <img src="{{asset('yep-assets/img/Mentorship and Networking.jpg')}}" class="card-img-top" alt="..." width="100%"
                        height="180">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Mentorship and Networking</strong></h5>
                        <p class="card-text">Opportunities to link with
                            experienced business and
                            community leaders, and
                            creating peer networks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Outcomes -->

    <!-- Thematics -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="font-hepidova color-blue">THEMATICS</h1>
                    <div class="mt-3">
                        <p>The Youth Empowerment Program is built around essential
                            themes that drive meaningful change and impact for young
                            people in Sierra Leone.
                        </p>
                        <p style="text-align: justify;"><span style="color: orange;"><strong>&bull; Entrepreneurship and Business
                                    Development:</strong></span> Equipping
                            participants with the skills to launch and sustain small and
                            medium enterprises, including financial literacy and access
                            to funding opportunities. </p>
                        <p style="text-align: justify;"><span class="color-blue"><strong>&bull; Leadership and Empowerment:</strong></span>
                            Developing resilient leaders
                            who inspire others and drive inclusive growth within their
                            communities.</p>
                        <p style="text-align: justify;"><span class="color-pink"><strong>&bull; Inclusion and Diversity:</strong></span> Promoting
                            equal opportunities for
                            all, with a strong emphasis on empowering women and
                            marginalized youth.</p>
                        <p style="text-align: justify;"><span style="color: green;"><strong>&bull; Durability and Sustainability:</strong></span>
                            Ensuring long-term impact by
                            fostering practices that contribute to the sustainability of
                            businesses and community initiatives.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-hover-one col-lg-12 col-md-12 col-sm-12 py-3 px-3 mx-auto my-3"
                        style="height: 30rem; background-image: url('{{asset('yep-assets/img/Thematics\ -\ YEP.jpg')}}');background-size: cover;background-position: center;">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Thematics -->

    <!-- Speakers -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span>EVENT PANELISTS</span>
                    <h1 class="mb-4 mt-2 font-hepidova color-blue">OUR SPEAKERS</h1>
                </div>
            </div>
            <div id="carouselSpeakers" class="carousel slide pb-5" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselSpeakers" data-bs-slide-to="0"
                        class="carousel-btn active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" class="carousel-btn" data-bs-target="#carouselSpeakers" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" class="carousel-btn" data-bs-target="#carouselSpeakers" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                        <button type="button" class="carousel-btn" data-bs-target="#carouselSpeakers" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>

                <!-- Carrousel Items -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Mohamed Bangura.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Hon. Mouhamed Bangura</strong></h5>
                                        <p class="card-subtitle" style="font-size: 12px">Minister of Youth Affairs of Sierra Leone</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/H.E Fatima Maada Bio.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>H.E. Fatima Maada Bio</strong></h5>
                                        <p class="card-subtitle">First Lady of Sierra Leone</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Margaret Mansaray.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Margaret Y. Mansaray</strong></h5>
                                        <p class="card-subtitle" style="font-size: 12px">Founder & CEO of Women in Energy Sierra Leone</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Pa Ousman Njie.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="260"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Pa Ousman Njie</strong></h5>
                                        <p class="card-subtitle" style="font-size: 12px">Managing Director of Vista Bank Sierra Leone</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Emmanuel Lavalie.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="260"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Emmanuel Lavalie</strong></h5>
                                        <p class="card-subtitle">Founder & CEO of AMEG</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Fredrick Ampiah.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="260"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Fredrick Ampiah</strong></h5>
                                        <p class="card-subtitle" style="font-size: 10px">Resident Representative of UNDP Sierra Leone</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Francis Stevens Georges.jpeg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Francis Stevens Georges</strong></h5>
                                        <p class="card-subtitle" style="font-size: 10px">CEO of Innovation SL, Managing Director of GEN</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Michael Williams.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Michael Williams</strong></h5>
                                        <p class="card-subtitle" style="font-size: 12px">Founder & CEO of Eco Homes Recycling Limited</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Sadie-Sia Sellu.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Sadie-Sia C.C Sellu</strong></h5>
                                        <p class="card-subtitle" style="font-size: 10px">Co-Founder & COO of Saint Conrad Company Limited</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Conrad Kamara.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Conrad Kamara</strong></h5>
                                        <p class="card-subtitle" style="font-size: 10px">Co-Founder & CEO of Saint Conrad Company Limited</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card px-0 mx-auto my-3"
                                    style="width: 20rem;border-radius:20px;height: 25rem;">
                                    <img src="{{asset('yep-assets/img/speakers/Joseph Turay.jpg')}}"
                                        class="card-img-top" alt="..." width="100%" height="280"
                                        style="border-radius: 20px 20px 0 0">

                                    <div class="card-body text-start">
                                        <h5 class="card-title"><strong>Joseph Turay</strong></h5>
                                        <p class="card-subtitle" style="font-size: 13px">Founder & CEO of Route 360 Solutions</p>
                                    </div>
                                    <a href="#" class="nav-link text-end fs-3 me-3"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Speakers -->

    <!-- Schedule -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h1 class="mb-4 mt-2 font-hepidova color-blue">PROGRAMME SCHEDULE</h1>
                </div>
            </div>
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="list-tab" role="tablist">
                            <a class="nav-link ftco-animate active" id="list-day1-list" data-bs-toggle="list"
                                href="#list-day1" role="tab" aria-controls="list-day1">Day 01 <span> 21 Jan. 2025</span></a>
                            <a class="nav-link ftco-animate" id="list-day2-list" data-bs-toggle="list" href="#list-day2"
                                role="tab" aria-controls="list-day2">Day 02 <span>22 Jan. 2025</span></a>
                            <a class="nav-link ftco-animat" id="list-day3-list" data-bs-toggle="list" href="#list-day3"
                                role="tab" aria-controls="list-day3">Day 03 <span>23 Jan. 2025</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- Day 1 -->
                        <div class="tab-pane fade show active" id="list-day1" role="tabpanel"
                            aria-labelledby="list-day1-list">
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 08:00 - 09:30</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Registration and Networking</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 09:30 - 10:30</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Opening Ceremony</h4>
                                    <p>Call to Order and Welcome statement by Permanent Minister of Youth Affairs</p>
                                    <p><strong>Statements:</strong> <br>
                                    <strong>&bull;</strong> Special Address by Dr. Abdoulie Janneh, Director General and President of AGI Board. <br>
                                    <strong>&bull;</strong> UNDP - Resident Representative<br>
                                    <strong>&bull;</strong> Minister of Youth Affairs<br>
                                    <strong>&bull;</strong> Keynote Statement - Her Excellency the First Lady of Sierra Leone.</p>

                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 10:30 - 11:00</span>
                                    <h4 class="text-white" style="font-size: 20px;">Group photo and Coffee break</h4>
                                </div>
                            </div>
                            <!--SESSION 1-->
                            <div class="container py-3">
                                <h3 class="color-pink">Session 1 : Introduction to Entrepreneurship Trainer</h3>
                                <p>Understanding Entrepreneurship, Identifying Business Opportunities, and Entrepreneurial Mindset, Entrepreneurship and business development, the importance of Small businesses to the Sierra Leone economy, opportunities for women, youth and minorities. Entrepreneurship as a mean for the reduction of unemployment rate among youth and improvement of standards of living</p>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 11:00 - 11:15</span>
                                    <h4 class="text-white" style="font-size: 20px;">Ice Breaker</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 11:15 - 01:00 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session</h4>
                                    <p><strong>Topic:</strong> Unlocking Youth Potential: Challenges and Opportunities for Development in Sierra Leone</p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 01:00 PM - 02:00 PM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Lunch Break</h4>
                                </div>
                            </div>
                            <!--SESSION 2-->
                            <div class="container py-3">
                                <h3 class="color-pink">Session 2 : Business Development Services </h3>
                                <p>Topics Covered: starting from Scratch, entrepreneurial ecosystem, Business Planning, Market Research, Customer Development. Practical Session with Case Studies </p>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <h4 class="color-blue" style="font-size: 20px;">Breakout session 1 (for women only) </h4>
                                            <p><strong>Title:</strong> Empowering Women Entrepreneurs: Unlocking Access to Capital in Sierra Leone</p>
                                            <p><strong>Focus:</strong> Discuss innovative funding opportunities, microfinance models, and strategic partnerships to enhance access to capital for female entrepreneurs.</p>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 04:00 PM - 05:30 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session</h4>
                                    <p> <strong>Interactive Workshop</strong> <br>
                                        <strong>Topic:</strong> Building Resilience in Entrepreneurship: Lessons from Sierra Leonean Success Stories <br>

                                        Tell me your story session: Selection of 3 Sierra Leonian success stories of 3 young entrepreneurs who will share their experience, their entrepreneurial journey and how they manage to make grow their business into a successful SME.
                                        </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 05:30 PM - 05:45</span>
                                    <h4 class="text-white" style="font-size: 20px;">Networking, Coffee, Tea</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="tab-pane fade" id="list-day2" role="tabpanel" aria-labelledby="list-day2-list">
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 09:00 AM - 10:30 AM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session</h4>
                                    <p><strong>Topic:</strong> Innovation for Sustainable Growth: Transforming Ideas into Impact <br>
                                        Expert-led presentations on leveraging innovation for youth entrepreneurship.
                                        </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 10:30 - 10:45 AM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Coffee Break</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <h4 class="color-blue" style="font-size: 20px;">Breakout Session 2</h4>
                                    <p><strong>Title:</strong> Agri-Innovation: Cultivating Solutions for Sustainable Development in Sierra Leone <br>
                                        <strong>Focus:</strong> Explore modern agri-business models, technological advancements in agriculture, and innovative practices to enhance productivity and sustainability.
                                        </p>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 10:45 AM - 12:45 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session 2 </h4>
                                    <p>Transformational leadership talks: Leadership Expert Topics Covered: leadership skills, tips for success</p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 12:45 PM - 02:00 PM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Lunch Break</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 02:00 PM – 04:00 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session 3</h4>
                                    <p>Understanding Financial Services and Access to finance for startups. <br>
                                        Topics Covered: Access to Loans, Microfinancing, Crowdfunding, and Angel Investment </p>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <h4 class="color-blue" style="font-size: 20px;">Breakout Session 3</h4>
                                    <p><strong>Title:</strong> Green Enterprise: Driving Climate Action Through Entrepreneurship <br>
                                        <strong>Focus:</strong> Explore green technologies, entrepreneurial approaches to address climate challenges, and strategies for fostering environmentally sustainable practices.                                         </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 04:00 PM – 04:15 PM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Coffee Break</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 04:15 PM – 05:30 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Networking Activity</h4>
                                    <p><strong>Topic:</strong> Youth Entrepreneurs Connect: Sharing Ideas and Building Partnerships</p>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="tab-pane fade" id="list-day3" role="tabpanel" aria-labelledby="list-day3-list">
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 09:00 AM – 11:00 AM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session</h4>
                                </div>
                            </div>
                            <!--Session 1-->
                            <div class="container py-3">
                                <h3 class="color-pink">Session 1 : Digital Marketing Fundamentals, Social Media Marketing
                                    </h3>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <h4 class="color-blue" style="font-size: 20px;">Breakout Session 4 </h4>
                                    <p><strong>Title:</strong> Innovative Solutions: Leveraging Technology and Creativity to Solve Sierra Leone’s Challenges <br>
                                        <strong>Focus:</strong> Highlight technology-driven innovations, digital tools, and creative approaches to solving local socio-economic challenges.
                                         </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 11:00 AM – 11:15 AM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Coffee Break</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 11:15 AM – 01:15 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Plenary Session </h4>
                                </div>
                            </div>
                            <!--Session 2-->
                            <div class="container py-3">
                                <h3 class="color-pink">Session 2 : E-Commerce and Digital Platforms Topics Covered: Setting up Online Shops, Mobile Payments, Digital Tools for Business</h3>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <h4 class="color-blue" style="font-size: 20px;">Breakout Session 5</h4>
                                    <p><strong>Title:</strong> Meeting Youth Needs: Mapping Priorities for a Brighter Future in Sierra Leone <br>
                                        <strong>Focus:</strong> A participatory session to identify and address pressing needs for Sierra Leonean youth, including education, skills development, and job creation strategies.
                                         </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 01:15 PM – 02:15 PM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Lunch Break</h4>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 02:15 PM – 03:30 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Final Plenary Session</h4>
                                    <p><strong>Topic:</strong> The Road Ahead: Sustaining Impact Beyond the Program <br>
                                        Summary of key takeaways, commitments, and future actions.
                                         </p>
                                </div>
                            </div>
                            <div class="speaker-wrap ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-muted"><i class="fa-regular fa-clock"></i> 03:30 PM – 04:00 PM</span>
                                    <h4 class="color-blue" style="font-size: 20px;">Closing Ceremony</h4>
                                    <p><strong>&bull;</strong> Remarks by the Minister of Youth Affairs <br>
                                        <strong>&bull;</strong> Vote of Thanks by AGI Representative <br>
                                        <strong>&bull;</strong> Distribution of certificates
                                         </p>
                                </div>
                            </div>
                            <div class="speaker-wrap-bg-blue-1 ftco-animate d-flex mt-4">
                                <div class="text ms-2">
                                    <span class="text-white"><i class="fa-regular fa-clock"></i> 04:00 PM – 05:00 PM</span>
                                    <h4 class="text-white" style="font-size: 20px;">Informal Networking and Media Engagement</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schedule -->

    <!-- MAPS -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span>EVENT LOCATION</span>
                </div>
            </div>
            <iframe width="100%" height="600"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3171.8534083093337!2d-13.2901881!3d8.4973926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf04c4151676ba71%3A0xd62c77778b7b27df!2sBintumani%20International%20Conference%20Centre!5e0!3m2!1sen!2ssl!4v1682639206013!5m2!1sen!2ssl"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy"></iframe><br />
        </div>
    </section>
    <!-- END MAPS -->

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
                        <img src="{{asset('yep-assets/img/Partners Logo/PNG Files/BADEA.png')}}" class="card-img-top img-fluid logo-img"
                            alt="BADEA">
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-center">
                        <img src="{{asset('yep-assets/img/Partners Logo/PNG Files/Government of Sierra Leone.png')}}" class="card-img-top img-fluid logo-img"
                            alt="BADEA">
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-center">
                        <img src="{{asset('yep-assets/img/Partners Logo/PNG Files/Office of the First Lady.png')}}" class="card-img-top img-fluid logo-img"
                            alt="Office of First Lady - Sierra Leone">
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-center">
                        <img src="{{asset('yep-assets/img/Partners Logo/PNG Files/UNDP.png')}}" class="card-img-top img-fluid logo-img"
                            alt="UNDP">
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 text-center">
                        <img src="{{asset('yep-assets/img/Partners Logo/PNG Files/AGI.png')}}" class="card-img-top img-fluid logo-img"
                            alt="AGI">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partners And Sponsors -->

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
    <!--<script src="{{asset('yep-assets/js/countdown.js')}}"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="{{asset('yep-assets/js/backtotop.js')}}"></script>

</body>

</html>
