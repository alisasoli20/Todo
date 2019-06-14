@extends('layouts.apps');
@section('title')
    Todo App
@endsection
@section('contents')

<h1 class="text-center my-5">Todos App</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todo
                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($todo as $todos)
                    <li class="list-group-item">
                    {{ $todos->name}}
                    @if ($todos->completed==false)
                    <a href="/todos/{{$todos->id}}/complete" style="color:white" class="btn btn-warning btn-sm float-right">Complete</a>
                    @endif
                    <a href="/todos/{{$todos->id}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
