<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class,'index']);
Route::get('/create', [StudentController::class,'create']);
Route::post('/store', [StudentController::class,'store']);
Route::get('/show/{id}', [StudentController::class,'show']);
Route::post('/update/{id}', [StudentController::class,'update']);
Route::get('/destroy/{id}', [StudentController::class,'destroy']);
