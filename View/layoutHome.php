<?php 


function head()
{
   echo '

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>PrácticaGrupal</title>
        <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/10751/10751558.png" type="image/x-icon" />

        <!-- Fonts and icons -->
        <script src="assets/js/plugin/webfont/webfont.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

        <script>
            WebFont.load({
                google: {
                    "families": ["Lato:300,400,700,900"]
                },
                custom: {
                    "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                    urls: ["assets/css/fonts.min.css"]
                },
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="assets/css/atlantis.min.css">
    </head>
    ';
}

function mostrarContenido()
{
   echo '

   <div class="main-panel">
      <div class="content">
         <div class="page-inner">
            <div class="page-inner-top">
               <div class="mt-2 mb-4">
                  <h2 class="text-white pb-1 display-3">Bienvenid@!</h2>
                  <h5 class="text-white op-7 mb-4">Deseas alquilar una casa? Consulta en nuestro menú lateral! </h5>
               </div>
               <div >
                <img src="https://www.bbva.com/wp-content/uploads/2021/04/casas-ecolo%CC%81gicas_apertura-hogar-sostenibilidad-certificado-.jpg" class="img-fluid">
                </div>
                           <div class="separator-dashed"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer">
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
   <!-- End Contenido -->
 
   ';
}

function mostrarNavBar()
{
   echo '
   <div class="main-header">
      <div class="logo-header" data-background-color="dark2">
            <a href="home.php" class="logo">
               <i class="fa fa-house mx-3 text-white"></i>
               <span class="text-white pb-1" style="font-weight: bold; font-size: 18px;"> CasoEstudio #2 </span>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
                  <i class="icon-menu"></i>
               </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
               <button class="btn btn-toggle toggle-sidebar">
                  <i class="icon-menu"></i>
               </button>
            </div>
      </div>

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
            <div class="container-fluid">
               <div class="collapse" id="search-nav">
                  <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                           <div class="input-group-prepend">
                           </div>
                        </div>
                  </form>
               </div>
               <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                  <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                           <div class="dropdown-user-scroll scrollbar-outer">
                              <li>
                                   
                              </li>
                           </div>
                        </ul>
                  </li> 
               </ul>
            </div>
      </nav>
   </div>
   <!-- End Navbar -->

   ';
}

function mostrarSideBar()
{
   echo '

   <div class="sidebar sidebar-style-2" data-background-color="dark2">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
         <div class="sidebar-content">
            <ul class="nav nav-primary">
               <li class="nav-item active">
                  <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                     <i class="bi bi-three-dots-vertical"></i>
                     <p> Menú</p>
                     <span class="caret"></span>
                  </a>
                  <div class="collapse" id="dashboard">
                     <ul class="nav nav-collapse">
                        <li>
                           <a href="VistaAlquilerCasas.php">
                           <span class="sub-item">Alquiler</span>
                           </a>
                        </li>
                        <li>
                           <a href="consultaCasas.php">
                           <span class="sub-item">Consultas</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="nav-section">
                  <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                  </span>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- End Sidebar -->

   ';
}

function scripts()
{
   echo '

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>


    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS PERMITE QUE EL SIDEBAR SEA COLAPSABLE-->
    <script src="assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, dont include it in your project! -->
    <script>
        $(\'#lineChart\').sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: \'line\',
            height: \'70\',
            width: \'100%\',
            lineWidth: \'2\',
            lineColor: \'rgba(255, 255, 255, .5)\',
            fillColor: \'rgba(255, 255, 255, .15)\'
        });

        $(\'#lineChart2\').sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: \'line\',
            height: \'70\',
            width: \'100%\',
            lineWidth: \'2\',
            lineColor: \'rgba(255, 255, 255, .5)\',
            fillColor: \'rgba(255, 255, 255, .15)\'
        });

        $(\'#lineChart3\').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: \'line\',
            height: \'70\',
            width: \'100%\',
            lineWidth: \'2\',
            lineColor: \'rgba(255, 255, 255, .5)\',
            fillColor: \'rgba(255, 255, 255, .15)\'
        });
    </script>
    
    ';
}

