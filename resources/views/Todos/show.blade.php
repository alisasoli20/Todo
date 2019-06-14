@extends('layouts.apps')
@section('title')
    {{$todo->name}}
@endsection
@section('contents')
<h1 class="text-center my-5">{{ $todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description}}
                </div>
                <div class="my-2">
                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary btn-md btn-outline-primary">Edit</a>
                <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-md btn-outline-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
