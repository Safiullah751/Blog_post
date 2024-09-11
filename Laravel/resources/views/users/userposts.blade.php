<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

            <div>
                <h3  class="text-center mt-3 text-dark col-lg-12 col-12 col-md-12"> All Posts posted by {{ $user->username }} are <span
                        class="text-primary col-lg-12 col-12 col-md-12" >( {{ $posts->total() }} )</span>
                </h3>
            </div>

        <div class="row post-container  justify-content-center container  mx-auto mt-4 ">
            @foreach ($posts as $post)

                <div class="card col-lg-5 col-md-12 col-sm-12 post-card mt-3 bg-light text-dark">
                    <h4 class="title text-success">{{ $post->title }}</h4>
                    <h6>Posted {{ $post->created_at->diffForHumans() }} by <a id="byname"
                            href="{{ route('userspost', $post->user) }}"
                            class="text-primary">{{ $post->user->username }}</a></h6>
                    <div>
                        <p>{{ $post->body }}</p>
                    </div>

            </div>
        @endforeach
          </div>
        <div class="container mt-4">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </body>

    </html>