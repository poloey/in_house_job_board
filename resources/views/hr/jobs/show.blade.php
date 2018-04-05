@extends('layouts.dashboard.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    <h1 class="text-center">{{ $job->title }}  <a href='{{url("/job-board/single-job/{$job->slug}/edit")}}'> <i class="fa fa-pencil"></i> Edit</a></h1>
    <hr>
    @if($job->short_description)
      <p><strong>Key Description:</strong> {{$job->short_description}}</p>
    @endif
    <p><strong>Job Description:</strong></p>
    {!! $job->description !!}
    <p><strong>Deadline:</strong> {{$job->deadline}}</p>
    <p><strong>Job Status:</strong> {{ucfirst($job->job_status)}}</p>
    <p><strong>Experience:</strong> {{$job->experience}}</p>
    <p><strong>Vacancy:</strong> {{$job->vacancy}}</p>
    <p><strong>Required skills keywords for the job:</strong>
      @foreach($job->keywords as $keyword)
        <span class="label label-primary">{{$keyword->name}}</span>
      @endforeach
    </p>
  </div>
</div>
@endsection
