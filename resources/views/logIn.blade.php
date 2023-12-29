<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    
    <form action="{{route('verify')}}" method="POST" class="formLogin">
        @csrf
        <label for="email">Email: </label><input type="email" name="email">
        <label for="password">Password: </label><input type="password" name="password">
        <input type="submit" value="Log in">
        <button><a href="{{route("signup")}}">Create Account</a></button>
    </form>
    <div class="divErrors">
        @if (@isset($created))
            <p id="pCreated">{{$created}}</p>
        @endif
        @error('email')
            {{$message}}
        @enderror
        @error('password')
            {{$message}}
        @enderror
    </div>
</body>
</html>