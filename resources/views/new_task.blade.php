@extends('layouts.main')

@section('title', 'Create task')

@section('content')
    <form action="" class="form-control">
        <input type="text" placeholder="Name of the task">
    </form>
    <button class="btn btn-primary" type="submit">Submit</button>
@endsection