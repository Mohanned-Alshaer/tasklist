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
// Route::get('/', function () {
//     $tasks = DB::table("tasks")->get();
//     return view ('/layout.admin', compact("tasks"));
// });


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


