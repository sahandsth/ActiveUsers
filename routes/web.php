<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('auth.register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = \App\Models\User::all();
    return view('dashboard',['users'=>$users]);
})->name('dashboard');

Route::group(['prefix'=>'user','middleware'=>['auth:sanctum', 'verified']],function() {

Route::get('game-settings',[MainController::class,'gameSettings'])->name('show.game_settings');

Route::get('room-list',[MainController::class,'roomList'])->name('show.room_list');

Route::get('ajax',[MainController::class,'getAjax'])->name('get_ajax');

Route::post('create-room',[MainController::class,'createRoom'])->name('create.room');

Route::post('user_online',[MainController::class,'toggleOnline'])->name('toggle_online');

Route::post('login-user',[MainController::class,'loginUser'])->name('login.room');

Route::get('waiting-room/{id}',[MainController::class,'waitingRoom'])->name('show.waiting_room');




});
