@extends('layouts.dashboard')
@section('content')

						<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">My Favorites</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
				
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
                                @foreach ($favorites as $listing)
								
								<div class="favorite_item_list">
									<div class="feat_property list favorite_page">
										
										<div class="thumb">
											
											<img class="img-whp" src="/uploads/{{$listing->images[0]->image}}" alt="fp1.jpg">
											
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item dn"></li>
													<li class="list-inline-item">>For Sale</a></li>
													@if ($listing->offer=="sale")
													<li class="list-inline-item"><a href="/listings/{{$listing->id}}">For Sale</a></li>
													@else
													<li class="list-inline-item"><a href="/listings/{{$listing->id}}">For Rent</a></li>
													@endif
												</ul>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<a href="/listings/{{$listing->id}}"><h4>{{$listing->title}}</h4></a>
												<p><span class="flaticon-placeholder"></span>{{$listing->address}}</p>
												@if ($listing->offer=="sale")
												<a class="fp_price text-thm" href="#">${{number_format($listing->price)}}</a>
												@else
												<a class="fp_price text-thm" href="#">${{number_format($listing->price)}}<small>/mo</small></a>
												@endif
											</div>
										</div>
						    			<ul class="view_edit_delete_list mb0 mt35">
						    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <form  method="POST" action="/favorites/{{$listing->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="/favorites/{{$listing->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-garbage"></span></a>
                                                
                                                  </form>
                                            </li>
						    			</ul>
									</div>
							
                                    @endforeach
							
					
									<div class="col-lg-12 mt20">
										<div class="mbp_pagination">
											<ul class="page_navigation">
												<!-- Previous Page Link -->
												@if ($favorites->onFirstPage())
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
															<span class="flaticon-left-arrow"></span> Prev
														</a>
													</li>
												@else
													<li class="page-item">
														<a class="page-link" href="{{ $favorites->previousPageUrl() }}" tabindex="-1" aria-disabled="true"> 
															<span class="flaticon-left-arrow"></span> Prev
														</a>
													</li>
												@endif
							
												<!-- Pagination Elements -->
												@foreach ($paginationUrls as $page => $url)
													@if ($page == $favorites->currentPage())
														<li class="page-item active" aria-current="page">
															<a class="page-link" href="{{ $url }}">{{ $page }} <span class="sr-only">(current)</span></a>
														</li>
													@else
														<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
													@endif
												@endforeach
							
												<!-- Next Page Link -->
												@if ($favorites->hasMorePages())
													<li class="page-item">
														<a class="page-link" href="{{ $favorites->nextPageUrl() }}">
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
					<div class="row mt10">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p>© 2020 Find House. Made with love.</p>
							</div>
						</div>
					</div>
	

@endsection