@extends('layout.app')
@section("content")
<style>
    i {
        margin-right: 10px;
    }
</style>
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Task
            </div>
            <div class="panel-body">
                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- New Task Form -->
                <form action="/{{$task->id}}" method="POST" class="form-horizontal">
                    @csrf
    `               @method("put")
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
                        </div>
                    </div>
                    <!-- Update Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Update Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                       @foreach ($tasks as $key => $t )
                            <tr>
                                <td class="table-text">{{++$key}}</td>
                                <td class="table-text"><div> {{$t->name}}</div></td>
                                <!-- Task Delete Button -->
                                <td>
                                    <form action="/tasks/destroy/{{$t->id}}" method="POST">
                                        @csrf
                                        <!-- @method('Delete') -->
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                                <!-- Task Update Button -->
                                <td>
                                    <form action="/tasks/edit/{{$t->id}}" method="POST">
                                        @csrf
                                        <!-- @method('edit') -->
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-btn fa-edit"></i>Edit
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection