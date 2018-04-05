@extends('layouts.dashboard.master')
@section('content')
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 text-center">
              <img class="img-circle" src="{{$person->avatar_url}}" >
              <p>{{$user->name}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <h2>Personal Details <a href="{{url('/profile-setting')}}"> <i class="fa fa-pencil" aria-hidden="true" class="btn btn-link"></i> Edit</a></h2>
              <hr>
              @if($person->first_name)
                <p><strong>First Name:</strong> {{$person->first_name}}</p>
              @endif
              @if($person->last_name)
                <p><strong>Last Name:</strong> {{$person->last_name}}</p>
              @endif
              @if($person->company)
                <p><strong>Company Name:</strong> {{$person->company}}</p>
              @endif
              @if($person->about_me)
                <p><strong>About:</strong> {{$person->about_me}}</p>
              @endif
              @if($person->city)
                <p><strong>City:</strong> {{$person->city}}</p>
              @endif
              @if($person->country)
                <p><strong>Country:</strong> {{$person->country}}</p>
              @endif
              @if($person->address)
                <p><strong>Address:</strong> {{$person->address}}</p>
              @endif

            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <h2>Company Details <a href="#"><i class="fa fa-pencil"></i> Edit</a></h2>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
@endsection
