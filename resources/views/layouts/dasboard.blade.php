<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Project Managment Software</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto my-2 my-md-0 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">My Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Tasks</a>
                </li>
        </ul>
        <ul class="form-inline my-2 my-md-0 ">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name  }}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="#">Logout <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
       @include('layouts.partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        @include('layouts.partials.header')
        @include('layouts.partials.success')
        @include('layouts.partials.errors')

        @yield('content')
        </main>
        </div>
    </div>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>