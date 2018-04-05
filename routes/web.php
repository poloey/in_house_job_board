<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    // routes
    Route::get('/', 'HrController@index');

    //jobs
    Route::get('/job-board', 'JobController@index');
    Route::post('/job-board', 'JobController@store');
    Route::get('/job-board/single-job/{job}', 'JobController@show');
    Route::get('/job-board/create', 'JobController@create');
    Route::get('/job-board/single-job/{job}/edit', 'JobController@edit');
    Route::put('/job-board/single-job/{job}/', 'JobController@update');
    Route::delete('/job-board/{job}', 'JobController@destroy');

    //knowledgeBase
    Route::get('knowledge-base', 'KnowledgeBaseController@index');

    //StudentDirectory
    Route::get('student-directory', 'StudentDirectoryController@index');

    //demo
    Route::get('/job-board/manage-candidate', 'JobController@manage_candidate');

  //UtilityController
  Route::get('/profile', 'UtilityController@profile');
  Route::get('/profile-setting', 'UtilityController@profile_setting');
  Route::post('/update_user', 'UtilityController@update_user');
  //ajax helper route
  Route::post('/upload_user_avatar', 'UtilityController@upload_user_avatar');

  }
);

Route::get('/test', function () {
  return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
