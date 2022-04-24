<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
        // public function index(){
        //     $tasks = DB::table("tasks")->get();
        //     return view("tasks.index",compact('tasks'));
        // }
class taskcontroller extends Controller {
    //
    public function index(){
        $tasks = Task::all();
        // $tasks->name->orderBy('name', 'asc');
        // $tasks = DB::table("tasks")->orderBy('name', 'asc')->get();
        return view("tasks.index",compact('tasks'));
    }

    public function show($id){
        // DB::table("tasks"
        // $task = DB::table("tasks")->find($id);
        $task = Task::find($id);
        return view("tasks.show",compact('task'));
    }
        // $task = DB::table("tasks")->insert([
        //     'name' => $request->name
        // ]);

    public function store(Request $request){
        $validated = $request->validate([
            'name' => "required |min:3|max:30"
        ]);
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function destroy($id){
        // DB::table('tasks')->where('id','=',$id)->delete();
        Task::find($id)->delete();
       return redirect()->back();
    }

    public function update($id){
        //     DB::table('tasks')
        //     ->where('id', $id)
        //     ->update(['name' => "Mohanned"]);        
        //    return redirect()->back();

        // $task = DB::table("tasks")->find($id);
        $task = Task::find($id);
        // $tasks = DB::table("tasks")->orderBy('name', 'asc')->get();
        $tasks = Task::all();
        // $tasks = DB::table("tasks")->orderBy('name', 'asc')->get();
        return view("tasks.edit",compact('task','tasks'));
    }
    public function edit(Request $request,$id){
        $validated = $request->validate([
            'name' => "required |min:3|max:30"
        ]);
        $task = Task::find($id);
        $task->name = $request->input("name");
        $task->save();
        return redirect("/");
        // $task = DB::table("tasks")->find($id);
        // DB::table('tasks')
        //     ->where('id', $id)
        //     ->update(['name' => $task->name]); 

        // $task->update();
        // $name = $request->input("name");
        // DB::update("update tasks set name=? WHERE id =$id",[$task->name]);
        // $task->save();
    }
}