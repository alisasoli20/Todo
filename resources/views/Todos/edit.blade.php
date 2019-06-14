@extends('layouts.apps')
@section('title')
    Update Todo
@endsection
@section('contents')
<h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="/update-todo">
                        @csrf
                        <input type="hidden" value="{{ $todo->id}}" name="todoid">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="username" value="{{ $todo->name}}">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="descriptions" placeholder="Description" rows="10" cols="30">{{ $todo->description}}</textarea>
                        </div>
                        <div class="form-control text-center">
                            <button class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
