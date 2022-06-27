<?php

use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar;

//use DebugBar\DebugBar;
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

Route::get('/', function () {
       return view('welcome');
});

Route::get('create', [PostController::class, 'create']);

Route::post('create', [PostController::class, 'store']);
