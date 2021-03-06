<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Storage;

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
    return view('welcome');
});
Route::view('upload','upload');
Route::post('upload',function(){
    return Storage::disk('public')->putFile('images',request()->image);
})->name('upload');
