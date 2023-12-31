<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <img src="{{asset('img/logo1.png')}}" alt="Logo de la Aplicacion" id="logo"/>
        <h2 class="h2Header">Social Media</h2>
    </header>
    <main>
        <form action="{{route('register')}}" method="POST" id="formularioSignUp">
            @csrf
            <label for="email">Email: </label><input type="email" name="email" >
            <label for="name">Nombre: </label><input type="text" name="name" >
            <label for="lastName1">Primer Apellido: </label><input type="text" name="lastName1">
            <label for="lastName2">Segundo Apellido: </label><input type="text" name="lastName2">
            <label for="password">Password: </label><input type="password" name="password">
            <label for="passwordCheck">Password Check: </label><input type="password" name="passwordCheck">
            
            <label for="type_id">Tipo de Usuario: </label>
            <select name="type_id" id="">
                @foreach ($types as $type)
                    <option value="{{$type->id}}" @if ($type->name == "Particular") selected @endif>{{$type->name}}</option>
                    
                @endforeach
            </select>
            <input type="submit" value="Sign Up">
        </form>
    
        <div class="divErrors">
            @error('email')
                {{$message}}
            @enderror
            @error('name')
                {{$message}}
            @enderror
            @error('lastName1')
                {{$message}}
            @enderror
            @error('password')
                {{$message}}
            @enderror
            @error('paswordCheck')
                {{$message}}
            @enderror
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>