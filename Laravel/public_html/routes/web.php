<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\MediaController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/admin', [HomeController::class, 'admin']);

Route::post('/admin/login', [LoginAdminController::class, 'login']);
Route::post('/admin/logout', [LoginAdminController::class, 'logout']);

//urls para documents e imagenes
Route::get('/img/{key}', [MediaController::class, 'getImage']);
Route::get('/docs/{key}', [MediaController::class, 'getDocument']);

