<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    {{-- @dd($tipos) --}}
    <form action="{{route("register")}}" method="POST" id="formularioSignUp">
        @csrf
        <label for="email">Email: </label><input type="email" name="email" >
        <label for="nombre">Nombre: </label><input type="text" name="nombre" >
        <label for="primerApellido">Primer Apellido: </label><input type="text" name="primerApellido">
        <label for="segundoApellido">Segundo Apellido: </label><input type="text" name="segundoApellido">
        <label for="password">Password: </label><input type="password" name="password">
        <label for="passwordCheck">Password Check: </label><input type="password" name="passwordCheck">
        
        <label for="id_tipo">Tipo de Usuario: </label>
        <select name="id_tipo" id="">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}" @if ($tipo->nombre == "Particular") selected @endif>{{$tipo->nombre}}</option>
                
            @endforeach
        </select>
        <input type="submit" value="Sign Up">
    </form>

    <div id="divErrors">
        @error('nombre')
            {{$message}}
        @enderror
    </div>
</body>
</html>