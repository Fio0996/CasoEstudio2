<?php include_once 'baseDatosModel.php';

function ConsultarCasasBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarCasas()";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarCasasDisponiblesBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarCasasDisponibles()";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarPrecioCasaPorId($idCasa)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarPrecioCasaPorId('$idCasa')";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function Reserva($idCasa, $Usuario)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL Reserva('$idCasa','$Usuario')";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}
/* function Registro($IdCompra, $Monto)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL Registro('$IdCompra','$Monto')";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


////Esta es para consultar los productos  
function ObtenerDatos()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ObtenerDatos()";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

////Esta es para consultar las compras pendientespara el select de registro 
function ConsultarComprasBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarCompras()";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function consultarSaldoAnterior($IdCompra)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarSaldoAnterior('$IdCompra')";
    $respuesta = $conexion->query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}
 */