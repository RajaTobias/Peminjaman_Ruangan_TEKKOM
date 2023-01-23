<!doctype html>
<html lang="en">
  <head>
  	<title>Login Peminjaman Ruangan Teknik Komputer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="{{ asset('assets/css/stylelogin.css') }}">

	</head>
	<body>
		<div class="topnav">
        <a href="{{ route('register') }}">Register</a>
			<a href="{{ route('login') }}">Login</a>
		  </div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h2 class="mb-4">Register</h2>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" required>
			      			<label class="form-control-placeholder" for="username" value="{{ old('email') }}" required autocomplete="email">Email</label>
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
							<div class="w-100">
			      			<h2 class="mb-4"></h2>
			      		</div>
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" required>
                            <label class="form-control-placeholder" for="username" value="{{ old('name') }}" required autocomplete="name" autofocus>Username</label>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                          <div class="w-100">
                            <h2 class="mb-4"></h2>
                        </div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password" name="password" required autocomplete="new-password">Password</label>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		            </div>
                    <div class="w-100">
                        <h2 class="mb-4"></h2>
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label class="form-control-placeholder" for="password">Confirm Password</label>
                      </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary2 rounded submit px-3">Register</button>
		            </div>
		          </form>
		          <!-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> -->
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/assets/js/jquery1.min.js"></script>
  <script src="/assets/js/popper1.js"></script>
  <script src="/assets/js/bootstrap1.min.js"></script>
  <script src="/assets/js/main1.js"></script>

	</body>
</html>

