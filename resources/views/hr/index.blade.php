@extends('layouts.dashboard.master')
@section('content')
  <div class="panel panel-info">
    <div class="panel-body">
      <h1>Welcome to job Collaborative Engine</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, natus. </p>
    </div>
  </div>
  <div class="boxes">
    <a href="{{url('job-board')}}" class="box box-text">
      <div class="box__left bg__color__teal">
        <i class="fa fa-briefcase"></i>
      </div>
      <div class="box__right bg__color__green">
        <h1>Job Board</h1>
      </div>
    </a>

    <a href="{{url('student-directory')}}" class="box box-text">
      <div class="box__left bg__color__brown">
        <i class="fa fa-graduation-cap"></i>
      </div>
      <div class="box__right bg__color__blue">
        <h1>Student Directory</h1>
      </div>
    </a>
    <a href="{{url('knowledge-base')}}" class="box box-text">
      <div class="box__left bg__color__green">
        <i class="fa fa-book"></i>
      </div>
      <div class="box__right bg__color__teal">
        <h1>Knowledge Base</h1>
      </div>
    </a>
  </div>
@endsection
