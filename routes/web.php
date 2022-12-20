<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\ForumController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/topics', [TopicController::class, 'index'])->middleware('auth');
Route::get('/interns', [InternController::class, 'index'])->middleware('auth');
Route::get('/forums', [ForumController::class, 'index'])->middleware('auth');
Route::get('/lecturer-dashboard', [TopicController::class, 'lecturer_dashboard'])->middleware('auth');
Route::get('/add-topic', [TopicController::class, 'add_topic'])->middleware('auth');
Route::get('/table-topic', [TopicController::class, 'table_topic'])->middleware('auth');
Route::get('/add-intern', [InternController::class, 'add_intern'])->middleware('auth');
Route::post('/topic', [TopicController::class, 'store'])->middleware('auth');
Route::post('/intern', [InternController::class, 'store'])->middleware('auth');
Route::post('/update-topic/{id}', [TopicController::class, 'update_topic'])->middleware('auth');
Route::delete('/destroy-topic/{id}', [TopicController::class, 'destroy'])->middleware('auth');
Route::post('/update-intern/{id}', [InternController::class, 'update_intern'])->middleware('auth');
Route::delete('/destroy-intern/{id}', [InternController::class, 'destroy'])->middleware('auth');
