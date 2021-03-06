<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return $request->user();
});


Route::group([
  'middleware' => 'api',
  'prefix' => 'auth'
], function ($router) {

  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::get('me', 'AuthController@me');
  Route::post('generate', 'AuthController@passwordGenerate');
  Route::post('update-profile', 'ProfileController@overWriteYourProfile');
  Route::post('update-skill', 'SkillController@update');
});

Route::get('/nav-category', 'NavController@index');
Route::get('/nav-category-for-admin', 'NavController@getDataForAdmin');
Route::get('/profile', 'ProfileController@index')->name('profile-index');
Route::get('/skill', 'SkillController@index');
Route::get('/edit-skill', 'SkillController@edit');
Route::get('/product', 'ProductController@index');
Route::get('/edit-product', 'ProductController@edit');