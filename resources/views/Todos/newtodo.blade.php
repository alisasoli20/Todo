@extends('layouts.apps')
@section('title')
    New-Todo
@endsection
@section('contents')
<h1 class="text-center my-5">Create Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create new Todo
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-items">
                                {{ $error }}
                            </li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/store-todo">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="30" rows="10" placeholder="Description" name="description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success align-center">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
