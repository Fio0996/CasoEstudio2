<?php include_once 'layoutHome.php';
include_once '../Controller/CasasController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php head(); ?>

<body class="hold-transition sidebar-mini" data-background-color="light">
    <div class="wrapper">
        <?php mostrarNavBar(); ?>
        <?php mostrarSideBar(); ?>

        <!-- Contenido principal -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container">
                    <div class="row justify-content-center mt-">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-center" style="margin-top: 80px;">Alquiler de casas</h3>
                                    <?php
                                    if (isset($_POST["msj"])) {
                                        echo $_POST["msj"];
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="idCasa">Descripción</label>
                                            <select id="idCasa" name="idCasa" class="form-control" onchange="mostrarPrecio();" required>
                                                <?php ConsultarCasasDisponibles(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="precioCasa">Precio Casa (Mensual)</label>
                                            <input readOnly class="form-control" type="text" id="precioCasa" name="precioCasa" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="usuario">Información de usuario</label>
                                            <input class="form-control" type="double" id="usuario" name="usuario" placeholder="" required onkeyup="validarMontoAbono();" readonly>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="btnReserva" name="btnReserva" class="btn btn-primary">Reservar</button>
                                        </div>
                                    </form>
                                    <div class="mt-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Fin del contenido principal -->

        <!-- Barra lateral de control -->
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
        <!-- Fin de la barra lateral de control -->
    </div>

    <?php scripts(); ?>
    <script src="../View/assets/js/registro.js"></script>
    <script src="../View/assets/js/validarAbono.js"></script>

</body>

</html>