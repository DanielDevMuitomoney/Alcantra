<div class="card-component" style="border: solid 1px black;">
    <img src="{{$imguser}}" alt="imagem do {{$nameuser}}" class="card-component-img-user"> 
    <span class="card-component-name-user">{{$nameuser}}</span>
    <h1 class="card-component-title">{{$title}}</h1>
    <img src="{{$imgposts}}" class="card-component-img-post" alt="imagem ou imagens do post">
    
    <p class="card-component-text">{{$text}}</p>
    <div class="tools">
    <i class="bi bi-heart"></i>
    <span>{{$likes}}</span>
    {{$favorited}}
    <i class="bi bi-bookmark"></i>
    </div>
    
</div>