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
											<li>
												<div class="small_dropdown2">
													<div id="prncgs2" class="btn dd_btn">
														<span>Price</span>
														<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
													</div>
													  <div class="dd_content2">
														<div class="pricing_acontent">
															<input name="min_price" type="number" class="amount" placeholder="$52,239"> 
															<input name="max_price" type="number" class="amount2" placeholder="$98,514">
															<div class="slider-range"></div>
														</div>
													  </div>
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
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">Search Listings</li>
						</ol>
						<h2 class="breadcrumb_title">Search Listings</h2>
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
												<select name="offer" class="selectpicker w100 show-tick">
													<option value="sale" selected>For Sale</option>
													<option value="rent">For Rent</option>
												</select>
											</div>
										</div>
									</li>
									<li>
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
					
					
					</div>
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="grid_list_search_result">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
								
							</div>
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
								<div class="right_area text-right tac-xsd">
									<ul>
										
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
					
		
					</div>
				</div>
			</div>
		</div>
	</section>

	

@endsection