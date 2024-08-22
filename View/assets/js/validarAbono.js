function validarMontoAbono() {
    var montoAbono = parseFloat(document.getElementById("abono").value);
    var saldoCuenta = parseFloat(document.getElementById("saldoAnterior").value);

    if (montoAbono > saldoCuenta) {
        MostrarMensaje("Error", "El monto del abono no puede ser mayor al saldo de la cuenta", "error");
        document.getElementById("abono").value = "";
        return;
    }
}

function MostrarMensaje(titulo, mensaje, icono)
  {
    Swal.fire({
      title: titulo,
      text: mensaje,
      icon: icono
    });
  }