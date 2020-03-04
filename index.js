var form = document.getElementById('form');
var boton = document.getElementById('btnSubmit');
var username = document.getElementById('username');
var password = document.getElementById('password');

var passphrase = "meza";


form.onsubmit = function (e) {
    if (username.value.length == 0 || password.value.length == 0) {
        e.preventDefault();

        swal({
            title: "Debes llenar todos los campos",
            icon: "error"
        });
    }


}
