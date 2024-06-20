@extends('layouts.dashboard')

@section('content')
<div class="col-lg-4 col-xl-4 mb10">
    <div class="breadcrumb_content style2 mb30-991">
        <h2 class="breadcrumb_title">All Users</h2>
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
        </ul>
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

                                {{-- <td><a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a></td>
                                <td>
                                <form  method="POST" action="/users/{{$user->id}}">
                                  @csrf
                                  @method('DELETE')
                                  <a href="/users/{{$user->id}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="flaticon-garbage"></span></a>
                                </form>
                                </td>   --}}
                          
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection