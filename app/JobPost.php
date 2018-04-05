<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
  protected $guarded = [];
  public function user(){
    return $this->belongsTo(User::class);
  }
  public function keywords(){
    return $this->belongsToMany(Keyword::class, 'job_post_keyword');
  }
  public function scopeLatestFirst($query)
  {
    return $query->orderBy('created_at', 'desc');
  }
  public function getRouteKeyName()
  {
    return 'slug';
  }
  public function keywordsInString()
  {
     $keywords = $this->keywords->pluck('name')->all();
      return implode(', ', $keywords);
  }

}
