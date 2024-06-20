@extends('layouts.dashboard')
@section('content')
<div class="col-lg-12 mb10">
    <div class="breadcrumb_content style2">
        <h2 class="breadcrumb_title">My Profile</h2>
        <p>We are glad to see you again!</p>
    </div>
</div>
<div class="col-lg-12">
    <div class="my_dashboard_review">
        <div class="row">
            <div class="col-xl-2">
                <h4>Profile Information</h4>
            </div>
            <div class="col-xl-10">
                <form method="POST" action="/users/{{$user->id}}">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleInput1">Name</label>
                            <input name="name" type="text" class="form-control" id="formGroupExampleInput1" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleEmail">Email</label>
                            <input name="email" type="email" class="form-control" id="formGroupExampleEmail" placeholder="creativelayers@gmail.com" value="{{$user->email}}">
                        </div>
                    </div>
               
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleInput5">Role</label>
                   
                            <select class="form-control" id="inputrole" name="role_id">
                              <option value="1" @if ($role == 1) selected @endif>Admin</option>
                              <option value="2" @if ($role == 2) selected @endif>Agent</option>
                              <option value="3" @if ($role == 3) selected @endif>User</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleInput8">Phone Number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput8">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleInput12">Company Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput12">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleInput13">Address</label>
                            <input type="text" class="form-control" id="formGroupExampleInput13">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleNewPass">New Password</label>
                            <input name="password" type="password" class="form-control" id="formGroupExampleNewPass">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="my_profile_setting_input form-group">
                            <label for="formGroupExampleConfPass">Confirm New Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="formGroupExampleConfPass">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="my_profile_setting_input mx-auto">
                            <button type="submit" class="btn btn2 ">Update Profile</button>
                        </div>
                    </div>
                   
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection