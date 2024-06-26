@extends('layouts.dashboard')

@section('content')
<div class="col-lg-4 col-xl-4 mb10">
    <div class="breadcrumb_content style2 mb30-991">
        <h2 class="breadcrumb_title">All Users</h2>
    </div>
</div>

<div class="col-lg-12">
    <div class="my_dashboard_review mb40">
        <div class="col-lg-12">
            <div class="savesearched_table">
                <div class="table-responsive mt0">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                
                            <tr>
                                <td>{{$user->id}}</td>
                                <th class="title" scope="row">{{$user->name}}</th>
                                <td class="para">{{$user->email}}</td>
                                <td>@if($user->roles[0]->title=='Admin') Admin @elseif($user->roles[0]->title=='Agent') Agent @else User @endif</td>
                                <td>{{date('m/d/Y', strtotime($user->updated_at))}}</td>
                                <td>
                                    <ul class="view_edit_delete_list mb0">
                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="/users/edit/{{$user->id}}"><span class="flaticon-edit"></span></a></li>
                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                                         <form method="POST" action="/users/{{$user->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/users/{{$user->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-garbage"></span></a>
                                        </form>
                                        </li>
                                    </ul>
                                </td>
                          
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-lg-12 mt20">
                        <div class="mbp_pagination">
                            <ul class="page_navigation">
                                <!-- Previous Page Link -->
                                @if ($users->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> 
                                            <span class="flaticon-left-arrow"></span> Prev
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $users->previousPageUrl() }}" tabindex="-1" aria-disabled="true"> 
                                            <span class="flaticon-left-arrow"></span> Prev
                                        </a>
                                    </li>
                                @endif
                
                                <!-- Pagination Elements -->
                                @foreach ($paginationUrls as $page => $url)
                                    @if ($page == $users->currentPage())
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="{{ $url }}">{{ $page }} <span class="sr-only">(current)</span></a>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                
                                <!-- Next Page Link -->
                                @if ($users->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $users->nextPageUrl() }}">
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
</div>
</div>

@endsection