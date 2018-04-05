<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Person extends Model
{
  protected $guarded = [];
  protected $appends = ['avatar_url'];
  public function getAvatarUrlAttribute() {
      return Storage::url($this->avatar);
  }
  public function user(){
    return $this->belongsTo(User::class);
  }
}
