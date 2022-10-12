<div class="card-component" style="border: solid 1px black;">
    <img src="{{$ImgUser}}" alt="imagem do {{$NameUser}}" class="card-component-img-user"> 
    <span class="card-component-name-user">{{$NameUser}}</span>
    <img src="{{$ImgPost}}" class="card-component-img-post" alt="imagem ou imagens do post">
    <h1 class="card-component-title">{{$title}}</h1>
    <p class="card-component-text">{{$text}}</p>

    <i class="bi bi-heart"></i>
    <span>{{$likes}}</span>
    <i class="bi bi-bookmark"></i>
    
</div>