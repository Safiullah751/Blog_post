 @extends('components.layout')
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <link rel="stylesheet" href="\css/style.css">
     <link rel="stylesheet" href="\css/bootstrap.min.css">
 </head>

 <body>
     @section('content')
         <div class="container1 row">
             <div>

             </div>
             <div class="welcome-panel"></div>
             <div class="signin-panel">
                 <h2>Sign In</h2>
                 <form action="{{ route('login') }}" method="POST">
                     @csrf
                     <div class="input-group">
                         <label for="email">Email Address</label>
                         <input type="email" id="email" name="email" required value="{{old('email')}}">
                         <span class="text-danger">
                             @error('email')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>
                     <div class="input-group">
                         <label for="password">Password</label>
                         <input type="password" id="password" name="password" required value="{{old('password')}}">
                         <span class="text-danger">
                             @error('password')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>
                     <button type="submit" class="continue-btn">Login</button>
                     <span class="text-danger">
                         @error('error')
                             {{ $message }}
                         @enderror
                     </span>
                     @if (!session('from_register'))
                         <p>or make an account !</p>
                         <button type="button" class="social-btn twitter-btn"> <a class="sign_up"
                                 href="{{ route('register') }}">Sign up</a></button>
                     @endif
                 </form>
             </div>
         </div>
     @endsection

     <script src="\js/bootstrap.bundle.min.js"></script>
 </body>

 </html>
