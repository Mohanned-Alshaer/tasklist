<?php

use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\CatagoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\taskcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mobileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SocialsController;

// use App\Http\Controllers\TasksController;

// Route::get('/tasks', [taskcontroller::class, 'index'])->name('tasks.index');

// Route::get('/', [HomeController::class, 'index'])->name('tasks.index');
// task controller
Route::get('/tasks/{id}', [taskcontroller::class, 'show'])->name('task.show');
Route::post('/task/store', [taskcontroller::class, 'store'])->name('task.store');
Route::post('/tasks/destroy/{id}', [taskcontroller::class, 'destroy'])->name('task.destroy');
Route::post('/tasks/edit/{id}', [taskcontroller::class, 'update'])->name('task.update');
Route::put('/{id}', [taskcontroller::class, 'edit'])->name('task.edit');
Route::get('/layout/admin', [taskcontroller::class, 'view'])->name('tasks.index');
Route::get('/resturant/index', [taskcontroller::class, 'mainPage']);

//Shop controller
Route::get('/pages/add', [ShopController::class, 'create']);
Route::post('/', [ShopController::class, 'store']);
Route::post('/pages/destroy/{id}', [ShopController::class, 'destroy']);
Route::post('/pages/edit/{id}', [ShopController::class, 'update']);
Route::put('/{id}', [ShopController::class, 'edit']);
// Route::put('/{id}', [ShopController::class,'edit']);

// Route::get('/index',[ShopController::class,'index']);

//mobile controller
Route::get('mobile/index', [mobileController::class, 'index']);
Route::post('mobile/index', [mobileController::class, 'store'])->name('mobileIndex');
Route::post('mobile/contact', [mobileController::class, 'store']);
Route::get('mobile/about', [mobileController::class, 'about']);
Route::get('mobile/contact', [mobileController::class, 'contact']);
Route::get('mobile/brand', [mobileController::class, 'brand']);
Route::get('mobile/special', [mobileController::class, 'special']);

//Catagory controller
Route::get('/', [CatagoryController::class, 'index'])->name('tasks.index');
Route::get('layout/catagory/{id}', [CatagoryController::class, 'catag'])->name('catagory');
Route::get('pages/messages/{id}', [CatagoryController::class, 'message'])->name('messages');
Route::post('pages/messages/{id}', [ReplyController::class, 'store'])->name('messages');

Auth::routes();

//Catagories controller
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pages/addCatagory', [CatagoriesController::class, 'index']);
Route::post('/pages/addCatagory', [CatagoriesController::class, 'store']);
Route::get('/pages/allCatagories', [CatagoriesController::class, 'print']);
Route::post('/pages/allCatagories/destroy/{id}', [CatagoriesController::class, 'destroy']);
Route::post('/pages/editCatagory/{id}', [CatagoriesController::class, 'update']);
Route::put('/pages/allCatagories/{id}', [CatagoriesController::class, 'edit']);

//socials Controller
Route::get('/pages/SocialsAndAddress', [SocialsController::class, 'index'])->name('socials');
Route::post('/pages/SocialsAndAddress', [SocialsController::class, 'store']);

// Route::get('layout/catagory/1', [CatagoryController::class, 'catag'])->name('catagory1');
// Route::get('layout/catagory2', [CatagoryController::class, 'catag2'])->name('catagory2');
// Route::get('layout/catagory3', [CatagoryController::class, 'catag3'])->name('catagory3');