<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Controllers\AdminController;
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

Route::get('/unicode', function () {
    $user = new User();
    $allUser = $user::all();
    dd($user);
});

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class,'index']);
});