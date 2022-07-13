@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">

            <h3>ToDoList</h3>
            <hr>

            <div class="my-2 d-flex ml-2">
                <a href="{{Route('new_task')}}" class="btn btn-primary">Create task</a>
                <a href="{{Route('allTasks')}}" class="btn btn-primary">Show hidden tasks</a>
            </div>
            <hr>

            @if ($tasks->count() === 0)
                <p>There are no tasks ToDO.</p>
            @else
                <table class='table table-striped'>
                    <thead class="bc-#32393f">
                        <tr>
                            <th style="width: 70%">Task</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->task}}</td>
                                <td>
                                    {{-- Done / not done --}}
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>

                <div>
                    <p>Task(s) found: <strong>{{$tasks->count()}}</strong> </p>
                </div>

            @endif
        </div>
    </div>
</div>

@endsection
