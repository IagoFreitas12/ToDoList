@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">

            <div class="my-2 d-flex ml-2">
                <a href="{{Route('new_task')}}" class="btn btn-primary">Create task</a>
                <a href="{{Route('allTasks')}}" class="btn btn-primary">Show hidden tasks</a>
            </div>
            <hr>

            @if ($tasks->count() === 0)
                <p>There are no tasks ToDO.</p>
            @else
                <table class='table table-striped table-dark'>
                    <thead>
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
                                    @if ($task->done == null)
                                        {{-- Done --}}
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>   
                                    @else
                                        {{-- Not done --}}
                                        <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    @endif

                                    {{-- Edit --}}
                                    <a href="" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    @if ($task->visible==1)
                                        {{-- Visible --}}
                                        <a href="" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @else
                                        {{-- Not visible --}}
                                        <a href="" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    @endif
                                    
                                    {{-- Delete --}}
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a> 
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
