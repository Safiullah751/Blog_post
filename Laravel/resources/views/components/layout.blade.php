<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="\css/style.css">
    <link rel="stylesheet" href="\css/bootstrap.min.css">
</head>

<body>
    {{-- <header class="head">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="nav-links ">Bolg Post</a>
            @guest
                <div>
                    <a href="{{ route('home') }}" class="links">Home</a>
                    <a href="{{ route('login') }}" class="links">Login</a>
                    <a href="{{ route('register') }}" class="links">Register</a>
                </div>
            @endguest
            @auth
                <a class=" nav-link btn text-dark bg-light" id="posts" href="{{ route('posts.index') }}">Posts</a>
                <div class="dropdown open center">
                    <button class="menu btn btn-light" type="" id="triggerId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        MenuBar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <button class="dropdown-item" href="#">{{ auth()->user()->username }}</button>
                        <a href="{{ route('Dashbord') }}" class="dropdown-item">Dashbord</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item " href="{{ route('logout') }}">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endauth


        </nav>
    </header> --}}
        @yield('content')

    <script src="\js/bootstrap.bundle.min.js"></script>
    <script src="\js/script.js"></script>
</body>

</html>
