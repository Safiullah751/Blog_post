<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="\css/style.css">
    <link rel="stylesheet" href="css/bootstarp.min.css">
</head>


<body>
    @extends('components.layout')
    @section('content')
        <div class="row welcome-text">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <span class="up"
                    style="color: white">________________________________________________________________________________</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="text text-dark">Welcome To Blog post</p>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <span class="down"
                    style="color: white">_______________________________________________________________________________</span>
            </div>
        </div>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="logo">Blog Post</a>
                <button class="menu-toggle" id="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <ul class="navbar-menu" id="navbar-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('Dashbord') }}">Create Post</a></li>
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                @endguest


                @auth
                <li>
                    <div class="dropdown">
                        <button style="" id="dropdown" class="d btn btn-dark dropdown-toggle type="button" id="triggerId"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashbord
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <button id="dashbor-btn" class="btn btn dark hover:dark" >{{auth()->user()->username}}</button>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                          <button id="dashbor-btn" class="btn btn dark hover:dark">Logout</button>
                         </form>
                    </div>
                    </div>
                </li>
                @endauth

            </ul>


        </nav>
        <div>
        </div>
    @endsection

</body>

</html>
