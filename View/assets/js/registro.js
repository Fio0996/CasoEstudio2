function mostrarPrecio() {

    var selectCasa = document.getElementById("idCasa");
    var inputPrecio = document.getElementById("precioCasa");

    var idCasa = selectCasa.value;

    $.ajax({
        type: 'POST',
        url: '../Controller/CasasController.php',
        dataType: 'text',
        data: {
            "mostrarPrecio": "FUNCION",
            "idCasa": idCasa,
        },
        success: function (respuesta) {
            var inputUsuario = document.getElementById("usuario");
            inputPrecio.value = respuesta;
            inputUsuario.removeAttribute("readonly");
        }
    });

}