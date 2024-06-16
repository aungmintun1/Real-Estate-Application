@extends('layouts.dashboard')

@section('content')

						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Edit Your Property</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
						  <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="my_dashboard_review">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Edit Listing</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyTitle">Property Title</label>
									    	<input name="title" type="text" class="form-control" id="propertyTitle" value="{{$listing->title}}">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_textarea">
										    <label for="propertyDescription">Description</label>
										    <textarea name="description" class="form-control" id="propertyDescription" rows="7" >{{$listing->description}}</textarea>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Type</label>
											<select name="type" class="selectpicker" data-live-search="true" data-width="100%">
												<option @if ($listing->type == 'Apartment') selected @endif  data-tokens="apartment">Apartment</option>
												<option @if ($listing->type == 'Bungalow') selected @endif data-tokens="bungalow">Bungalow</option>
												<option @if ($listing->type == 'Condo') selected @endif data-tokens="condo">Condo</option>
												<option @if ($listing->type == 'House') selected @endif data-tokens="house">House</option>
												<option @if ($listing->type == 'Land') selected @endif data-tokens="land">Land</option>
												<option @if ($listing->type == 'Single Family') selected @endif data-tokens="single family">Single Family</option>
											
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Status</label>
											<select name="status" class="selectpicker" data-live-search="true" data-width="100%">
												<option @if ($listing->status == 'Draft') selected @endif data-tokens="Status1" selected>Draft</option>
												<option @if ($listing->status == 'Published') selected @endif data-tokens="Status2">Published</option>
											
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExamplePrice">Price</label>
									    	<input name="price" type="text" class="form-control" id="formGroupExamplePrice" value="{{$listing->price}}">
										</div>
									</div>
								

									{{-- <div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div> --}}
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Location</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyAddress">Address</label>
									    	<input name="address" type="text" class="form-control" id="propertyAddress" value="{{$listing->address}}">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyState">County / State</label>
									    	<input name="state" type="text" class="form-control" id="propertyState" value="{{$listing->state}}">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyCity">City</label>
									    	<input name="city" type="text" class="form-control" id="propertyCity" value="{{$listing->city}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="zipCode">Zip</label>
									    	<input name="zipcode" type="text" class="form-control" id="zipCode" value="{{$listing->zipcode}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										{{-- <div class="my_profile_setting_input form-group">
									    	<label for="neighborHood">Neighborhood</label>
									    	<input type="text" class="form-control" id="neighborHood">
										</div> --}}
									</div>
							
									<div class="col-lg-4 col-xl-4">
										{{-- <div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Country</label>
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Turkey">Turkey</option>
												<option data-tokens="Iran">Iran</option>
												<option data-tokens="Iraq">Iraq</option>
												<option data-tokens="Spain">Spain</option>
												<option data-tokens="Greece">Greece</option>
												<option data-tokens="Portugal">Portugal</option>
											</select>
										</div> --}}
									</div>
									{{-- <div class="col-lg-12">
										<div class="my_profile_setting_input form-group">
											<div class="h400 bdrs8" id="map-canvas"></div>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLat">Latitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="googleMapLat">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLong">Longitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="googleMapLong">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Google Map Street View</label>
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Turkey">Street View v1</option>
												<option data-tokens="Iran">Street View v2</option>
												<option data-tokens="Iraq">Street View v3</option>
												<option data-tokens="Spain">Street View v4</option>
												<option data-tokens="Greece">Street View v5</option>
												<option data-tokens="Portugal">Street View v6</option>
											</select>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div> --}}
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Detailed Information</h4>
									</div>
								
							
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="bedRooms">Bedrooms</label>
									    	<input name="bedrooms" type="text" class="form-control" id="bedRooms" value="{{$listing->bedrooms}}">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="bathRooms">Bathrooms</label>
									    	<input name="bathrooms" type="text" class="form-control" id="bathRooms" value="{{$listing->bathrooms}}">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="Area">Area</label>
									    	<input name="squarefootage" type="number" class="form-control" id="bathRooms" value="{{$listing->squarefootage}}">
										</div>
									</div>
								
							        <div class="col-xl-12">
							        	<h4>Amenities</h4>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Air Conditioning', $listing->features) ? 'checked' : '' }} name="features[]" type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Lawn', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">Lawn</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input  {{ in_array('Swimming Pool', $listing->features) ? 'checked' : '' }} name="features[]" type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Barbeque', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck4">
													<label class="custom-control-label" for="customCheck4">Barbeque</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input  {{ in_array('Microwave', $listing->features) ? 'checked' : '' }} name="features[]" type="checkbox" class="custom-control-input" id="customCheck5">
													<label class="custom-control-label" for="customCheck5">Microwave</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('TV Cable', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck6">
													<label class="custom-control-label" for="customCheck6">TV Cable</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Dryer', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck7">
													<label class="custom-control-label" for="customCheck7">Dryer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Outdoor Shower', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck8">
													<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Washer', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck9">
													<label class="custom-control-label" for="customCheck9">Washer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Gym', $listing->features) ? 'checked' : '' }}  value="Gym" name="features[]" type="checkbox" class="custom-control-input" id="customCheck10">
													<label class="custom-control-label" for="customCheck10">Gym</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Refrigerator', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck11">
													<label class="custom-control-label" for="customCheck11">Refrigerator</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('WiFi', $listing->features) ? 'checked' : '' }} value="WiFi" name="features[]" type="checkbox" class="custom-control-input" id="customCheck12">
													<label class="custom-control-label" for="customCheck12">WiFi</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('WiFi', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck13">
													<label class="custom-control-label" for="customCheck13">Laundry</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Sauna', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck14">
													<label class="custom-control-label" for="customCheck14">Sauna</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input {{ in_array('Window Coverings', $listing->features) ? 'checked' : '' }}  name="features[]" type="checkbox" class="custom-control-input" id="customCheck15">
													<label class="custom-control-label" for="customCheck15">Window Coverings</label>
												</div>
						                	</li>
						                </ul>
							        </div>
								
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Add Images</h4>
									</div>
							
									<div class="col-lg-12">
										<div class="portfolio_upload">
											<input type="file" name="myfile" />
											<div class="icon"><span class="flaticon-download"></span></div>
											<p>Drag and drop images here</p>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="resume_uploader mb30">
											<h4>Attachments</h4>
											<form class="form-inline">
												
												<label class="upload">
												    <input type="file" name="images[]" accept=".png, .jpg, .jpeg" multiple>
												    Select Attachment
												</label>
											</form>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input text-center">
											<button type="submit" class="btn btn2 ">Confirm Edit</button>
										</div>
									</div>
								</div>
							</div>
					
						  </form>

						  <div class="my_dashboard_review mt30">
							<div class="row">
								<div class="col-lg-12">
									<h4 class="mb30">Property media</h4>
								</div>
								<div class="col-lg-12">
									<ul class="mb0">
										@foreach ($listing->images as $image )
											
										<li class="list-inline-item">
											<div class="portfolio_item">
												<img class="img-fluid" src="/uploads/{{$image->image}}" alt="fp1.jpg">
												<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
												 <form method="POST" action="/listings/{{$image->id}}">
													@csrf
													@method('DELETE')
												   <a href="/listings/{{$image->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-garbage"></span></a>
												
												  </form></div>
												
											</div>
										</li>

										@endforeach

				
									</ul>
								</div>
						
						</div>
						</div>
						
					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p>© 2020 Find House. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @endsection