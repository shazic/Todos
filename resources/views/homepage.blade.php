@extends('layout')

@section('title')

    <div class="container-fluid">
        <div class="jumbotron bg-primary">
            <h1 class="text-center text-warning">
            Welcome to Todo App
            </h1>
            <div class="text-center mt-5">
                <a href="/todos" class="btn btn-warning">
                    Use the app now
                </a>
            </div>
        </div>
    <div>
@stop

@section('content')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-4">
            <div class="bg-light p-4 m-2">
                <h3> Simple</h3>
                <p>Extremely simple and intuitive to use.<p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-light p-4 m-2">
                <h3>Light</h3>
                <p>Lightweight and low memory consumption.<p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-light p-4 m-2">
                <h3>Elegant</h3>
                <p>Has a wow factor built into it's design.<p>
            </div>
        </div>
    </div>
    <hr>
</div>
@stop