<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>