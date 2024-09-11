
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="\css/style.css">
    <link rel="stylesheet" href="\css/bootstrap.min.css">
</head>
<body>
    <div class="container1">
        <div class="signin-panel">
            <h2>Register | Form</h2>
            <form action="" method="POST">
                @csrf
                @if(session('success'))
                <div>
                  <p class="text-success">
                      {{session('success')}}
                  </p>
                 </div>
                @endif
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="email" name="username" value="{{old('username')}}">
                      <span class="text-danger">
                        @error('username')
                           {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}"  >
                    <span class="text-danger">
                        @error('email')
                           {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" >
                    <span class="text-danger">
                        @error('password')
                           {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="text"  name="password_confirmation">
                    <span class="text-danger">
                </div>
                <button type="submit"  id="submit" class="continue-btn">Submit</button>
            </form>
        </div>
        <div class="welcome-panel"></div>
    </div>
    <script src="\js/bootstrap.bundle.min.js"></script>
</body>
</html>

