<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller {
    //
    public function index(){
        $tasks = DB::table("tasks")->get();
        return view("tasks.index",compact('tasks'));
    }
}
