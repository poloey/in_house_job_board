<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UtilityController extends Controller
{
  /**
   * user profile setting
   * @return view
   */
  public function profile(){
    $user = auth()->user();
    $person = $user->person;
    return view('hr.profile', compact('user', 'person'));
  }
  public function profile_setting(){
    $user = auth()->user();
    $person = $user->person;
    return view('hr.profile_setting', compact('user', 'person'));
  }
  /**
   * this function will upload user avatar
   * @return view
   */
  public function upload_user_avatar(){
    $data = request('avatar');
    list($type, $data) = explode(';', $data);
    list(, $data) = explode(',', $data);
    $data = base64_decode($data);
    $imageName = time().'.png';
    $path = storage_path('app/public/avatars/');
    if(!file_exists($path)) {
      mkdir($path, 0755, true);
    }
    file_put_contents($path . $imageName, $data);
    $avatar ='avatars/' . $imageName;
    $person = Person::where('user_id', auth()->id())->firstOrFail();
    $personImage = storage_path('app/public/' . $person->avatar);
    if (strpos($person->avatar, 'male.png') == false && file_exists($personImage)) {
      unlink($personImage);
    }
    $person->update(['avatar' => $avatar]);
      return $personImage;
  }
  /**
   * function for update user
   */
  public function update_user(){
    Person::where('user_id', auth()->id())
      ->update([
          'first_name' => request('first_name'),
          'last_name' => request('last_name'),
          'about_me' => request('about_me'),
          'gender' => request('gender'),
          'city' => request('city'),
          'country' => request('country'),
          'address' => request('address')
        ]);
      session()->flash('message', 'update user data successfully');
      return back();
  }
}
