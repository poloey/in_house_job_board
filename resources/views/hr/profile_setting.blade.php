@extends('layouts.dashboard.master')
@section('content')
    <div class="row">
      <div class="col-sm-12 right_content">
        <div class="setting">
          {{-- <avatar avatar_url={{$person->avatar_url}}></avatar> --}}
          <hr>
          <div class="user_update_form">
            <h2 class="title">Update User Data</h2>
             @if (Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <p>{!! session('message') !!}</p>
                </div>
             @endif
            <form action="{{url('update_user')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input value="{{$person->first_name}}" type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input value="{{$person->last_name}}" type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="about_me">About Me</label>
                    <textarea name="about_me" class="form-control" id="about_me" placeholder="About Me">{{$person->about_me}}</textarea>
                </div>
              <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" class="form-control" id="gender">
                      <option value="0" {{ $person->gender == 0 ? 'selected' : '' }} >Female</option>
                      <option value="1" {{ $person->gender == 1 ? 'selected' : '' }} >Male</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="city">City</label>
                  <input value="{{$person->city}}" type="text" name="city" class="form-control" id="city" placeholder="City">
              </div>
              <div class="form-group">
                  <label for="country">Country</label>
                  <input value="{{$person->country}}" type="text" name="country" class="form-control" id="country" placeholder="Country">
              </div>
              <div class="form-group">
                  <label for="address">Address</label>
                  <input value="{{$person->address}}" type="text" name="address" class="form-control" id="address" placeholder="Address">
              </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update user">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
