<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\css/style.css">
    <link rel="stylesheet" href="css/bootstarp.min.css">

</head>
<body>
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
    @extends('components.layout')

    @section('content')
      <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
             <div class="row  justify-content-center mt-5 create-container" >
                    <div class="col-lg-7">
                          <p class="text-dark text-center mt-3">Create a new Post</p>
                       </div>

                     <div class="col-lg-7 col-mf-12 col-sm-7">
                              <label for="Title" class="text-dark">Title</label>
                              <input type="text" name="title" class="form-control bg-light text-dark">
                              <span class="text-danger">
                                @error('title')
                                {{$message}}
                             @enderror
                              </span>
                     </div>

                     <div class="col-lg-7 col-md-12 col-sm-7 ">
                        <label for="Post Body" class="text-dark">Body</label>
                     </div>
                     <div class="col-lg-7  col-md-12 col-sm-7 ">
                        <textarea name="body" id="textarea"></textarea>
                        <span class="text-danger">
                            @error('body')
                            {{$message}}
                         @enderror
                          </span>
                     </div>
                     <div class="col-lg-7 text-center  col-md-12 col-sm-12 ">
                        <input class="submit bg-info text-light"  type="submit" value="Create">
                     </div>
             </div>
        </form>
      </div>
     @endsection
     <script src="\js/script.js"></script>
</body>
</html>

