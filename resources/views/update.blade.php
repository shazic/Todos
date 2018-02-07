@extends('layout')

@section('title')
   
   <h1 class="text-center">
       <a href="/">Todos</a>
   </h1>
</div>
@stop

@section('content')

<div class="container">
    <form action="{{ route('todo.save', [ 'id' => $todo->id ])  }}" method="POST">
        <div class="row">
            <div class="col-md-9 mt-4">
                {{ csrf_field() }}
                <input class="container-fluid" name="todo" type="text" value="{{ $todo->todo }}"/>
            </div>
            <div class="col-md-3 mt-4">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
    <div class="row m-4">
            <a href="/todos" class="btn btn-info mx-auto">Back to Todos list</a>
    </div>
</div>

@stop