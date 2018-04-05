<?php

use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return User::with('person')->find($request->user()->id);
    $user = $request->user();
    return $user->person;
});

Route::group(['middleware' => 'auth:api'], function () {
  Route::get('/jobs', 'Api\JobPostApiController@index');
  Route::get('/jobs/{job}', 'Api\JobPostApiController@show');
  Route::post('/jobs', 'Api\JobPostApiController@store');
  Route::put('/jobs/{job}', 'Api\JobPostApiController@update');
  Route::delete('/jobs/{job}', 'Api\JobPostApiController@destroy');
});
Route::get('/users', function () {
  return User::all();
});
