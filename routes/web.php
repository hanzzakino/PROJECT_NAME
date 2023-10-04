<?php

use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tasks;

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
    return redirect('/tasks/home');
});


Route::get('/user/login', function () {
    return view('/user/login');
})->name('login')->middleware('guest');
Route::get('/user/register', [UserController::class, 'create']);

Route::post('/user', [UserController::class, 'store'])->middleware('guest');

Route::get('/user/logout',  [UserController::class, 'logout'])->middleware('auth');

Route::post('/user/authenticate',  [UserController::class, 'authenticate'])->middleware('guest');



Route::get('/tasks/home', [TasksController::class, 'index'])->middleware('auth');

// Route Model binding
Route::get('/tasks/create', [TasksController::class, 'create'])->middleware('auth');

Route::post('/tasks', [TasksController::class, 'store'])->middleware('auth');

Route::delete('/tasks/{task}', [TasksController::class, 'delete'])->middleware('auth');

// Route Model binding
Route::get('/tasks/{task}', [TasksController::class, 'show'])->middleware('auth');





// Route::get('/get-object', function () {
//     return response(
//             json_encode(array("Peter"=>35, "Ben"=>37, "Joe"=>43)),
//         200)->header('Content-Type','application/json')
//         ->header('Custom-header','sample header');
// });


// Route::get('/hello/{name}', function ($name) {
//     return 'Hello! '.strtoupper($name);
// });

// // Constrained slug to [0-9]+
// Route::get('/id/{id}', function ($id) {
//     return 'ID: '.$id;
// })->where('id','[0-9]+');


// Route::get('/query', function (Request $request) {
//     // dd($request->id);
//     dd($request);
// });