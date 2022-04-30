<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersDataController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::GET('/', [UsersDataController::class, 'index']);
Route::GET('user/{usersData}/edit', [UsersDataController::class, 'edit']);
Route::POST('/user/store', [UsersDataController::class, 'store']);
Route::DELETE('/user/destroy/{usersData}', [UsersDataController::class, 'destroy']);
