<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirdController;

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

// Homepage - show all birds
Route::get('/', [BirdController::class, 'index']);

// Single view - show single bird
// Route::get('/birds/{$name}', [BirdController::class, 'show']);