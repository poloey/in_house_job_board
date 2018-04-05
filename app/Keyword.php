<?php

namespace App;

use App\JobPost;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
  protected $guarded = [];
  protected $hidden = ['pivot'];
  public function jobPosts(){
    return $this->belongsToMany(JobPost::class, 'job_post_keyword');
  }
}
