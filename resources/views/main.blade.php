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
        <h2 class="h2Header">Social Media</h2>
    </header>
    <nav id="nav">
        <img src="{{asset('img/camera.svg')}}" alt="Publicacion nueva" id="camera"/>
        <img src="{{asset('img/browse.svg')}}" alt="Buscador" id="browse"/>
        <img src="{{asset("img/user.svg")}}" alt="Icono de usuario" id="userIcon">
    </nav>
    
    <main>


        {{-- @if (isset($posts))
            
            @foreach ($posts as $post)
                
                @foreach($post as $item )
               
                    @if($item->image != NULL)
                    
                    @else
                    
                        <section class="post">
                            <p class="postTitle">{{$item->content}}</p>
                        </section>

                    @endif
                @endforeach        
            
                
            @endforeach
        @else
            {{$warning}}
        @endif --}}

    </main>
    <footer>
        
    </footer>

    <template id="templatePost">
        <div class="divPost">
            <div class="postHead">
                <div class="divPostUser">
                    <img src="" alt="profilePic" class="profilePic">
                    <h4 class="h4UserName"></h4>
                </div>
            </div>
            <div class="postContent">
                <img src="" alt="postImg" class="postImg">
                <p class="pContent"></p>
            </div>
            <div class="postFooter">
                <div class="divReactions">
                    <div class="divLikes">
                        <button class="btnLike"><img src="" alt="imgLike" class="imgBtnLike"></button>
                        <p class="likesAmount"></p>
                    </div>
                </div>
                
                <p class="pDatePosted"></p> 
            </div>
        </div>
    </template>

    <script src="{{asset('js/scriptMain.js')}}"></script>
</body>
</html>