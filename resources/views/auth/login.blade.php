<!doctype html>
<html lang="en">

<head>
	<title>Youth Empowerment Program | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('auth-assets/css/style.css')}}">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('yep-assets/Logo/SVG Files/Favicon.svg')}}" type="image/x-icon">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('{{asset('yep-assets/Logo/JPEG Files/YEP - Logo Alt.jpg')}}');">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
							</div>
							<form method="POST" action="{{ route('login') }}" class="signin-form">
                                @csrf
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
										In</button>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('auth-assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('auth-assets/js/popper.js')}}"></script>
	<script src="{{asset('auth-assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('auth-assets/js/main.js')}}"></script>

</body>

</html>
