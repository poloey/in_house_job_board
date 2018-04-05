<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Person;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'gender' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $slug = str_slug($data['name']);
        $latestSlug = Person::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->limit(1)
                        ->pluck('slug');
        // return ['slug' => $latestSlug];
        if (count($latestSlug) != 0) {
          $pieces = explode('-', $latestSlug);
          $number = intval( end($pieces) );
          $slug = $slug . '-' . ($number + 1);
        }
        $avatar = 'public/defaults/avatars/female.png';
        if($data['gender']) {
            $avatar = 'public/defaults/avatars/male.png';
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'api_token' => str_random(60)
        ]);
        $user->person()->create([
          'slug' => $slug,
          'gender' => $data['gender'],
          'avatar' => $avatar
        ]);
        $hr = Role::where('name', 'hr')->first();
        $user->attachRole($hr);
        // $user->roles()->attach(4);
        return $user;
    }
}
