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
            <a class="navbar-brand" href="#">DENTAL CAO</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Logout</a>
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
                            <?php
                     if ($_SERVER["REQUEST_METHOD"]=="POST") {
                        if (isset($_POST['comment'])) {
                            $comment = $_POST['comment'];
                                                            
                            require_once ('conexion.php');

                            $res = $conn->prepare('INSERT INTO reviews (url) '
                                        . 'VALUES (?)');
                                
                            $res->execute(array($comment));

                            if($res->rowCount() > 0) {                      
                            ?>
                            <h2 class="text-black">
                                    Has agregado una nueva valoración
                                </h2>
                                <script>
                                     setTimeout(function(){
                                        window.location.href = 'dash-admin.php';
                                     }, 2000);
                                </script>
                        <?php
                            
                        } else if ($_FILES["image"]["error"] > 0) {
                            $error = $_FILES["image"]["error"];
                        } else if (($_FILES["image"]["type"] == "image/jpeg") || 
                        ($_FILES["image"]["type"] == "image/jpg") || 
                        ($_FILES["image"]["type"] == "image/png") || 
                        ($_FILES["image"]["type"] == "image/pjpeg")) { 
                            
                            $rutaTemp = $_FILES['image']['tmp_name'];
                            $nombreImagen = 'promo.png';
                            
                            require_once ('conexion.php');
                            $rutaApp = Constants::SERVER_PATH.Constants::FOLDER_IMAGE.$nombreImagen;

                            $rutaDestino = Constants::FOLDER_IMAGE.$nombreImagen;

                            $filename = CompressImage::compress_image($rutaTemp, $rutaDestino, 100);

                            $buffer = file_get_contents($rutaDestino);
                                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                                header("Content-Type: application/octet-stream");
                                header("Content-Transfer-Encoding: binary");
                                header("Content-Length: " . strlen($buffer));
                                header("Content-Disposition: attachment; filename=$rutaDestino");

                            $res = $conn->prepare('UPDATE promo SET                
                            image = :image
                            WHERE id_image = :id_image');   
                            $id = 1;        

                            if($res->execute(array('image'=>$rutaApp,                                                
                                'id_image'=>$id))) {      
                            ?>
                                <h2 class="text-black">
                                    Se ha reemplazado la promoción del mes
                                </h2>
                                <script>
                                     setTimeout(function(){
                                        window.location.href = 'dash-admin.php';
                                     }, 5000);
                                </script>
                            
                             <?php
                                } else {
                            ?>

                                  <h2 class="text-black">
                                    was false
                                </h2>  
                                <?php
                            } 
                        }
                    }
                }
                    ?>
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