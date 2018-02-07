<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #eee;
                color: #456;
                /*
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                */
                height: 100vh;
                margin: 0;
            }
            a  {
                color: #567;
                text-decoration: none !important;
            }

            .todo-item {
                border: 1px solid #aaa;
                border-radius: 15px;
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container-fluid">
                        @yield('title')
                </div>
                @yield('content')
                
            </div>
        </div>
    </body>
</html>
