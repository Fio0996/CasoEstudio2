<?php include_once 'layoutHome.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
head(); ?>

<body data-background-color="light">

    <div class="wrapper">
        <!-- Nav Bar -->
        <?php mostrarNavBar(); ?>

        <!-- Sidebar -->
        <?php mostrarSideBar(); ?>

        <!-- Contenido -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-inner-top">
                        <div class="mt-2 mb-4">
                            <h2 class="pb-1 display-3">Bienvenid@!</h2>
                            <h5 class="op-7 mb-4">Deseas alquilar una casa? Consulta en nuestro menú! </h5>
                        </div>
                        <img src="https://www.bbva.com/wp-content/uploads/2021/04/casas-ecolo%CC%81gicas_apertura-hogar-sostenibilidad-certificado-.jpg" width="70%">
                        <div class="separator-dashed"></div>
                    </div>
                </div>
            </div>
            <footer class="footer mb-0">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">

                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2024, Grupo #1
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php scripts(); ?>

</body>

</html>