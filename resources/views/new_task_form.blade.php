@extends('layouts.main')

@section('title', 'New task')

@section('content')

<div class="container-fluid">
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

@endsection
