@extends('layouts.main')

@section('content')
	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">Find Your Dream Home</h2>
							<p class="fz18 color-white">From as low as $10 per day with limited time offer discounts.</p>
						</div>
						<div class="home_adv_srch_opt">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
									  {{-- desktop search --}}
									   <form action="/listings/results" method="GET">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select name="type" type="text"  class="selectpicker w100 show-tick">
															<option value="" selected>Property Type</option>
															<option>Apartment</option>
															<option>Bungalow</option>
															<option>Condo</option>
															<option>House</option>
														
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input name="address" type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>

											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" onchange="updatePriceRange(this.value)">
															<option value="">Select Price Range</option>
															<option value="0-99999">0-$99,999</option>
															<option value="100000-200000">$100,000-$200,000</option>
															<option value="200001-300000">$200,001-$300,000</option>
															<option value="300001-400000">$300,001-$400,000</option>
															<option value="400001-500000">$400,001-$500,000</option>
															<option value="500001-600000">$500,001-$600,000</option>
															<option value="600001-700000">$600,001-$700,000</option>
															<option value="700001-800000">$700,001-$800,000</option>
															<option value="800001-900000">$800,001-$900,000</option>
															<option value="900001-1000000">$900,001-$1,000,000</option>
															<option value="1000001-9999999">$1,000,001 and above</option>
														</select>
													</div>
												</div>

												<input type="hidden" name="min_price" id="min_price">
												<input type="hidden" name="max_price" id="max_price">
											</li>
										
											
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									   </form>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>Property Type</option>
															<option>Apartment</option>
															<option>Bungalow</option>
															<option>Condo</option>
															<option>House</option>
													
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location">
											    	<label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs2" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" placeholder="$52,239"> 
															<input type="text" class="amount2" placeholder="$985,14">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
										
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
			    	<div class="mouse_scroll">
	        		<div class="icon">
			    		<h4>Scroll Down</h4>
			    		<p>to discover more</p>
	        		</div>
	        		<div class="thumb">
	        			<img src="images/resource/mouse.png" alt="mouse.png">
	        		</div>
			    	</div>
			    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						<div class="item">
							<a href="page-listing-single-v1.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/villa.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v2.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/view.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v3.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/studio.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v1.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/white-house.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v2.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/condo1.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v3.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/alr-1.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v1.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/lr-1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
												
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v2.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/dr1.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v3.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/orange-house.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v1.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/bed1.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
										
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v2.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/view2.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Rent</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="page-listing-single-v3.html">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="images/property/dr3.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><span>For Sale</span></li>
											</ul>
											<ul class="icon mb0">
												<li class="list-inline-item"><span class="flaticon-transfer-1 text-white"></span></li>
												<li class="list-inline-item"><span class="flaticon-heart text-white"></span></li>
											</ul>
											<span class="fp_price">$13,000<small>/mo</small></span>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">Apartment</p>
											<h4>Renovated Apartment</h4>
											<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
											<ul class="prop_details mb0">
												<li class="list-inline-item"><span>Beds: 4</span></li>
												<li class="list-inline-item"><span>Baths: 2</span></li>
												<li class="list-inline-item"><span>Sq Ft: 5280</span></li>
											</ul>
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><span href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></span></li>
												<li class="list-inline-item"><span href="#">Ali Tufan</span></li>
											</ul>
											<div class="fp_pdate float-right">4 years ago</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Find Properties in These Cities</h2>
						<p>Explore a wide range of properties in some of the most popular cities.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/background/pc1.jpg" alt="pc1.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Miami</h4>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/background/pc2.jpg" alt="pc2.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Los Angeles</h4>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/background/pc3.jpg" alt="pc3.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>New York</h4>
							
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/background/pc4.jpg" alt="pc4.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Florida</h4>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="color-white">Testimonials</h2>
						<p class="color-white">Here could be a nice sub title</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider">
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/home/t1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Working with this real estate team has been an incredible experience. They are knowledgeable, professional, and truly care about their clients' needs.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/home/t2.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>John Miller</h4>
									<p>Real Estate Agent</p>
									<p class="mt25">I've been in the industry for over 10 years, and this is by far the best team I've worked with. They make the process seamless and enjoyable for our clients.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/home/t3.jpg"  alt="1.jpg">
								</div>
								<div class="details">
									<h4>Riley Smith</h4>
									<p>Property Consultant</p>
									<p class="mt25">The attention to detail and level of service provided by this team is unmatched. They go above and beyond to ensure client satisfaction.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/home/t4.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Matthew Reeves</h4>
									<p>Relationship Manager</p>
									<p class="mt25">From the initial consultation to the final closing, the support and expertise offered by this team made all the difference. Highly recommended!.</p>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Partners</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/p1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/p2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/p3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/p4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/p5.png" alt="5.png">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection