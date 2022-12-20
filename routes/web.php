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
    //rute homepage
    return view('welcome');
});

//rute guest
// Route::middleware(['guest'])->group(function () {
//rute register
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'postRegister']);
//rute login
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/login', [AuthController::class, 'authenticating']);
// });

//rute student and login user
// Route::middleware(['auth'])->group(function () {
//     Route::get('/logout', [AuthController::class, 'logout']);
//     Route::get('/topics', [TopicController::class, 'index']);
//     Route::get('/interns', [InternController::class, 'index']);
//     Route::get('/forums', [ForumController::class, 'index']);
//     Route::post('/add_forum', [ForumController::class, 'store']);
//     Route::post('/add-comment', [ForumController::class, 'add_comment']);
//     Route::get('/forums/{forum}/view', [ForumController::class, 'view']);
//     Route::post('/forums/{forum}/view', [ForumController::class, 'post_comment']);
// });

//rute admin
// Route::middleware(['admin-middleware'])->group(function () {
//     Route::get('/admin-dashboard', [AuthController::class, 'admin_dashboard']);
//     Route::get('/add-intern', [InternController::class, 'add_intern']);
//     Route::post('/intern', [InternController::class, 'store']);
//     Route::post('/update-intern/{id}', [InternController::class, 'update_intern']);
//     Route::delete('/destroy-intern/{id}', [InternController::class, 'destroy']);
//     Route::get('/add-user', [AuthController::class, 'add_user']);
//     Route::post('/user', [AuthController::class, 'store']);
//     Route::post('/update-user/{id}', [AuthController::class, 'update_user']);
//     Route::delete('/destroy-user/{id}', [AuthController::class, 'destroy']);
// });

//rute dosen
// Route::middleware(['auth', 'lecturer-middleware'])->group(function () {
//     Route::get('/add-topic', [TopicController::class, 'add_topic']);
//     Route::post('/topic', [TopicController::class, 'store']);
//     Route::post('/update-topic/{id}', [TopicController::class, 'update_topic']);
//     Route::delete('/destroy-topic/{id}', [TopicController::class, 'destroy']);
//     Route::get('/lecturer-dashboard', [AuthController::class, 'lecturer_dashboard']);
// });

//rute master admin
// Route::middleware(['auth', 'master-middleware'])->group(function () {

// });





Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/topics', [TopicController::class, 'index'])->middleware('auth');
Route::get('/interns', [InternController::class, 'index'])->middleware('auth');
Route::get('/forums', [ForumController::class, 'index'])->middleware(['auth']);
Route::post('/add_forum', [ForumController::class, 'store'])->middleware(['auth']);
Route::post('/add-comment', [ForumController::class, 'add_comment'])->middleware(['auth']);
Route::get('/forums/{forum}/view', [ForumController::class, 'view'])->middleware(['auth']);
Route::post('/forums/{forum}/view', [ForumController::class, 'post_comment'])->middleware(['auth']);

Route::get('/lecturer-dashboard', [AuthController::class, 'lecturer_dashboard'])->middleware(['auth', 'lecturer-middleware']);
Route::get('/add-topic', [TopicController::class, 'add_topic'])->middleware('auth', 'lecturer-middleware');
Route::post('/topic', [TopicController::class, 'store'])->middleware('auth', 'lecturer-middleware');
Route::post('/update-topic/{id}', [TopicController::class, 'update_topic'])->middleware('auth', 'lecturer-middleware');
Route::delete('/destroy-topic/{id}', [TopicController::class, 'destroy'])->middleware('auth', 'lecturer-middleware');

Route::get('/admin-dashboard', [AuthController::class, 'admin_dashboard'])->middleware(['auth', 'admin-middleware']);
Route::get('/add-intern', [InternController::class, 'add_intern'])->middleware(['auth', 'admin-middleware']);
Route::post('/intern', [InternController::class, 'store'])->middleware(['auth', 'admin-middleware']);
Route::post('/update-intern/{id}', [InternController::class, 'update_intern'])->middleware(['auth', 'admin-middleware']);
Route::delete('/destroy-intern/{id}', [InternController::class, 'destroy'])->middleware(['auth', 'admin-middleware']);
Route::get('/add-user', [AuthController::class, 'add_user'])->middleware(['auth', 'admin-middleware']);
Route::post('/user', [AuthController::class, 'store'])->middleware(['auth', 'admin-middleware']);
Route::post('/update-user/{id}', [AuthController::class, 'update_user'])->middleware(['auth', 'admin-middleware']);
Route::delete('/destroy-user/{id}', [AuthController::class, 'destroy'])->middleware(['auth', 'admin-middleware']);


Route::get('/table-topic', [TopicController::class, 'table_topic'])->middleware('auth');
