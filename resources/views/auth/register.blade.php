<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
		 
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="admin-dashboard.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Employee Management System Dashboard</p>
							
							<!-- Account Form -->
							<form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-4 input-block">
									<label class="col-form-label">Name<span class="mandatory">*</span></label>
									<input class="form-control" type="text" name="name" id="name" >
								</div>

								<div class="mb-4 input-block">
									<label class="col-form-label">Email<span class="mandatory">*</span></label>
									<input class="form-control"  type="email" id="email" name="email">
								</div>
								<div class="mb-4 input-block">
									<label class="col-form-label">Password<span class="mandatory">*</span></label>
									<input class="form-control"  type="password"
                                    name="password"
                                    required autocomplete="new-password">
								</div>
								<div class="mb-4 input-block">
									<label class="col-form-label">Confirm Password<span class="mandatory">*</span></label>
									<input class="form-control" id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
								</div>
								<div class="mb-4 text-center input-block">
									<button class="btn btn-primary account-btn" type="submit" >Register</button>
								</div>
								<div class="account-footer">
									<p>Already have an account? <a href="/login">Login</a></p>
								</div>
							</form>
							<!-- /Account Form -->
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
       <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	
		<!-- Custom JS -->
		<script src="{{asset('assets/js/app.js')}}"></script>
		
    </body>


</html>