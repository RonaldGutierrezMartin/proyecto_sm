<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <img src="{{asset('img/logo1.png')}}" alt="Logo de la Aplicacion" id="logo"/>
    </header>
    <nav id="nav">
        <img src="{{asset('img/camera.svg')}}" alt="Publicacion nueva" id="camera"/>
        <img src="{{asset('img/browse.svg')}}" alt="Buscador" id="browse"/>
        <img src="{{asset("img/user.svg")}}" alt="Icono de usuario" id="userIcon">
    </nav>
    <main id="content">
        @if (isset($posts))           
            @foreach ($posts as $post)               
                @foreach($post as $item )
                    @if($item->image != NULL)
                    
                    @else
                    {{-- Solo crea el primer post, mirar como hacer para crear todos --}}
                    {{-- Falta ver como pintar el usuario que hace el post y los botones de reacciones --}}
                        <section class="post">
                            <p class="postTitle">{{$item->content}}</p>
                        </section>

                    @endif
                @endforeach        
            @endforeach
        @else
            {{$warning}}
        @endif
    </main>
</body>
</html>