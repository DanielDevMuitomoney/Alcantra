let BtnRegister = document.querySelector('button#btn_register_form')
let _token = document.querySelector('input#csrf')
let inp_name = document.querySelector("input#name")
let email = document.querySelector("input#email")
let password = document.querySelector("input#password")



BtnRegister.addEventListener("click", Register)
function Register(){
    insert()
}

function insert() {
    fetch('/action-register', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "dataType": 'json',
            'X-CSRF-TOKEN': _token.value,
        },
        body: JSON.stringify({ name: inp_name.value, email: email.value, password: password.value })
    }).then((data) => data.json()).then((data) => {
        if (data.result === true) {
            // mostra que foi cadastrado
        }
    })
}
