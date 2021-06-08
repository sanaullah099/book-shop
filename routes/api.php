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


Route::get('customer', 'customerController@index')->name('customer')->name('customers');

Route::post('checkuser', function(){
	return 'no middleware used';
})->name('checkuser');

Route::group(['prefix'=>'books'], function(){
	Route::get('book', [\App\Http\Controllers\bookController::class, 'index'])->name('books');
	Route::get('showbook', [\App\Http\Controllers\bookController::class, 'show']);
	Route::get('createbook', [\App\Http\Controllers\bookController::class, 'create'])->name('createbook');
	Route::post('storebook', [\App\Http\Controllers\bookController::class, 'store'])->name('storebook');
	Route::get('deletebook/{id}', [\App\Http\Controllers\bookController::class, 'destroy']);
	Route::get('deletebook/restore/{id}', [\App\Http\Controllers\bookController::class, 'restore']);

});

Route::post('register', [\App\Http\Controllers\PassportAuthController::class, 'register'])->name('register');
Route::get('create-register', [\App\Http\Controllers\PassportAuthController::class, 'create'])->name('create-register');
Route::get('login', [\App\Http\Controllers\PassportAuthController::class, 'loginView'])->name('login');
Route::post('login-verify', [\App\Http\Controllers\PassportAuthController::class, 'login'])->name('login-verify')->middleware('checkUserMiddleware');