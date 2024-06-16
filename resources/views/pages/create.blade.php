@extends('layouts.dashboard')

@section('content')

						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Add New Property</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
						  <form method="POST" action="/listings" enctype="multipart/form-data">
							@csrf
							<div class="my_dashboard_review">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Create Listing</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyTitle">Property Title</label>
									    	<input name="title" type="text" class="form-control" id="propertyTitle" value="Amazing Big House">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_textarea">
										    <label for="propertyDescription">Description</label>
										    <textarea name="description" class="form-control" id="propertyDescription" rows="7" >Super big house with amazing space and cool backyard</textarea>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Type</label>
											<select name="type" class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="apartment">Apartment</option>
												<option data-tokens="bungalow">Bungalow</option>
												<option data-tokens="condo">Condo</option>
												<option data-tokens="house" selected>House</option>
												<option data-tokens="land">Land</option>
												<option data-tokens="single family">Single Family</option>
											
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Status</label>
											<select name="status" class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Status1" selected>Draft</option>
												<option data-tokens="Status2">Published</option>
											
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExamplePrice">Price</label>
									    	<input name="price" type="text" class="form-control" id="formGroupExamplePrice" value="13000">
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
									    	<input name="address" type="text" class="form-control" id="propertyAddress" value="55-51 Kleeck Van st">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyState">County / State</label>
									    	<input name="state" type="text" class="form-control" id="propertyState" value="New York">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyCity">City</label>
									    	<input name="city" type="text" class="form-control" id="propertyCity" value="Elmhrust">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="zipCode">Zip</label>
									    	<input name="zipcode" type="text" class="form-control" id="zipCode" value="11372">
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
									    	<input name="bedrooms" type="text" class="form-control" id="bedRooms" value="3">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="bathRooms">Bathrooms</label>
									    	<input name="bathrooms" type="text" class="form-control" id="bathRooms" value="2">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="Area">Area</label>
									    	<input name="squarefootage" type="number" class="form-control" id="area" value="81200">
										</div>
									</div>
								
							        <div class="col-xl-12">
							        	<h4>Amenities</h4>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">Lawn</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck4">
													<label class="custom-control-label" for="customCheck4">Barbeque</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck5">
													<label class="custom-control-label" for="customCheck5">Microwave</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck6">
													<label class="custom-control-label" for="customCheck6">TV Cable</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck7">
													<label class="custom-control-label" for="customCheck7">Dryer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck8">
													<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck9">
													<label class="custom-control-label" for="customCheck9">Washer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input checked value="Gym" name="features[]" type="checkbox" class="custom-control-input" id="customCheck10">
													<label class="custom-control-label" for="customCheck10">Gym</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck11">
													<label class="custom-control-label" for="customCheck11">Refrigerator</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input checked value="WiFi" name="features[]" type="checkbox" class="custom-control-input" id="customCheck12">
													<label class="custom-control-label" for="customCheck12">WiFi</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck13">
													<label class="custom-control-label" for="customCheck13">Laundry</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck14">
													<label class="custom-control-label" for="customCheck14">Sauna</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input name="features[]" type="checkbox" class="custom-control-input" id="customCheck15">
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
										<h4 class="mb30">Property media</h4>
									</div>
									<div class="col-lg-12">
										<ul class="mb0">
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="/images/property/fp1.jpg" alt="fp1.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="/images/property/fp2.jpg" alt="fp2.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="/images/property/fp3.jpg" alt="fp3.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
										</ul>
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
											<button type="submit" class="btn btn2 ">Create</button>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Floor Plans</h4>
										<button class="btn admore_btn mb30">Add More</button>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="planDsecription">Plan Description</label>
									    	<input type="text" class="form-control" id="planDsecription">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planBedrooms">Plan Bedrooms</label>
									    	<input type="text" class="form-control" id="planBedrooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planBathrooms">Plan Bathrooms</label>
									    	<input type="text" class="form-control" id="planBathrooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planPrice">Plan Price</label>
									    	<input type="text" class="form-control" id="planPrice">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planPostfix">Price Postfix</label>
									    	<input type="text" class="form-control" id="planPostfix">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planSize">Plan Size</label>
									    	<input type="text" class="form-control" id="planSize">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label>Plan Image</label>
											<div class="avatar-upload">
										        <div class="avatar-edit">
										            <input class="btn btn-thm" type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
										            <label for="imageUpload"></label>
										        </div>
										        <div class="avatar-preview">
										            <div id="imagePreview"></div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_textarea mt30-991">
										    <label for="planDescription">Plan Description</label>
										    <textarea class="form-control" id="planDescription" rows="7"></textarea>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div>
								</div>
							</div> --}}
						  </form>
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