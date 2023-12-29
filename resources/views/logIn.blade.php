<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Log in">
        <button><a href="{{route("signUp")}}">Create Account</a></button>
    </form>
</body>
</html>