@extends('layouts.dashboard')

@section('content')
<div class="col-lg-4 col-xl-4 mb10">
    <div class="breadcrumb_content style2 mb30-991">
        <h2 class="breadcrumb_title">My Properties</h2>
        <p>Total Listings: {{$listings->total()}} </p>

    </div>
</div>
<div class="col-lg-8 col-xl-8">
    <div class="candidate_revew_select style2 text-right mb30-991">
        <ul class="mb0">
            <li class="list-inline-item">
                <div class="candidate_revew_search_box course fn-520">
                    <form class="form-inline my-2">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                    </form>
                </div>
            </li>
            <li class="list-inline-item">
                <select class="selectpicker show-tick">
                    <option>Featured First</option>
                    <option>Recent</option>
                    <option>Old Review</option>
                </select>
            </li>
        </ul>
    </div>
</div>
<div class="col-lg-12">
    <div class="my_dashboard_review mb40">
        <div class="property_table">
            <div class="table-responsive mt0">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Listing Title</th>
                            <th scope="col">Date created</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listings as $listing)
                            
                        <tr>
                            <th scope="row">
                                <div class="feat_property list favorite_page style2">
                                    <div class="thumb">
                                        
                                        <img class="img-whp" src="/uploads/{{$listing->images[0]->image}}" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item dn"></li>
                                                @if ($listing->offer=="sale")
                                                <li class="list-inline-item"><a href="#">For Sale</a></li>
                                                @else
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                @endif
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4>{{$listing->title}}</h4>
                                            <p><span class="flaticon-placeholder"></span>{{$listing->address}}</p>
                                            @if ($listing->offer=="sale")
                                            <a class="fp_price text-thm" href="#">${{number_format($listing->price)}}</a>
                                            @else
                                            <a class="fp_price text-thm" href="#">${{number_format($listing->price)}}<small>/mo</small></a>
                                            @endif
                                          
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>{{$listing->created_at->format('m/d/Y')}}</td>
                            <td><span class="status_tag badge">{{$listing->status}}</span></td>
                            <td>{{$listing->price}}</td>
                            <td>
                                <ul class="view_edit_delete_list mb0">
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="/listings/{{$listing->id}}/edit"><span class="flaticon-edit"></span></a></li>

                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <form  method="POST" action="/listings/{{$listing->id}}">
                                        @csrf
                                        @method('DELETE')
                                    <a href="/listings/{{$listing->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-garbage"></span></a>
                                    
                                      </form>
                                    </li>
                             
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                
                    </tbody>
                </table>
            </div>
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
@endsection