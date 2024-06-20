@extends('layouts.main')

 @section('content')
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb contact-bg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Register</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form method="POST" action="{{ route('register') }}">
                            @csrf
							<div class="heading">
								<h3 class="text-center">Register your account</h3>
							</div>

                            <div class="form-group">
						    	<input name="name" type="name" class="form-control" id="name" placeholder="Name" value="john">
							</div>
							 <div class="form-group">
						    	<input name="email" type="email" class="form-control" id="email" placeholder="Email Address" value="john@gmail.com">
							</div>
							<div class="form-group">
						    	<input name="password" type="password" class="form-control" id="password" placeholder="Password" value="password">
							</div>
                            <div class="form-group">
						    	<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" value="password">
							</div>

							<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

  @endsection