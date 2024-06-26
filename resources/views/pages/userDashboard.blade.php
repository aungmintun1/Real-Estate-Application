@extends('layouts.dashboard')
@section('content')

						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Howdy, {{$user->name}}!</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon"><span class="flaticon-home"></span></div>
								<div class="detais">
									<div class="timer">{{$listings}}</div>
									<p>All Properties</p>
								</div>
							</div>
						</div>
					
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style4">
								<div class="icon"><span class="flaticon-heart"></span></div>
								<div class="detais">
									<div class="timer">{{$favorites}}</div>
									<p>Total Favorites</p>
								</div>
							</div>
						</div>
					
						<div class="col-xl-5">
							<div class="recent_job_activity">
								<h4 class="title">Recent Activities</h4>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
										<li class="list-inline-item"><p>Your listing <strong>Luxury Family Home</strong> is getting more views!.</p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-chat"></span></div></li>
										<li class="list-inline-item"><p>Kathy Brown left a message on <strong>Renovated Apartment</strong></p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-heart"></span></div></li>
										<li class="list-inline-item"><p>People are saving <strong>Gorgeous Villa Bay View</strong></p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
										<li class="list-inline-item"><p>Your Open House for <strong>Luxury Family Home</strong> has been scheduled!</p></li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-chat"></span></div></li>
										<li class="list-inline-item"><p>Emma Wilson left a message on <strong>Renovated Apartment</strong></p></li>
									</ul>
								</div>
							
							</div>
						</div>
					</div>
                    <div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p>© 2020 Find House. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

@endsection