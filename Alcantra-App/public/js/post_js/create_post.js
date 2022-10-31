//variables
let tilte = document.querySelector("#title")
let desc = document.querySelector("#description")
let btn = document.querySelector("#btn-create-post")
let url = "/action-create-post"
let _token = document.querySelector('input#csrf')

btn.addEventListener("click", SavePost)

function SavePost(){
    fetch(url,{
        method: 'POST',
        headers:{
            'X-CSRF-TOKEN': _token.value
        },
        body:JSON.stringify({
            tile:tilte.value, desc: desc.value,
        })
    })
    .then((Response) => Response.json())
    .then(function(r){
        console.log(r)
    })
}

