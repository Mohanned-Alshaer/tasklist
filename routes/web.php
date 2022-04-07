<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\TasksController;

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

//     // $name = "Mohanned";
//     // $age = 22;
//     // return view('about', [
//     //     'name' => $name,
//     //     'age' => $age
//     // ]);
// Route::get('/about', function () {
//     $tasks = [
//         "1" => "task 1",
//         "2" => "task 2",
//         "3" => "task 3"
//      ];
//     //  $name = @$_POST['name'];
//     return view("about",compact('tasks'));
// });

// Route::get('/contact', function () {
//     // $name = "Mohammed";
//     $name = request("name");
//     $age = 30;
//     return view ('contact', compact('name','age'));
//     // return view ('contact')->with('name',$name)->with('age',$age);
// });
// Route::get('/show/{id}', function ($id) {
//     $tasks = [
//         "1" => "task 1",
//         "2" => "task 2",
//         "3" => "task 3"
//      ];
//      $task = $tasks[$id];
//     return view('show',compact('task'));
// });
// Route::post('/show', function () {
//     $name = $_POST['name'];
//     return view('show',compact('name'));
// });

// Route::post('/about', function () {
//     $name = $_POST['name'];
//     return view('about',compact('name'));
// });
// Route::get('/tasks', function () {
//     $tasks = DB::table("tasks")->get();
//     return view ('tasks', compact("tasks"));
// });

// Route::get('/tasks', [taskcontroller::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [taskcontroller::class, 'show'])->name('task.show');
Route::post('/task/store', [taskcontroller::class, 'store'])->name('task.store');
Route::get('/', [taskcontroller::class, 'index'])->name('tasks.index');
// Route::get('/', function () {
//     return view('tasks');
// });
// Route::get('/tasks', [TasksController::class,'index'])->name('tasks.index');

// Route::get('/tasks', [taskcontroller::class,'show'])->name('task.show');

// Route::get('/task/{id}', function ($id) {
//     $tasks = DB::table("tasks")->find($id);
//     // $tasks = DB::table("tasks")->where('id','=',$id)->get();
//     return view('task',compact('tasks'));
// });
