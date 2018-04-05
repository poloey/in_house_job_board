<?php

namespace App\Policies;

use App\JobPost;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPostPolicy
{
    use HandlesAuthorization;
    public function job_post_manipulation(User $user, JobPost $job)
    {
      return $user->id == $job->user_id;
    }
}
