@extends('layouts.main')

@section('content')
	<!-- Listing Grid View -->
	<section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-991">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<form action="/listings/results" method="GET">
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input name="address" type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="type" class="selectpicker w100 show-tick">
														<option value="" selected>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
													
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="offer" class="selectpicker w100 show-tick">
														<option value="sale" selected>For Sale</option>
														<option value="rent">For Rent</option>
													</select>
												</div>
											</div>
										</li>
										<div class="hidden">
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
												    	<span id="slider-range-value1"></span>
														<span class="mt0" id="slider-range-value2"></span>
													    <div id="slider"></div>
														<!-- <input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div> -->
												    </div>
											  	</div>
											</div>
										</li>
									   </div>
									   <li class="min_area style2 list-inline-item">
										<div class="form-group">
											<input name="min_price" type="number" class="form-control" placeholder="Min Price">
										</div>
									</li>
									<li class="max_area list-inline-item">
										<div class="form-group">
											<input name="max_price" type="number" class="form-control" placeholder="Max Price">
										</div>
									</li>
							
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name ="bathrooms" class="selectpicker w100 show-tick">
														<option  value="" selected >Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="bedrooms" class="selectpicker w100 show-tick">
														<option  value="" selected >Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
									
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input name="min_area" type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input name="max_area" type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb_content style2 mb0-991">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="/">Home</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">Results</li>
						</ol>
						<h2 class="breadcrumb_title">Results</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="listing_list_style mb20-xsd tal-991">
						<ul class="mb0">
							<li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
						</ul>
					</div>
					<div class="dn db-991 mt30 mb0">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn style2"> Show Filter</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="sidebar_listing_grid1 dn-991">
						<div class="sidebar_listing_list">
							<div class="sidebar_advanced_search_widget">
								 {{-- form begin --}}
								 <form action="/listings/results" method="GET">
									<ul class="sasw_list mb0">
										<li class="search_area">
											<div class="form-group">
												<input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
												<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
											</div>
										</li>
										<li class="search_area">
											<div class="form-group">
												<input name="address" type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
												<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="type" type="text" class="selectpicker w100 show-tick">
														<option value="" selected>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
													
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="offer" class="selectpicker w100 show-tick" onchange="updateOffer(this.value)">
														<option value="sale" selected>For Sale</option>
														<option value="rent">For Rent</option>
													</select>
												</div>
											</div>
										</li>
										<li id="salePrice">
											<div class="small_dropdown2">
												<div id="prncgs2" class="btn dd_btn">
													<span>Price</span>
													<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												</div>
												  <div class="dd_content2">
													<div class="pricing_acontent">
														<input name="min_price" type="number" class="amount" placeholder="$52000"> 
														<input name="max_price" type="number" class="amount2" placeholder="$98000">
														<div class="slider-range"></div>
													</div>
												  </div>
											</div>
										</li>
										<li id="rentPrice">
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick" onchange="updatePriceRange(this.value)">
														<option value="">Select Price Range</option>
														<option value="0-1000">0-$1,000</option>
														<option value="1000-1500">$1,000-$1,500</option>
														<option value="1500-2000">$1,500-$2,000</option>
														<option value="2000-2500">$2,000-$2,500</option>
														<option value="3000-3500">$3,000-$3,500</option>
														<option value="3500-4000">$3,500-$4,000</option>
												
													</select>
												</div>
											</div>
	
											<input type="hidden" name="min_price" id="min_price">
											<input type="hidden" name="max_price" id="max_price">
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="bathrooms" type="number" class="selectpicker w100 show-tick">
														<option  value="" selected >Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select name="bedrooms" type="number" class="selectpicker w100 show-tick">
														<option  value="" selected>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
							
										<li class="min_area list-inline-item">
											<div class="form-group">
												<input name="min_area" type="number" class="form-control" id="exampleInputName2" placeholder="Min Area">
											</div>
										</li>
										<li class="max_area list-inline-item">
											<div class="form-group">
												<input name="max_area" type="number" class="form-control" id="exampleInputName3" placeholder="Max Area" value="">
											</div>
										</li>
									
										<li>
											<div class="search_option_button">
												<button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
								</form>
								{{-- form end --}}
							</div>
						</div>
					
						<div class="terms_condition_widget">
							<h4 class="title">Categories Property</h4>
							<div class="widget_list">
								<ul class="list_details">
									<li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment </a></li>
									<li><a href="#"><i class="fa fa-caret-right mr10"></i>Bungalow </a></li>
									<li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo </a></li>
									<li><a href="#"><i class="fa fa-caret-right mr10"></i>House </a></li>
								
								</ul>
							</div>
						</div>
						<div class="sidebar_feature_listing">
							<h4 class="title">Featured</h4>
							<div class="media">
								<img class="align-self-start mr-3" src="/images/property/views.jpg" alt="fls1.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">Nice Room With View</h5>
							    	<a href="#">$13,000/<small>/mo</small></a>
							    	<ul class="mb0">
							    		<li class="list-inline-item">Beds: 4</li>
							    		<li class="list-inline-item">Baths: 2</li>
							    		<li class="list-inline-item">Sq Ft: 5280</li>
							    	</ul>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="/images/property/villas.jpg" alt="fls2.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">Villa called Archangel</h5>
							    	<a href="#">$13,000<small>/mo</small></a>
							    	<ul class="mb0">
							    		<li class="list-inline-item">Beds: 4</li>
							    		<li class="list-inline-item">Baths: 2</li>
							    		<li class="list-inline-item">Sq Ft: 5280</li>
							    	</ul>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="/images/property/studios.jpg" alt="fls3.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">Sunset Studio</h5>
							    	<a href="#">$13,000<small>/mo</small></a>
							    	<ul class="mb0">
							    		<li class="list-inline-item">Beds: 4</li>
							    		<li class="list-inline-item">Baths: 2</li>
							    		<li class="list-inline-item">Sq Ft: 5280</li>
							    	</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="grid_list_search_result">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
								<div class="left_area tac-xsd">
									<p>{{$totalResults}} Search results</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
								<div class="right_area text-right tac-xsd">
									<ul>
										<li class="list-inline-item"><span class="stts">Status:</span>
											<select class="selectpicker show-tick">
												<option>All Status</option>
												<option>Recent</option>
												<option>Old Review</option>
											</select>
										</li>
										<li class="list-inline-item"><span class="shrtby">Sort by:</span>
											<select class="selectpicker show-tick">
												<option>Featured First</option>
												<option>Featured 2nd</option>
												<option>Featured 3rd</option>
												<option>Featured 4th</option>
												<option>Featured 5th</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						
					@foreach ($listings as $listing )
						
				
						<div class="col-lg-12">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="/uploads/{{$listing->images[0]->image}}" alt="listing thumbnail">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											@if (Route::has('login'))
											@auth
											 @if ($user->savedListings->contains($listing->id))
											  <li class="favorite list-inline-item "><a href="#"><span class="flaticon-heart"></span></a></li>
						
											  @else
											  <li class="list-inline-item">
											  <form  method="POST" action="/favorites/{{$listing->id}}">
												@csrf
											   {{-- <a href="/favorites/{{$listing->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-heart"></span></a> --}}
											   <a href="#" onclick="event.preventDefault(); toggleFavorite({{ $listing->id }}, this);"><span class="flaticon-heart"></span></a>
											
											  </form>
											  </li>
											 @endif
											
											 @else
											 <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span> </a></li>
											@endauth
											@endif
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
												
												@if ($listing->offer=="sale")
												<li class="list-inline-item"><a href="/listings/{{$listing->id}}">For Sale</a></li>
												@else
												<li class="list-inline-item"><a href="/listings/{{$listing->id}}">For Rent</a></li>
												@endif
												{{-- <li class="list-inline-item"><a href="#">Featured</a></li> --}}
											</ul>
											@if ($listing->offer=="sale")
											<a class="fp_price" href="#">${{number_format($listing->price)}}</a>
											@else
											<a class="fp_price" href="#">${{number_format($listing->price)}}<small>/mo</small></a>
											@endif
										</div>
										<p class="text-thm">{{$listing->type}}</p>
										<h4>{{$listing->title}}</h4>
										<p><span class="flaticon-placeholder"></span>{{$listing->address}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: {{$listing->bedrooms}}</a></li>
											<li class="list-inline-item"><a href="#">Baths: {{$listing->bathrooms}}</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: {{$listing->squarefootage}}</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
										
											<li class="list-inline-item"><a href="#">Listed By: {{$listing->user->name}}</a></li>
										</ul>
										<div class="fp_pdate float-right">{{$listing->created_at->format('m/d/Y')}}</div>
									</div>
								</div>
							</div>
						</div>

						@endforeach

						<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
									<!-- Previous Page Link -->
									@if ($listings->onFirstPage())
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
												<span class="flaticon-left-arrow"></span> Prev
											</a>
										</li>
									@else
										<li class="page-item">
											<a class="page-link" href="{{ $listings->previousPageUrl() }}" tabindex="-1" aria-disabled="true"> 
												<span class="flaticon-left-arrow"></span> Prev
											</a>
										</li>
									@endif
				
									<!-- Pagination Elements -->
									@foreach ($paginationUrls as $page => $url)
										@if ($page == $listings->currentPage())
											<li class="page-item active" aria-current="page">
												<a class="page-link" href="{{ $url }}">{{ $page }} <span class="sr-only">(current)</span></a>
											</li>
										@else
											<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
										@endif
									@endforeach
				
									<!-- Next Page Link -->
									@if ($listings->hasMorePages())
										<li class="page-item">
											<a class="page-link" href="{{ $listings->nextPageUrl() }}">
												<span class="flaticon-right-arrow"></span>
											</a>
										</li>
									@else
										<li class="page-item disabled">
											<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
										</li>
									@endif
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	

@endsection

@section('js')
<script src="/js/toggleFavorite.js"></script>
<script src="/js/rentPriceToggle.js"></script>
<script src="/js/priceDropDown.js"></script>
@endsection