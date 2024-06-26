@extends('layouts.main')

@section('content')
	<div class="single_page_listing_style">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
						<div class="col-lg-12 p0">
							<div class="spls_style_one pr1 1px">
						
								<a class="popup-img" href="{{ isset($listing->images[0]) ? '/uploads/' . $listing->images[0]->image : 'images/property/ls1.jpg' }}">
									<img class="img-fluid w100" src="/uploads/{{$listing->images[0]->image}}" alt="ls1.jpg">
                                </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
						<div class="col-sm-6 col-lg-6 p0">
                            <div class="spls_style_one">
                                <a class="popup-img" href="{{ isset($listing->images[1]) ? '/uploads/' . $listing->images[1]->image : 'images/property/ls2.jpg' }}">
                                    <img class="img-fluid w100" src="{{ isset($listing->images[1]) ? '/uploads/' . $listing->images[1]->image : 'images/property/ls2.jpg' }}" alt="{{ isset($listing->images[1]) ? 'Property Image' : 'Default Image' }}">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 p0">
                            <div class="spls_style_one">
                                <a class="popup-img" href="{{ isset($listing->images[2]) ? '/uploads/' . $listing->images[2]->image : '/images/property/ls2.jpg' }}">
                                    <img class="img-fluid w100" src="{{ isset($listing->images[2]) ? '/uploads/' . $listing->images[2]->image : 'i/mages/property/ls2.jpg' }}" alt="{{ isset($listing->images[2]) ? 'Property Image' : 'Default Image' }}">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 p0">
                            <div class="spls_style_one">
                                <a class="popup-img" href="{{ isset($listing->images[3]) ? '/uploads/' . $listing->images[3]->image : '/images/property/ls3.jpg' }}">
                                    <img class="img-fluid w100" src="{{ isset($listing->images[3]) ? '/uploads/' . $listing->images[3]->image : '/images/property/ls3.jpg' }}" alt="{{ isset($listing->images[3]) ? 'Property Image' : 'Default Image' }}">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 p0">
                            <div class="spls_style_one">
                                <a class="popup-img" href="{{ isset($listing->images[4]) ? '/uploads/' . $listing->images[4]->image : '/images/property/ls4.jpg' }}">
                                    <img class="img-fluid w100" src="{{ isset($listing->images[4]) ? '/uploads/' . $listing->images[4]->image : '/images/property/ls4.jpg' }}" alt="{{ isset($listing->images[4]) ? 'Property Image' : 'Default Image' }}">
                                </a>
                            </div>
                        </div>
	
					</div>
				</div>
			</div>
		</div>
	</div>
  
	<section class="p0">
		<div class="container">
			<div class="row listing_single_row">
				<div class="col-sm-6 col-lg-7 col-xl-8">
					<div class="single_property_title">
						<button type="button" class="btn view-photos-btn" data-toggle="modal" data-target="#imageModal">
							<span class="flaticon-photo-camera"></span> View Photos
						</button>
				

					</div>
				</div>
				<div class="col-sm-6 col-lg-5 col-xl-4">
					<div class="single_property_social_share">
						<div class="spss style2 mt10 text-right tal-400">
							<ul class="mb0">
								<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
					
								@if (Route::has('login'))
								@auth
								 @if ($user->savedListings->contains($listing->id))
								  <li class="favorite list-inline-item "><a href="#"><span class="flaticon-heart"></span></a></li>
			
								  @else
								  <li class="list-inline-item">
								  <form  method="POST" action="/favorites/{{$listing->id}}">
									@csrf
								   <a href="#" onclick="event.preventDefault(); toggleFavorite({{ $listing->id }}, this);"><span class="flaticon-heart"></span></a>
								  </form>
								  </li>
								 @endif
								
								 @else
								 <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span> </a></li>
								@endauth
								@endif
								<li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<div class="modal image-modal" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
		<div class="modal-dialog image-modal-dialog black-gradient " role="document">
			<div class="modal-content transparent image-modal-content ">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					
						<div class="carousel-inner">
			
							<div class="carousel-item active">
								<img src="/uploads/{{$listing->images[0]->image}}"  class="d-block w-100" alt="First slide">
							</div>
							@foreach ($listing->images->skip(1) as $image)

							<div class="carousel-item">
								<img src="/uploads/{{$image->image}}"  class="d-block w-100" alt=" slide">
							</div>
								
							@endforeach
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div> 
				</div> 
			</div>
		</div>
	</div>



  
	  

	<!-- Agent Single Grid View -->
	<section class="our-agent-single bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 mt50">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description2 mt30-767 mb30-767">
								<div class="single_property_title">
									<h2>{{$listing->title}}</h2>
									<p>{{$listing->address}}</p>
								</div>
								<div class="single_property_social_share style2">
									<div class="price">
										@if ($listing->offer=='sale')
										<h2>${{$listing->price}}</h2>
										@else
										<h2>${{$listing->price}}<small>/mo</small></h2>
										@endif
									
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="listing_single_description style2">
								<div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><a href="#">{{$listing->type}}</a></li>
										<li class="list-inline-item"><a href="#">Beds: {{$listing->bedrooms}}</a></li>
										<li class="list-inline-item"><a href="#">Baths: {{$listing->bathrooms}}</a></li>
										<li class="list-inline-item"><a href="#">Sq Ft: {{$listing->squarefootage}}</a></li>
									</ul>
								</div>
								<h4 class="mb30">Description</h4>
						    	<p class="mb25"> {{$listing->description}}</p>
						    	<p class="gpara second_para  mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
							
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Property Details</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property ID :</p></li>
											<li><p>Price </p></li>
											<li><p>Property Size :</p></li>
											<li><p>Date Posted :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$listing->id}}</span></p></li>
											<li><p><span>${{$listing->price}}</span></p></li>
											<li><p><span>{{$listing->squarefootage}} Sq Ft</span></p></li>
											<li><p><span>{{$listing->created_at->format('m/d/Y')}}</span></p></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Bedrooms :</p></li>
											<li><p>Bathrooms :</p></li>
										
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$listing->bedrooms}}</span></p></li>
											<li><p><span>{{$listing->bathrooms}}</span></p></li>
											
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property Type :</p></li>
											<li><p>Property Offer :</p></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$listing->type}}</span></p></li>
											<li><p><span>For {{ucfirst($listing->offer) }}</span></p></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb10">Features</h4>
									</div>
									@foreach ($featureChunks as $chunk)
									<div class="col-sm-6 col-md-6 col-lg-4">
										<ul class="order_list list-inline-item">
											@foreach ($chunk as $feature)
												<li><a href="#"><span class="flaticon-tick"></span>{{ $feature }}</a></li>
											@endforeach
										</ul>
									</div>
								@endforeach
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Location <small class="float-right">{{$listing->address}}</small></h4>
								<div class="property_video p0">
									<div class="thumb">
										<div class="h400" id="map-canvas"></div>
										<div class="overlay_icon">
											<a href="#"><img class="map_img_icon" src="/images/header-logo.png" alt="header-logo.png"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Floor plans</h4>
								<div class="faq_according style2">
									<div class="accordion" id="accordionExample">
									  	<div class="card floor_plan">
										    <div class="card-header" id="headingOne">
										    	<h2 class="mb-0">
										        	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										        		<ul class="mb0">
										        			<li class="list-inline-item">First Floor</li>
										        			<li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
										        			<li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
										        			<li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
										        			<li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
										        		</ul>
										        	</button>
										   		</h2>
										    </div>
										    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
											    <div class="card-body text-center">
											    	<img class="img-fluid" src="/images/floorplan.jpg" alt="floor_plan.png">
									        		<p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
											    </div>
										    </div>
									    </div>
									    <div class="card floor_plan">
									    	<div class="card-header active" id="headingTwo">
									    		<h2 class="mb-0">
									        		<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										        		<ul class="mb0">
										        			<li class="list-inline-item"> Floor</li>
										        			<li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
										        			<li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
										        			<li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
										        			<li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
										        		</ul>
										        	</button>
									    		</h2>
									    	</div>
									    	<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
									      		<div class="card-body text-center">
											    	<img class="img-fluid"  src="/images/floor_plan.png"  alt="floor_plan.png">
									        		<p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
									     		 </div>
									    	</div>
									    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="shop_single_tab_content style2 mt30">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
									    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
									</li>
									<li class="nav-item">
									    <a class="nav-link" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Virtual Tour</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent2">
									<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="/images/video.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="listing" role="tabpanel" aria-labelledby="listing-tab">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="/images/video.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=Jrs5yji5bb0"><span class="flaticon-play"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-lg-12">
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<ul class="total_reivew_view">
										<li class="list-inline-item sub_titles">896 Reviews</li>
										<li class="list-inline-item">
											<ul class="star_list">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</li>
										<li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
										<li class="list-inline-item write_review">Write a Review</li>
									</ul>
									<div class="mbp_first media">
										<img src="/images/testimonial/1.png" class="mr-3" alt="1.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Diana Cooper
												<div class="sspd_review dif">
													<ul class="ml10">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"></li>
													</ul>
												</div>
									    	</h4>
									    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
									    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
										</div>
									</div>
									<div class="custom_hr"></div>
									<div class="mbp_first media">
										<img src="/images/testimonial/2.png" class="mr-3" alt="2.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Ali Tufan
												<div class="sspd_review dif">
													<ul class="ml10">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"></li>
													</ul>
												</div>
									    	</h4>
									    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
									    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<div class="mbp_comment_form style2">
										<h4>Write a Review</h4>
										<ul class="sspd_review">
											<li class="list-inline-item">
												<ul class="mb0">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</li>
											<li class="list-inline-item review_rating_para">Your Rating & Review</li>
										</ul>
										<form class="comments_form">
											<div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
											</div>
											<div class="form-group">
											    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
											</div>
											<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					
			
					</div>
				</div>
				<div class="col-lg-4 col-xl-4 mt50">
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<h4 class="mb25">Listed By</h4>
								<div class="media">
							
									<div class="media-body">
								    	<h5 class="mt-0 mb0">{{$listing->user->name}}</h5>
								    	<p class="mb0">(123)456-7890</p>
								    	<p class="mb0">{{$listing->user->email}}</p>
								    
								  	</div>
								</div>
							</div>
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
								    </div>
								</li>
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Hello, I'm interested in..."></textarea>
		                            </div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" class="btn btn-block btn-thm">Search</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="terms_condition_widget">
						<h4 class="title">Featured Properties</h4>
						<div class="sidebar_feature_property_slider">
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="/images/property/dr2.jpg" alt="fp1.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">3,000<small>/mo</small></a>
											<h4 class="posr color-white">Renovated Apartment</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="/images/property/alr-1.jpg" alt="fp2.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$3,500<small>/mo</small></a>
											<h4 class="posr color-white">Apartment With City View</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="/images/property/villa.jpg" alt="fp3.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Sale</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$500,000</a>
											<h4 class="posr color-white">Villa </h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="/images/property/orange-house.jpg" alt="fp4.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Sale</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">$349,000</a>
											<h4 class="posr color-white">2 Story House</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feat_property home7 agent">
									<div class="thumb">
										<img class="img-whp" src="/images/property/condo1.jpg" alt="fp5.jpg">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">For Rent</a></li>
												<li class="list-inline-item"><a href="#">Featured</a></li>
											</ul>
											<a class="fp_price" href="#">4,000<small>/mo</small></a>
											<h4 class="posr color-white">Condo near Beach</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="terms_condition_widget">
						<h4 class="title">Categories Property</h4>
						<div class="widget_list">
							<ul class="list_details">
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment </a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo </a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House </a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa</a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House </a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

@endsection
