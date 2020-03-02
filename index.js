var form = document.getElementById('form');
var boton = document.getElementById('btnSubmit');
var username = document.getElementById('username').value;
var password = document.getElementById('password').value;


form.onsubmit = function (e) {
    e.preventDefault();

    swal({
        title: "Ora",
        icon: "info",
        text: "" + CryptoJS.SHA3(password)
    });
}
