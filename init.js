if (error) {
    swal({
        title: mensaje,
        icon: "error"
    });
} else {
    swal({
        title: mensaje,
        icon: "info"
    });
}

var titulo = document.getElementById('titulo');

titulo.innerText = mensaje;
