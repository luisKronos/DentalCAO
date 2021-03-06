<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once ('admin/conexion.php');?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />      
        <meta name="author" content="" />
        <link rel="shortcut icon" type="image/png" href="assets/img/logo-dentalcao.png"/>
        <title>Dental CAO</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>   
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

        <link href="https://fontawesome.com/icons/facebook?style=brands" rel="stylesheet">
        <link href="https://fontawesome.com/icons/instagram?style=brands" rel="stylesheet">
        <link href="https://fontawesome.com/icons/pinterest?style=brands" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

       
    </head>
    <body id="page-top">
      <img src="assets/img/logo_dental_enlaces.jpeg" style="display: none;" />
      <a href="https://wa.me/5215534832172" class="whatsapp" target="_blank">
        <img src="assets/img/logo_whats.png" style="height: 50px; position: fixed; right: 20px; bottom: 20px; z-index: 10" />        
      </a>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand mx-auto" href="#page-top">
                  <div class="navbar-brand-img">
                    <img src="assets/img/logo-dentalcao-white.png" class="logo-color" style="height: 50px" />  
                  </div>                  
                </a>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tratamientos.html">TRATAMIENTOS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="nosotros.html">NOSOTROS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contacto.html">CONTACTO</a></li>
                    </ul>
                </div>
            </div>

        </nav>

        <!-- Masthead-->
        <header class="masthead" id="about">
            <div class="container h-100">
                <div class="container">                
                    <div class="row h-100">
                        <div class="row">
                            <div class="col-md-12" style="margin-top: 3em">
                                <h1 class="text-white ">Tu sonrisa no es para tanto,<br><b>ES PARA SIEMPRE</b></h1>
                            </div>     
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-5 align-self-baseline">
                                <p class="text-white-75 font-weight-light mb-5">Es momento de invertir en esa primera
                                impresión, agenda tu cita con nosotros y realizaremos un check up e historial clínico</p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="container">                                                    
                                <div class="col-lg-12">
                                    <form action="agendar-cita.php" method="POST">
                                      <div class="form-group align-items-center">
                                        <div class="form-group row">
                                          <label class="sr-only" for="inlineFormInputGroup">Campo requerido</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text " id="btn-blue-input">NOMBRE</div>
                                            </div>
                                            <input type="text" name="name" class="form-control" id="inlineFormInputGroup" placeholder="Nombre completo" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="sr-only" for="inlineFormInputGroup">Campo requerido</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text" id="btn-blue-input">EMAIL</div>
                                            </div>
                                            <input type="email" name="mail" class="form-control" id="inlineFormInputGroup" placeholder="mail@gmail.com" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="sr-only" for="inlineFormInputGroup">Campo requerido</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text" id="btn-blue-input">TELÉFONO</div>
                                            </div>
                                            <input type="tel" name="tel" class="form-control" id="inlineFormInputGroup" maxlength="10" placeholder="(10 dígitos)" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="sr-only" for="inlineFormInputGroup">Campo requerido</label>
                                          <div class="input-group mb-2">
                                            <button type="submit" class="btn btn-primary mb-2" id="btn-blue-input-submit">AGENDAR CITA</button>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </header>
     	
        <!-- tratemientos section-->
        <section class="page-section reduce-bottom-padding text-black" id="tratemientos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 blue-text">Tratamientos</h2>
                        <hr class="divider light my-4" />
                        <p class=" mb-4">Conoce los diferentes tratamientos que ofrecemos en Dental CAO, somos especialistas en ortodoncia, odontopediatría, periodoncia, diseño de sonrisa, atención a urgencias, entre otros.</p>                        
                    </div>
                </div>
                
                    <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                        
                          <a class="carousel-control-prev" href="#carousel-example-multi" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-multi" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    
                          <div class="carousel-inner v-2" role="listbox">
                            

                            <div class="carousel-item active">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-urgencias-dentales.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Urgencias dentales</h3>
                                    <p class="card-text">Ninguna enfermedad en tu boca</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="urgencias-dentales.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-ortodoncia.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Ortodoncia</h3>
                                    <p class="card-text">Dientes alineados y en armonía</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="ortodoncia.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-blanqueamiento.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Blanqueamiento dental</h3>
                                    <p class="card-text">Dientes más blancos y brillantes</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="blanqueamiento-dental.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-diseno-sonrisa.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Diseño de sonrisa</h3>
                                    <p class="card-text">Mejora tu sonrisa</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="diseno-de-sonrisa.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-odontopediatria.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Odontopediatría</h3>
                                    <p class="card-text">Atención personalizada para niñ@s</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="odontopediatria.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-periodoncia.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Periodoncia</h3>
                                    <p class="card-text">Cuidado de la encia</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="periodoncia.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-protesis-dental.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Prótesis dental</h3>
                                    <p class="card-text">Recupera tus dientes</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="protesis-dental.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-cirugia.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Cirugía</h3>
                                    <p class="card-text">Adiós muelas del juicio</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="cirugia.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>                          
                          <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-endodoncia.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Endodoncia</h3>
                                    <p class="card-text">Adiós al dolor dental</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="endodoncia.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>                        
                          <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-implantes.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Implantes</h3>
                                    <p class="card-text">Dientes firmes y sonrisa nueva</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="implantes.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>                        
                          <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-patologia-bucal.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Patología bucal</h3>
                                    <p class="card-text">Ninguna enfermedad en tu boca</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="patologia-bucal.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-resinas.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Resinas dentales</h3>
                                    <p class="card-text">Ninguna enfermedad en tu boca</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="resinas.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="carousel-item">
                              <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                  <img class="card-img-top" src="assets/img/slider/thumb-incrustaciones.jpg"
                                    alt="Card image cap">
                                  <div class="card-body">
                                    <h3 class="card-title font-weight-bold">Incrustraciones</h3>
                                    <p class="card-text">Ninguna enfermedad en tu boca</p>
                                    <a class="btn btn-primary btn-md btn-rounded btn-right" href="incrustraciones.html">Más info</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                    </div>                                 
                </div>
            </div>
            <div class="container-fluid text-center">
              <?php 
                $stmt = $conn->prepare('SELECT * FROM promo');
                $stmt->execute();      
                if ($stmt->rowCount() > 0) {
                    $imageArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($imageArray as $row) {                                
              ?>
              <img src=<?php echo '"'.$row['image'].'"' ?> class="img-fluid" alt="Promo del mes">
            <?php }
              } ?>
            </div>
        </section>
        <!-- Services section-->
        <section class="page-section" id="nosotros-index">
            <div class="container">
                <h2 class="text-center mt-0 blue-text">Garantía Dental CAO</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="mb-4">
                              <img src="assets/img/capacitacion-constante-8.png" class="img-fluid" alt="Promo del mes">
                            </i>
                            <h3 class="h4 mb-2 green-text">Capacitación constante</h3>
                            <p class="text-black mb-0">Mantenimiento a nuestro equipo de trabajo actualizado para brindarte el mejor servicio de salud bucal.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="mb-4">
                              <img src="assets/img/equipo-especializado-8.png" class="img-fluid" alt="Promo del mes">
                            </i>
                            <h3 class="h4 mb-2 green-text">Equipo especializado</h3>      
                            <p class="text-black mb-0">Contamos con tecnología de vanguardia garantizándole la mejor efectividad en tu tratamiento odontológico.</p>                                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="mb-4">
                              <img src="assets/img/servicio-cliente-8.png" class="img-fluid" alt="Promo del mes">
                            </i>
                            <h3 class="h4 mb-2 green-text">Servicio al cliente</h3>    
                            <p class="text-black mb-0">Ofreciendo un servicio personalizado, oportuno y adecuado a tu estilo de vida, los 365 días de año.</p>                                              
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="mb-4">
                              <img src="assets/img/etica-profesional-8.png" class="img-fluid" alt="Promo del mes">
                            </i>
                            <h3 class="h4 mb-2 green-text">Ética profesional</h3>    
                            <p class="text-black mb-0">Brindando a información suficiente es, durante y después de tu tratamiento para que tomes la mejor decisión.</p>                                                    
                        </div>
                    </div>
                    <div class="col-md-12 text-center margin-top-2em">
                        <a class="btn btn-primary btn-md btn-rounded" href="nosotros.html">Conocer especialistas</a>
                    </div>
                </div>
                    <p class="margin-top-4em">
                         <h2 class="text-center mt-0 blue-text">Horario de atención</h2>
                         <div class="text-center margin-top-2em">
                             <p>Lunes a viernes de 10am a 8pm,<br>
                             Sábado de 9am a 5pm y<br>
                             Domingo de 10am a 2pm</p>     
                             <p>DURANTE LA CONTINGENCIA SE ATIENDE ÚNICAMENTE CON PREVIA CITA</p>   
                         </div>                     
                    </p>
                <!-- Instagram Section -->
                <div class="col-12 margin-top-4em">
                    <div class="conteiner" style="overflow-y: scroll; height: 600px">
                        <h2 class="text-center mt-0 blue-text">Así es el día a día con nosotros</h2>                        
                        <div id="pixlee_container"></div>
                    </div>                        
                </div>
                
                <!-- Rating Section -->
                <div class="col-12 margin-top-4em">
                    <div class="conteiner text-center">
                        <h2 class="text-center mt-0 blue-text">Pacientes felices</h2>

                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                              <?php 
                                $stmt = $conn->prepare('SELECT * FROM reviews ORDER BY id_review DESC');
                                $stmt->execute();   
                                $first = 1;   
                                if ($stmt->rowCount() > 0) {
                                    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($comments as $row) {                                
                              ?>
                              <div class=<?php if($first == 1) { echo '"carousel-item active"';} else { echo '"carousel-item"';} ?>>
                                <?php echo $row['url']; ?>                              
                              </div>
                              <?php                       
                                  $first = 2;        
                                }
                              }
                              ?>
                              

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                      </div>                                                                  
                  </div>    
                </div>                
              </div>

            </div>
        </section>    

        <footer class="bg-light py-5" id="footer-mobile">
            <div class="container">
                <div class="row">
                  <div class="col-lg-1 text-center">
                        <a href="https://www.facebook.com/dentalcao1/" class="text-white social-media" target="_blank"><i class="fab fa-facebook"></i></a>

                        <a href="https://www.instagram.com/dental_cao/" class="text-white margin-left-icon social-media" target="_blank"><i class="fab fa-instagram"></i></a>

                        <a href="https://pin.it/1FZWuqM" class="text-white margin-left-icon social-media" target="_blank"><i class="fab fa-pinterest"></i></a>

                    </div>
                    <div class="col-lg-12 text-center font-19 margin-top-form-icons"> 
                        <a href="nosotros.html" class="text-white">Nosotros</a>
                    </div>                    
                    <div class="col-lg-12 text-center font-19"> 
                        <a href="contacto.html" class="text-white">Contacto</a>
                    </div>                    
                    <div class="col-lg-12 text-center font-19"> 
                        <a href="tratamientos.html" class="text-white">Tratamientos dentales</a>
                    </div>   
                    <div class="col-lg-12 text-center font-19 text-white margin-top-pagos"> 
                        Formas de pago
                    </div>    
                    <div class="col-lg-12 text-center text-white font-weight-bolder font-10">
                        EFECTIVO
                    </div>
                    <div class="col-lg-12 text-center text-white font-weight-bolder font-10">
                        TARJETA DE CRÉDITO 
                    </div>
                    <div class="col-lg-12 text-center text-white font-weight-bolder font-10">
                        (9 MESES SIN INTERESES CON VISA Y MASTERCARD)
                    </div>
                    <div class="col-lg-12 text-center margin-top-pagos">
                      <img src="assets/img/visa.png" class="img-fluid-15" alt="Mastercard">  

                      <img src="assets/img/mastercard.png" class="img-fluid-15" alt="Debito"> 

                       <img src="assets/img/amex.png" class="img-fluid-15" alt="American Express">  

                      <img src="assets/img/cash.png" class="img-fluid-15" alt="Efectivo">  
                    </div>
                </div>
            </div>
        </footer>

        <footer class="bg-light py-5" id="footer-desk">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 font-19">
                        <a href="nosotros.html" class="text-white">Nosotros</a>
                    </div>
                    <div class="col-lg-1 ">

                    </div>
                    <div class="col-lg-6 text-white font-19">
                        Tratamientos dentales
                    </div>
                    <div class="col-lg-3 text-white font-19">
                        Formas de pago
                    </div>
                </div> 

                <div class="row">
                    <div class="col-lg-2 font-19">
                        <a href="contacto.html" class="text-white">Contacto</a>
                    </div>
                    <div class="col-lg-2 font-14">
                        <a href="blanqueamiento-dental.html" class="text-white">Blanqueamiento dental</a>
                    </div>
                    <div class="col-lg-2 font-14">
                        <a href="protesis-dental.html" class="text-white">Prótesis dental</a>
                    </div>
                    <div class="col-lg-3 font-14">
                        <a href="resinas.html" class="text-white">Resinas dentales</a>
                    </div>
                    <div class="col-lg-3 text-white font-weight-bolder font-14">
                        EFECTIVO
                    </div>
                </div> 

                 <div class="row text">
                    <div class="col-lg-1 text-center">
                        <a href="https://www.facebook.com/dentalcao1/" class="text-white" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="col-lg-1 text-center"></div>
                    <div class="col-lg-2 font-14">
                        <a href="diseno-de-sonrisa.html" class="text-white">Diseño de sonrisa</a>
                    </div>
                    <div class="col-lg-2 font-14">
                        <a href="cirugia.html" class="text-white">Cirugía</a>
                    </div>
                    <div class="col-lg-3 font-14">
                        <a href="incrustraciones.html" class="text-white">Incrustraciones</a>
                    </div>
                    <div class="col-lg-3 text-white">
                        
                    </div>
                </div> 

                 <div class="row">
                    <div class="col-lg-1 text-center">
                        <a href="https://www.instagram.com/dental_cao/" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-1 text-center"></div>
                    <div class="col-lg-2 font-14">
                        <a href="ortodoncia.html" class="text-white">Ortodoncia</a>
                    </div>
                    <div class="col-lg-2 font-14">
                        <a href="endodoncia.html" class="text-white">Endodoncia</a>
                    </div>
                    <div class="col-lg-3 font-14">
                        <a href="urgencias-dentales.html" class="text-white">Urgencias dentales</a>
                    </div>           
                    <div class="col-lg-3 text-white font-weight-bolder font-14">
                        TARJETA DE CRÉDITO 
                    </div>     
                </div> 

                 <div class="row">
                    <div class="col-lg-1 text-center">
                        <a href="https://pin.it/1FZWuqM" class="text-white" target="_blank"><i class="fab fa-pinterest"></i></a>
                      </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2 font-14">
                      <a href="odontopediatria.html" class="text-white">Odontopediatría</a>
                        
                    </div>                
                    <div class="col-lg-2 font-14">
                      <a href="implantes.html" class="text-white">Implantes</a>
                    </div> 
                    <div class="col-lg-2 font-14">
                      
                    </div>   

                                                       
                    </div>

                    <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2 font-14">
                        <a href="periodoncia.html" class="text-white">Periodoncia</a>
                    </div>  
                    <div class="col-lg-2 font-14">
                      <a href="patologia-bucal.html" class="text-white">Patología bucal</a>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 text-white font-weight-bolder font-14">
                      (9 MESES SIN INTERESES CON VISA Y MASTERCARD)
                      <div class="row">
                        <div class="col-lg-6">
                          <img src="assets/img/visa.png" class="img-fluid-60" alt="VISA">  
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/img/mastercard.png" class="img-fluid-60" alt="Mastercard">  
                        </div>                        
                      </div>
                      <p></p>
                      <div class="row">
                        <div class="col-lg-6">
                          <img src="assets/img/amex.png" class="img-fluid-60" alt="American Express">  
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/img/cash.png" class="img-fluid-60" alt="Efectivo">  
                        </div>                        
                      </div>              
                                     
                      </div>
                      
                </div>
            </div>
        </footer>
        <footer class="bg-gray-custom py-5">
            <div class="container">
                <div class="small text-center text-muted">Dental CAO. Copyright 2020.<br>Normandía 36, Carmen, Benito Juárez, 03550 Ciudad de México, CDMX.<br>WhatsApp: 55 34 83 21 72 | Teléfono local: 71 55 25 92 <br> <a href="aviso-de-privacidad.html">Aviso de privacidad</a></div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- start INSTAGRAM FEED-->
        <div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'EIoU7VMH-KL7QqUoz9jh'});Pixlee.addSimpleWidget({widgetId:'26885'});};</script><script src="//instafeed.assets.pxlecdn.com/assets/pixlee_widget_1_0_0.js"></script>
        <!-- start Caruosel -->
        <script>
         $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<1;i++) {
            next=next.next();
            if (!next.length) {
              next=$(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
          }
        });
        </script>
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>
