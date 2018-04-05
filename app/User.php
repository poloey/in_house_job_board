<?php

namespace App;

use App\Course;
use App\JobPost;
use App\Keyword;
use App\Person;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];
    public function person(){
      return $this->hasOne(Person::class);
    }
    public function jobPosts()
    {
      return $this->hasMany(JobPost::class);
    }
    public function courses(){
      return $this->hasMany(Course::class);
    }
    public function keywords(){
      return $this->belongsToMany(Keyword::class, 'user_keyword');
    }
}
