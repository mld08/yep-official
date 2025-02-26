<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Join the Youth Empowerment Program in Freetown. Training in entrepreneurship, leadership, and more to empower young Africans.">
    <meta name="keywords"
        content="youth empowerment, Freetown, entrepreneuriat, leadership, Sierra Leone, jeunes innovateurs, youth empowerment program">
    <title>Youth Empowerment Program | Register</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('yep-assets/Logo/SVG Files/Favicon.svg')}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('yep-assets/css/style.css')}}">
    <script src="https://kit.fontawesome.com/332e91a08f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Bouton pour remonter -->
    <a href="#" class="btn btn-primary back-to-top" id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- Formulaire -->
    <div class="container my-5">
        <div class="text-center mb-4">
            <img src="{{asset('yep-assets/Logo/SVG Files/Logo Horizontal.svg')}}" alt="Youth Empowerment Banner" class="img-fluid mb-4" width="700" height="200">
            <h2 class="mt-3">Registration Form</h2>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('register.store') }}" id="registrationForm">
            @csrf
            @method("POST")
            <!-- Surname -->
            <div class="mb-3">
                <label for="surname" class="form-label">Surname <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" required>
            </div>
            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
            </div>
            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" required>
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                <select class="form-select" id="gender" name="gender" required>
                    <option selected>--select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" id="status" name="status" required onchange="toggleOtherStatus(this)">
                    <option selected>--select--</option>
                    <option value="student">Student</option>
                    <option value="entrepreneur">Entrepreneur</option>
                    <option value="employed">Employed</option>
                    <option value="unemployed">Unemployed</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- Other Status (Text Box) -->
            <div class="mb-3" id="otherStatusBox" style="display: none;">
                <label for="other_status" class="form-label">Please specify your status <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="other_status" name="other_status">
            </div>
            <!-- Terms and Conditions -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="termsCheckbox" name="termsCheckbox" required>
                <label class="form-check-label" for="termsCheckbox">
                    I confirm I have read and accept the <a href="#">Terms and Conditions</a> and the <a href="#">Privacy Policy</a>.
                </label>
            </div>
            <!-- Submit Button -->
            <div class="text-center">
                <button id="submit_button" type="submit" class="my-3 btn btn-blue">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function toggleOtherStatus(select) {
            const otherStatusBox = document.getElementById('otherStatusBox');
            if (select.value === 'other') {
                otherStatusBox.style.display = 'block';
            } else {
                otherStatusBox.style.display = 'none';
            }
        }
    </script>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            const termsCheckbox = document.getElementById('terms');
            if (!termsCheckbox.checked) {
                event.preventDefault(); // Empêche l'envoi du formulaire
                alert('You must accept the Terms and Conditions and Privacy Policy before submitting the form.');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="js/countdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="js/backtotop.js"></script>

</body>

</html>
