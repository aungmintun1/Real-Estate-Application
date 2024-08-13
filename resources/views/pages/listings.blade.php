@extends('layouts.main')

 @section('content')
 	<!-- Listing Grid View -->
     <section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="listing_sidebar">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mb0">
								<div class="sidebar_advanced_search_widget">
								   <form action="/listings/results" method="GET">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Title">
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

								
										<li class="hidden">
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2 w100">
												    <div class="pricing_acontent">

														<span id="slider-range-value1"></span>
														<span class="mt0" id="slider-range-value2"></span>
													    <div id="slider"></div>
												    </div>
											  	</div>
											</div>
										</li>
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
				<div class="col-md-8 col-lg-6">
					<div class="breadcrumb_content style2">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">All Listings</li>
						</ol>
						<h2 class="breadcrumb_title">All Listings</h2>
					</div>
				</div>
				<div class="col-md-4 col-lg-6">
					<div class="sidebar_switch text-right">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn"> Show Filter</span>
						</div>
					</div>
				</div>
			</div>

            
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="grid_list_search_result style2">
							<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
								<div class="left_area">
									<p>{{$listings->total()}} Total Results</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
								<div class="right_area style2 text-right">
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
          
 @foreach ($listings as $listing )
     
 <div class="col-md-6 col-lg-4">
	<a href="/listings/{{$listing->id}}">
    <div class="feat_property home7 style4">
        <div class="thumb">
            <div>
				{{-- class="fp_single_item_slider" --}}
				@php
				$sortedimages = $listing->images->sortByDesc('thumbnail_image'); //'yes' is considered higher than 'no'
				@endphp
				@foreach ($sortedimages as $image)

				<div class="item">
                    <img class="img-whp" src="/uploads/{{$image->image}}" alt="listing images">
                </div>
					
				@endforeach
            
            </div>
            <div class="thmb_cntnt style2">
                <ul class="tag mb0">
					@if ($listing->offer=='sale')
					<li class="list-inline-item"><a href="#">For Sale</a></li>
					@else
					<li class="list-inline-item"><a href="#">For Rent</a></li>
					@endif
               
                   
                </ul>
            </div>
            <div class="thmb_cntnt style3">
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
				@if ($listing->offer=='sale')
				<a class="fp_price" href="#">${{ number_format($listing->price) }}</a>
				@else
				<a class="fp_price" href="#">${{number_format($listing->price)}}<small>/mo</small></a>
				@endif
              
            </div>
        </div>
        <div class="details">
			
            <div class="tc_content">
                <p class="text-thm">{{$listing->type}}</p>
                <h4> {{$listing->title}}</h4>
                <p><span class="flaticon-placeholder"></span> {{$listing->address}}</p>
                <ul class="prop_details mb0">
                    <li class="list-inline-item"><a class="text-thm3" href="#">Beds: {{$listing->bedrooms}}</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Bathrooms: {{$listing->bathrooms}}</a></li>
                    <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: {{$listing->squarefootage}}</a></li>
					
                </ul>
            </div>
            <div class="fp_footer">
                <ul class="fp_meta float-left mb0">
              
                    <li class="list-inline-item"><a href="#">Listed By: {{$listing->user->name}}</a></li>
                </ul>
                <div class="fp_pdate float-right">{{$listing->created_at->diffForHumans()}}</div>
            </div>
        </div>
    </div>
</a>
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
  @endsection