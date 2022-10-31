//variables

let btn = document.querySelector("#btn-create-post")
let url = "/action-create-post"
let _token = document.querySelector('input#csrf')
/*

btn.addEventListener("click", SavePost)


function SavePost(){
let tilte = document.querySelector("#title");
let desc = document.querySelector("#description");
let img = document.querySelector("input#img-post");
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": _token.value,
        },
        body: JSON.stringify({
            title: tilte.value,
            desc: desc.value,
            img: img.value
        }),
    })
        .then((Response) => Response.json())
        .then(function (r) {
            console.log(r);
        });
}
*/
