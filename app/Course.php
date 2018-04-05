<?php

namespace App;

use App\Keyword;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $guarded = [];
  public function user(){
    return $this->belongsTo(User::class);
  }
  public function keywords(){
    return $this->belongsToMany(Keyword::class, 'course_keyword');
  }
}
