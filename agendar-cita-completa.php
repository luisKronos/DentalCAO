<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />      
        <meta name="author" content="" />
        <link rel="shortcut icon" type="image/png" href="assets/img/logo-dentalcao.png"/>
        <title>Dental CAO</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
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
                <a class="navbar-brand mx-auto" href="index.php">
                  <div class="navbar-brand-img">
                    <img src="assets/img/logo-dentalcao-white.png" class="logo-color" style="height: 50px" />  
                  </div>                  
                </a><img src="assets/img/portfolio/thumbnails/5.jpg" style="height: 50px" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tratamientos.html">TRATAMIENTOS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="nosotros.html">NOSOTROS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contacto.html">CONTACTO</a></li>
                    </ul>
                </div>
            </div>

        </nav>
     	
        <!-- contacto section-->
        <section class="page-section reduce-bottom-padding text-white" id="contacto">
            <div class="container padding30">
                <div class="row text-center text-black">
                    <?php
                     if ($_SERVER["REQUEST_METHOD"]=="POST") {
                        if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['tel']) ) {
                            $name = $_POST['name'];
                            $email = $_POST['mail'];
                            $tel = $_POST['tel'];
                            
                            require 'PHPMailer/PHPMailerAutoload.php';

                            $mail = new PHPMailer;

                            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                            $mail->isSMTP();                                      // Set mailer to use SMTP                            
                            $mail->Host = 'mail.consultoriodentalcao.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = 'contacto@consultoriodentalcao.com';                 // SMTP username
                            $mail->Password = 'MiiA(Jo=5Ndn';                           // SMTP password
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port = 465;                                    // TCP port to connect to

                            $mail->setFrom('contacto@consultoriodentalcao.com', 'Contacto Dental CAO');                            
                            $mail->addAddress('dentalcaoespecialidades@gmail.com');               // Name is optional
                            $mail->addReplyTo('contacto@consultoriodentalcao.com', 'Contacto');
                            
                            $mail->isHTML(true);                                  // Set email format to HTML

                            $mail->Subject = 'Dental CAO WEB CITA';

                            if (isset($_POST['cita']) && isset($_POST['tratamiento']) && isset($_POST['date'])
                             && isset($_POST['hora']) && isset($_POST['comentario'])) {
                                $mail->Body = 'Nos ha contactado <b>'.$name.'</b>, con el correo '.$email.' y el celular <b>'.$tel.'</b>,
                                para el tratamiento: <b>'.$_POST['tratamiento'].'</b>, '.$_POST['cita'].' es su primera cita, para la fecha: '.$_POST['date'].' a las: '.$_POST['hora'].', el comentario adicional fue: -'.$_POST['comentario'].'- te recomendamos te pongas en contacto a la brevedad';

                            } else {
                                 $mail->Body = 'Nos ha contactado <b>'.$name.'</b>, con el correo '.$email.' y el celular <b>'.$tel.'</b>, te recomendamos te pongas en contacto a la brevedad';
                            }

                            
                            if ($mail->send()) {  
                            ?>                                                      
                                <h2 class="text-black">
                                    Tu cita ha sido correctamente enviada, espera a ser contactado para confirmación.
                                </h2>
                                <script>
                                     setTimeout(function(){
                                        window.location.href = 'http://consultoriodentalcao.com';
                                     }, 4000);
                                </script>
                            <?php
                            } else {
                                echo 'Message could not be sent.';
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                            }
                        }
                    }
                    ?>                    
                </div>
            </div>
        </section>
        
        <!-- Footer-->
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
         <script type="text/javascript">
          $(function () { 
            $(window).scroll(function () {  
               if ($(this).scrollTop() > 100) { 
                    $('.navbar-brand-img img').attr('src','assets/img/logo-dentalcao-menu.png');
                }
                if ($(this).scrollTop() < 100) { 
                    $('.navbar-brand-img img').attr('src','assets/img/logo-dentalcao-white.png');
                }
            })

        });

    </body>
</html>