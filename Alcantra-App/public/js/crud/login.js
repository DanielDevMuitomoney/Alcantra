let btn = document.querySelector("#btn-login-form")
let email = document.querySelector("input#email")
let password = document.querySelector("input#password")
let _token = document.querySelector("input#csrf")

btn.addEventListener("click",login)
function login(){
    select()
}

function select(){
    fetch('/action-login', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "dataType": 'json',
            'X-CSRF-TOKEN': _token.value,
        },
        body: JSON.stringify({ email: email.value, password: password.value })
    }).then((data) => data.json()).then((data) => {
        if (data.response === true) {
            window.location.href = "/home";
        }
    })
}