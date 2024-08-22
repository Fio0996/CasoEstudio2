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
                                        <!-- dropdown descripción pero solo casas no alquiladas-->
                                        <div class="form-group">
                                        <label for="compras">Descripción</label>
                                            <select id="compras" name="compra" class="form-control" onchange="mostrarSaldoAnterior();" required>
                                                <?php ConsultarCompras(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="saldoAnterior">Precio Casa</label>
                                            <input readOnly class="form-control" type="text" id="saldoAnterior" name="saldoAnterior" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <!-- Validar que tenga Información-->
                                            <label for="abono">Información de usuario</label>
                                            <input class="form-control" type="double" id="abono" name="abono" placeholder="" required onkeyup="validarMontoAbono();" readonly>
                                        </div>
                                        <button type="submit" id="btnRegistro" name="btnRegistro" class="btn btn-primary">Abonar</button>
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
    <script src="dist/js/productos.js"></script>
    <script src="../View/assets/js/registro.js"></script>
    <script src="../View/assets/js/validarAbono.js"></script>

</body>

</html>