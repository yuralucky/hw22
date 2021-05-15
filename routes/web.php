<?php

use App\Http\Controllers\GeoIpController;
use App\Http\Controllers\UserAgentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/geo', [GeoIpController::class, 'index']);
Route::get('/', [UserAgentController::class,'index']);

