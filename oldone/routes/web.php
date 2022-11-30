<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    // return view('lay.nav');
    return view('welcome');
});

Route::get('/all-jobs', function () {
    // return view('lay.nav');
    return view('font.job');
});

Route::get('/all-events', function () {
    // return view('lay.nav');
    return view('font.job');
});

Route::get('/all-trainers', function () {
    // return view('lay.nav');
    return view('font.job');
});

Route::get('/all-freelancers', function () {
    // return view('lay.nav');
    return view('font.job');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@profile');

Route::post('cover_avatar', 'UserController@update_cover_avatar');

Route::post('update_ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');

// Route::get('users/{id}', '');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});


// Job Post
Route::get('Jobs', 'JobController@getpage');
Route::post('job_post','JobController@uploadJob');
Route::post('Work_post','JobController@workPost');

// Profile
Route::get('profile/{id}', 'ProfileController@profile');

Route::post('user-website', 'ProfileController@website');

Route::post('social', 'ProfileController@social');

Route::post('cover', 'ProfileController@cover');


// Company
Route::get('companies','CompanyController@viewCompany');
Route::get('new-company','CompanyController@CrateCompany');

Route::post('CrateNewCompany','CompanyController@CrateNewCompany');

// Message
Route::get('messages','MessageController@messages');

// Settings 
// Route::get('profile/edit/{id}', 'ProfileController@edit');
Route::get('profile/edit/general/{id}', 'ProfileController@Genedit');
Route::post('change-name','ProfileController@change_name');
Route::post('change-password','ProfileController@ChangePassword');
Route::post('change-email','ProfileController@updateEmail'); 

Route::get('profile/edit/user/{id}', 'ProfileController@useredit');
Route::get('profile/edit/photo/{id}', 'ProfileController@photoUpdate');
// Photo Update
Route::post('cover_avatar', 'UserController@update_cover_avatar');
Route::post('update_ava','UserController@update_avatar');
// Route::get('profile/edit/{id}', 'ProfileController@edit');

