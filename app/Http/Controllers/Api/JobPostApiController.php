<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\JobPost;
use App\Traits\ControllerFunctionsTrait;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobPostApiController extends ApiController
{
  use ControllerFunctionsTrait;
  public function index()
  {
    $userId = Auth::guard('api')->id();
    // $jobs = JobPost::with('user', 'user.person')->where('user_id', Auth::guard('api')->id())->get();
    $jobs = JobPost::where('user_id', $userId)->latestFirst()->get();
    $jobs->load('user', 'user.person', 'keywords');
    return $this->showAll($jobs, 200);
  }
  public function show(JobPost $job)
  {
    $job->load('user', 'user.person', 'keywords');
    return $this->showOne($job, 200);
  }

  public function store(Request $request)
  {
    $this->validate(request(), [
        'title' => 'required',
        'location' => 'required',
        'vacancy' => 'required',
        'experience' => 'required',
        'description' => 'required',
        'deadline' => 'required',
        'keywords' => 'required'
      ]);
      $userId = Auth::guard('api')->id();
      $slug = str_slug(request('title'));
      $latestSlug = JobPost::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                      ->latest('id')
                      ->limit(1)
                      ->pluck('slug');
      // return ['slug' => $latestSlug];
      if (count($latestSlug) != 0) {
        $pieces = explode('-', $latestSlug);
        $number = intval( end($pieces) );
        $slug = $slug . '-' . ($number + 1);
      }
    $job = JobPost::create([
        'title' => request('title'),
        'user_id' => $userId,
        'slug' => $slug,
        'short_description' => request('short_description'),
        'location' => request('location'),
        'vacancy' => request('vacancy'),
        'experience' => request('experience'),
        'description' => request('description'),
        'deadline' => Carbon::parse(request('deadline'))
      ]);
     $cleanKeywords = $this->cleanKeywords(trim(request('keywords')));
     $job->keywords()->attach($cleanKeywords);
     $job->load('user', 'user.person', 'keywords');
     return $this->showOne($job, 201);
  }
  public function update(Request $request, JobPost $job)
  {
    $this->authorize('job_post_manipulation', $job);
    $this->validate(request(), [
        'title' => 'required',
        'location' => 'required',
        'vacancy' => 'required',
        'experience' => 'required',
        'description' => 'required',
        'deadline' => 'required',
        'keywords' => 'required'
      ]);
    $job->update([
        'title' => request('title'),
        'short_description' => request('short_description'),
        'location' => request('location'),
        'vacancy' => request('vacancy'),
        'experience' => request('experience'),
        'description' => request('description'),
        'deadline' => Carbon::parse(request('deadline'))
      ]);
       //detach old labels
       $old_keywords = $job->keywords->pluck('id')->all();
       $job->keywords()->detach($old_keywords);
       //label creation
       $cleanKeywords = $this->cleanKeywords(trim(request('keywords')));
       $job->keywords()->attach($cleanKeywords);
       // session()->flash('message', 'Update job details successfully');
       // $job->load('user', 'user.person', 'keywords');
       // $job->load('user', 'user.person', ['keywords' => function ($query) {
       //    $query->select('name');
       // }]);
       $job->load(['user', 'user.person', 'keywords' => function ($query) {
          $query->select('name');
       }]);
       return $this->showOne($job, 200);

  }

  public function destroy(JobPost $job)
  {
    $job->delete();
    return $this->showOne($job, 200);
  }

}
