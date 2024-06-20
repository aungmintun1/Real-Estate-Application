@extends('layouts.main')
@section('content')
	<!-- Our Error Page -->
	<section class="our-error bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="error_page footer_apps_widget">
						<img class="img-fluid mx-auto" src="/images/resource/erorr.png" alt="error.png">
						<div class="erro_code"><h1>You Are Not Authorized To Access This Page!</h1></div>
						<p>We can’t seem to find the page you’re looking for</p>
					</div>
					<a class="btn btn_error btn-thm" href="/">Back To Home</a>
				</div>
			</div>
		</div>
	</section>
@endsection