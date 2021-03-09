<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;

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
Auth::routes();

/*Route::get('/', function () {
    return view('index');
});*/

/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    $id = Auth::id();
    $user = DB::table('users')->where('id', $id)->get();
    $videos = DB::table('videos')->get();
    return view('index', ['videos' => $videos, 'user' => $user]);
})->name('videos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::post('/updateprofile', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateprofile');

Route::get('/updatevideo', [App\Http\Controllers\VideoController::class, 'update'])->name('updatevideo');

Route::get('/viewvideo', [App\Http\Controllers\VideoController::class, 'index'])->name('viewvideo');

Route::get('/new', [App\Http\Controllers\VideoController::class, 'new'])->name('new');

Route::post('/newvideo', [App\Http\Controllers\VideoController::class, 'newVideo'])->name('newvideo');





