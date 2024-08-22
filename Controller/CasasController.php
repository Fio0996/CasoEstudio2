<?php include_once '../Model/CasasModel.php';

function ConsultarCasas()
{
    $respuesta = ConsultarCasasBD();

    if ($respuesta->num_rows > 0) {
        while ($row = mysqli_fetch_array($respuesta)) {
            echo "<tr>";
            echo "<td>" . $row["DescripcionCasa"] . "</td>";
            echo "<td>" . $row["PrecioCasa"] . "</td>";
            echo "<td>" . $row["UsuarioAlquiler"] . "</td>";
            echo "<td>" . $row["Estado"] . "</td>";
            echo "<td>" . $row["FechaAlquiler"] . "</td>";
            echo "</tr>";
        }
    }
}

function ConsultarCasasDisponibles()
{
    $respuesta = ConsultarCasasDisponiblesBD();
    echo "<option value='' disabled selected> Seleccione </option>";

    if ($respuesta->num_rows > 0) {
        while ($row = mysqli_fetch_array($respuesta)) {
            echo "<option value=" . $row["idCasa"] . ">" . $row["DescripcionCasa"] . "</option>";
        }
    }
}

if (isset($_POST["mostrarPrecio"])) {
    $IdCasa = $_POST["idCasa"];
    $respuesta = ConsultarPrecioCasaPorId($IdCasa);
    if ($respuesta->num_rows > 0) {
        $row = mysqli_fetch_array($respuesta);
        echo $row["PrecioCasa"];
    }
}

if(isset($_POST["btnReserva"]))
    {
        $idCasa = $_POST["idCasa"];
        $usuarioAlquiler = $_POST["usuario"];
        
        $respuesta = Reserva($idCasa,$usuarioAlquiler);

        if ($respuesta === true) {
            header("location: ../View/consultaCasas.php");
        } else {
            $_POST["msj"] = "Su abono no se ha completado correctamente. Intente de nuevo!!";
        }

    }
