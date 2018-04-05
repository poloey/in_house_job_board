@extends('layouts.dashboard.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h1>Job posted by {{ ucfirst($name)}}</h1>
  </div>
  <div class="panel-body">
    @if(count($jobs))
      <div class="jobs">
        @foreach($jobs as $job)
          <div class="job">
            <div class="job__body">
              <h2><a href='{{url("job-board/single-job/{$job->slug}")}}'>{{$job->title}}</a></h2>
              <p>{{$job->short_description}}</p>
              <p><strong>Job Status:</strong> {{ucfirst($job->job_status)}}</p>
              <p><strong>Deadline:</strong> {{$job->deadline}}</p>
              <p><strong>Experience:</strong> {{$job->experience}}</p>
              <p><strong>Vacancy:</strong> {{$job->vacancy}}</p>
            </div>
            <div class="job__footer">
              <div>
                <a class="btn btn-primary" href='{{url("job-board/single-job/{$job->slug}")}}'>View</a>
              </div>
              <div class="text-right">
                <a href='{{url("/job-board/single-job/{$job->slug}/edit")}}' class="btn btn-info">Edit</a>
                <delete action_url='{{url("job-board/{$job->slug}") }}'></delete>
              </div>
            </div>
          </div>
        @endforeach
        {{ $jobs->links() }}
      </div>
    @else
    <p>
      You didn't post any job yet.<a class="btn btn-link" href="{{url('/job-board/create')}}">Post a Job Now!</a>
    </p>
    @endif
  </div>
</div>
@endsection
