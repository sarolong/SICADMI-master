
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Select</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>


</head>

<body id="page-top">

    <?php
    session_start();
    $usuario = $_SESSION['Usuario'];
    if (!isset($usuario)) {
        header('location: LoginPagi.php');
    }
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">SICADMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Zona de Control</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

           
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilidades</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilidades:</h6>
                        <a class="collapse-item" href="register-case.php">Registrar Ticket</a>
                        <a class="collapse-item" href="select-case.php">Consultar Tickets</a>
                        <a class="collapse-item" href="register-client.php">Registrar Clientes</a>
                        <a class="collapse-item" href="select-client.php">Consultar Clientes</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

          

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "Bienvenido a <strong>SICADMI</strong> | " ?></span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $usuario ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Opciones
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Iniciar sesión
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- DASCHBOARD -->

                    <div class="row justify-content-center">

                        <!-- Area registro -->
                        <div class="col-lg-8 mb-4 px-0">
                            <div class="card-header py-3 text-center">
                                <h3 class="m-0 font-weight-bold text-primary">Consultar Tickets</h3>
                            </div>
                            <form id="ticket">
                                <div class="input-group mb-3">
                                    <span class="input-group-text w-25 d-inline" id="basic-addon2">Identificacion</span>
                                    <input type="text" placeholder="Buscar" class="form-control" id="BuscarIDCases" aria-describedby="basic-addon1">

                                </div>

                                <div class="d-flex justify-content-center">
                                    <table class="table table-striped table-bordered table-hover mt-5 text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Ticket</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col">FechaInicio</th>
                                                <th scope="col">FechaFinal</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Cliente</th>
                                                <th scope="col">Observacion</th>
                                                <th scope="col">Total Pagar</th>
                                                <th scope="col">Factura</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TablaCases">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <!-- Content Row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- Modal Editar CLiente-->
            <div class="modal fade" id="ModalTickets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="width: 400px;">
                        <div class="row modal-header">
                            <div class="col-12 text-center">
                            <h3 class="modal-title" id="exampleModalLabel">Factura</h3>
                            </div>
                            
                            
                        </div>
                        <div class="modal-body m-0 row justify-content-center">

                            <div class="col-12 ms-4">
                                <form style="font-size: 15px;">

                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Id Tickets</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MIdTicket" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Descripcion</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MDescripcion" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Fecha Inicio</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MFechaI" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Fecha Final</label>
                                        </div>
                                        <div class="col-8"> 
                                            <label id="MFechaF" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Estado</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MEstado" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Cliente</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MCliente" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Observacion</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MObservacion" class="col-form-label"></label>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2 align-items-center">
                                        <div class="col-4">
                                            <label class="col-form-label font-weight-bold">Total Pagar</label>
                                        </div>
                                        <div class="col-8">
                                            <label id="MValor" class="col-form-label"></label>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="A btn btn-primary" data-bs-dismiss="modal" type="button" id="Pagar">Pagar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Content Wrapper -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SICADMI 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="php/CerrarSesion.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <script src="./js/proceso.js"></script>
        <script src="./js/alert.js"></script>
        <script>
            setInterval(MCase(''), 1000);
        </script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

