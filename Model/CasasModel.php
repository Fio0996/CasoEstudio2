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
