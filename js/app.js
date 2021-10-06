(function () {
    function activeClass(){
        const divLogin = document.getElementById("Login")
        const divRegister = document.getElementById("Register")
        const btnLogin  = document.getElementById("loginBtn")
        const btnRegister = document.getElementById("registerBtn")

        btnLogin.onclick = function(){
            divRegister.classList.add("is-hidden")
            divLogin.classList.remove("is-hidden")

        }
        btnRegister.onclick = function(){
            divLogin.classList.add("is-hidden")
            divRegister.classList.remove("is-hidden")
        }

    }

    window.onload = ("DOMContentLoaded", activeClass);
})();