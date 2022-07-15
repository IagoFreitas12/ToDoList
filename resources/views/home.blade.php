@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="mr-2">
                    <button  
                    id="buttaoparaapertar" 
                    onclick="toggle()" 
                    class="btn btn-primary" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#collapseTask" 
                    aria-expanded="false" 
                    aria-controls="collapseTask">
                    Create task
                    </button>
                </div>
                {{-- Shows hidden tasks --}}
                <a href="{{Route('allTasks')}}" class="btn btn-primary">Show hidden tasks</a>   
            </div>
        </div>
    </div>
    
    <hr>

    <div class="show" id="collapseCreation" style="display:flex;">
        {{-- New task form --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col">
        
                    <h3 class="text-center">New task</h3>

                    
                    <form action="{{Route('new_task_submit')}}" method="post">
                        @csrf
                        {{-- Create new task and cancel buttons --}}
                        <div class="row">
                            <div class="col-sm-4 offset-sm-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="text_new_task" id="text_new_task" placeholder="Task's name">
                                </div>
                                <div class="mt-2 mb-2 form-group d-flex justify-content-between">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                    <a class="btn btn-secondary" href="{{Route('home')}}">
                                        <p class="mb-0">Cancel</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>                           
                </div>
            </div>
        </div>
    </div>

    <div id="collapseTask" class="collapse">
        <div class="row">
            <div class="col">
    
                <h3 class="text-center mb-5">New task</h3>
                <hr>
                
                <form action="{{Route('new_task_submit')}}" method="post">
                    @csrf
    
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <div class="form-group">
                                <label for="text_new_task">New task:</label>
                                <input class="form-control" type="text" name="text_new_task" id="text_new_task">
                            </div>
                            <div class="mt-2 form-group d-flex justify-content-between">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <a class="btn btn-secondary" href="{{Route('home')}}">
                                    <p class="mb-0">Cancel</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                </form>
                
            </div>
        </div>
    </div>
            
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
                                <a href="Route::" class="btn btn-primary btn-sm">
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

@endsection
