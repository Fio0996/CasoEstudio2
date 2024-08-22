function mostrarSaldoAnterior() {

    var selectCompra = document.getElementById("compras");
    var inputAbono = document.getElementById("abono");

    var idCompra = selectCompra.value;

    $.ajax({
        type: 'POST',
        url: '../Controller/registrosController.php',
        dataType: 'text',
        data: {
            "mostrarSaldo": "FUNCION",
            "idCompra": idCompra,
        },
        success: function (respuesta) {
            var saldoAnterior = document.getElementById("saldoAnterior");
            inputAbono.setAttribute("max", respuesta);
            inputAbono.removeAttribute("readonly");
            saldoAnterior.value = respuesta;
        }
    });

}