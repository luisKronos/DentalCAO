<?php
session_start();
if (isset($_SESSION['AdminSesion'])) {
    $sesion = $_SESSION['AdminSesion'];

}else{
    echo "<script> 
        window.location.replace('index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dental CAO Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">DENTAL CAO</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">PROMO</div>
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Actualizar imagen</a>

                        </div>                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                            <h1>Actualizar promo del mes</h1>
                            <p>(se recomienda una imagen de éstas medidas: 1920 × 1080)</p>
                                <br>
                                <form action="uploadinfo.php" method="POST" enctype="multipart/form-data">
                                <!-- El input para seleccionar los archivos, fíjate en su id -->
                                    <input  type="file" id="seleccionArchivos" name="image" accept="image/*" required>                        
                                <br><br>
                                <div class="row">
                                    <input class="boton_personalizado" type="submit" value="Actualizar">     
                                 </div>
                                <br><br>
                                <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                                <img id="imagenPrevisualizacion" width="30%" height="30%">
                                
                                <script src="js/scripts1.js"></script>
                                 <br>
                                 
                                </form> 
                                
                                <style type="text/css">
                                  .boton_personalizado{
                                    text-decoration: none;
                                    padding: 10px;
                                    font-weight: 200;
                                    font-size: 20px;
                                    color: #ffffff;
                                    background-color: #1883ba;
                                    border-radius: 6px;
                                    border: 2px solid #0016b0;
                                    margin-left: 1em;
                                  }
                                </style>
                    </div>
                    <hr>
                    <div class="container-fluid" style="margin-top: 4em">
                        <div class="row">
                            <form class="row" action="uploadinfo.php" method="POST">
                            <div class="col-lg-8">
                                <input type="text" name="comment" class="form-control" placeholder="URL de comentario" required>
                            </div>
                            <div class="col-lg-3">
                                <input type="submit"  class="boton_personalizado" value="Agregar review">
                            </div>
                            </form>               
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                          
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>
