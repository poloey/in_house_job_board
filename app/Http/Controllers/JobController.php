<?php

namespace App\Http\Controllers;

use App\JobPost;
use App\Keyword;
use App\Traits\ControllerFunctionsTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
  /**
   * showing his/her created job board to the HR personnel
   * @return view
   */
  use ControllerFunctionsTrait;
  public function index()
  {
    $user = auth()->user();
    $jobs = JobPost::where('user_id', $user->id)->latestFirst()->paginate(2);
    $name = $user->name;
    if ($user->person->first_name && $user->person->last_name) {
      $name = "{$user->person->first_name} {$user->person->last_name}";
    }
    return view('hr.jobs.index', compact('jobs', 'name'));
  }

  public function show(JobPost $job)
  {
    $this->authorize('job_post_manipulation', $job);
    return view('hr.jobs.show', compact('job'));
  }

  public function create()
  {
    return view('hr.jobs.create');
  }

  public function destroy(JobPost $job)
  {
    $job->delete();
    return response()->json(['deleted successfully']);
  }

  public function store()
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
        'user_id' => auth()->id(),
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
      return redirect(url("job-board/single-job/{$job->slug}"));
  }

  public function manage_candidate()
  {
    return "
      <a href='/'>Manage Candidate</a>
     ";
  }
  public function edit(JobPost $job)
  {
    $this->authorize('job_post_manipulation', $job);
    return view('hr.jobs.edit', compact('job'));
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
        return redirect(url("job-board/single-job/{$job->slug}"));
  }



}
