<?php

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
    // $name = "Mohanned";
    // $age = 22;
    // return view('about', [
    //     'name' => $name,
    //     'age' => $age
    // ]);
Route::get('/about', function () {
    $tasks = [
        "1" => "task 1",
        "2" => "task 2",
        "3" => "task 3"
     ];
    //  $name = @$_POST['name'];
    return view("about",compact('tasks'));
});

Route::get('/contact', function () {
    // $name = "Mohammed";
    $name = request("name");
    $age = 30;
    return view ('contact', compact('name','age'));
    // return view ('contact')->with('name',$name)->with('age',$age);
});
Route::get('/show/{id}', function ($id) {
    $tasks = [
        "1" => "task 1",
        "2" => "task 2",
        "3" => "task 3"
     ];
     $task = $tasks[$id];
    return view('show',compact('task'));
});
Route::post('/show', function () {
    $name = $_POST['name'];
    return view('show',compact('name'));
});
// Route::post('/about', function () {
//     $name = $_POST['name'];
//     return view('about',compact('name'));
// });