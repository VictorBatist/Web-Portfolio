const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const celular = document.getElementById("celular");
const mensagem = document.getElementById("mensagem");

form.addEventListener("submit",(event) => {
    event.preventDefault();

    // alert("Enviado com sucesso!")
    console.log(checkForm);
})

function checkInputUsername(){
    const usernameValue = username.value;
}
function checkInputEmail(){
    const emailValue = email.value;
}
function checkInputCelular(){
    const celularValue = celular.value;
}

function checkForm(){
    checkInputUsername();
    checkInputEmail();
    checkInputCelular();
}




