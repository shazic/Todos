@extends('layout')

@section('title')
   
        <h1 class="text-center">
            <a href="/">Todos</a>
        </h1>
    </div>
@stop

@section('content')

    <div class="container">
        @if( Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if( Session::has('failure'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('failure') }}
            </div>
        @endif
        <form method="POST" action="/todo/create">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="todo" placeholder="Create a new todo" aria-label="Create Todo" aria-describedby="addonButton">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success" id="addonButton">
                        add
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        @foreach($todos as $item)
            <div class="row m-2">
                <div class="col-md-9 todo-item bg-light p-3">
                @if( $item->completed )
                    <del>
                @endif
                {{ $item->todo }}
                @if( $item->completed )
                    </del>
                @endif
                </div>
                <div class="col">
                    <a class="btn btn-danger btn-sm" role="button"
                        href="{{ 
                                route('todo.delete', [ 
                                                    'id'    => $item->id
                                    
                                    ]) 
                              }}" >
                            X
                    </a>
                    <a class="btn btn-info btn-sm" role="button"
                        href="{{ 
                                route('todo.update', [ 
                                                    'id'    => $item->id
                                    
                                    ]) 
                              }}" >
                            Update
                    </a>
                @if( !$item->completed )
                    <a class="btn btn-warning btn-sm" 
                @else
                    <a class="btn btn-warning disabled btn-sm" 
                @endif
                        role="button"
                        href="{{ 
                                route('todo.complete', [ 
                                                    'id'    => $item->id
                                    
                                    ]) 
                              }}" >
                        @if( !$item->completed )
                            Mark Completed
                        @else
                              Completed
                        @endif
                    </a>
                    
                </div>
            </div>    
            
        @endforeach
    </div>    
@stop