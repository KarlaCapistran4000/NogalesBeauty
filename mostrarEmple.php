<?php
$mysql= new mysqli ("localhost", "root","","nogalaesbeauty");
if ($mysql -> connect_error)
  die("No se conecto con la base de datos");

$registro = $mysql -> query("SELECT * FROM empleado WHERE IDempleado = '$_REQUEST[IDempleado]'") or die($mysql -> error);

if ($reg = $registro -> fetch_array()) 
{
  $strID = $reg['IDempleado'];
  $strnombre = $reg['Nombre'];
  $strapellido = $reg['Apellido'];
  $strpalergias = $reg['Alergias'];
  $strcelular = $reg['Celular'];
  $strEmail = $reg['Email'];
  $strcontraseña = $reg['Contraseña'];  
}
else
echo 'No existe este usuario';

$mysql ->close();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NogalesBeauty &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">NogalesBeauty<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html"><span>Principal</span></a></li>
                <li class="has-children">
                  <a href="modificar.html"><span>Servicios</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">Peinados</a></li>
                    <li><a href="#">Maquillajes</a></li>
                    <li><a href="#">Masajes</a></li>
                    <li><a href="#">Tratamientos</a></li>
                    <li class="has-children">
                      <a href="#">Depilaciones</a>
                      <ul class="dropdown">
                        <li><a href="#">Depilación con cera</a></li>
                        <li><a href="#">Depilación láser</a></li>
                        <li><a href="#">Depilación electrica</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="about.html"><span>Nosotros</span></a></li>
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li class="active"><a href="contact.html"><span>Contáctanos</span></a></li>
                <li class="active"><a href="login.html"><span>Cuenta</span></a></li>
                <li class="active"><a href="modificar.html"><span>EDITAR</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      
    </header>



  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Unete  <span class="typed-words">NogalesBeauty</span></h1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            <div class="p-5 bg-white" style="margin-top: -150px;">
             
              <form action= "empleado.html" method = "POST">
                            <h1> Empleado </h1> 

                <div class="row form-group">

                   <div class="col-md-4 mb-3 mb-md-0">
                      
                    <label class="text-black" for="IDempleado">IDempleado</label>
                    <input type="text" value= "<?php echo $reg['IDempleado'];?>" name ="IDempleado" class="form-control" required="required">
                    </div>
                  <div class="col-md-6 mb-3 mb-md-0">
                      
                    <label class="text-black" for="Nombre">Nombre</label>
                    <input type="text" value= "<?php echo $reg['Nombre'];?>" name ="Nombre" class="form-control" disabled = "disabled">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Apellido</label>
                    <input type="text" value= "<?php echo $reg['Apellido'];?>" name="Apellido" class="form-control" disabled = "disabled">
                  </div>
                </div>
                  
                  
                  <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="alergias">Alergías</label> 
                    <input type="alergias" value= "<?php echo $reg['Alergias'];?>" name="Alergias" class="form-control" disabled = "disabled">
                  </div>
                </div>
                  
                  <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="alergias">Domicilio</label> 
                    <input type="Domicilio" value= "<?php echo $reg['Domicilio'];?>" name="Domicilio" class="form-control" disabled = "disabled">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="celular">Celular</label> 
                    <input type="celular" value= "<?php echo $reg['Celular'];?>" name="Celular" class="form-control" disabled = "disabled">
                  </div>
                </div>
                
                  <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" value= "<?php echo $reg['Email'];?>" name="Email" class="form-control" disabled = "disabled">
                  </div>
                </div>
                  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="password">Contraseña</label> 
                    <input type="Contraseña" value= "<?php echo $reg['Contraseña'];?>" name="Contraseña" class="form-control" disabled = "disabled">
                  </div>
                </div>
                </div>   
                  <div class="row form-group">
                    <input type="submit" value="Buscar" class= "btn btn-pill btn-primary btn-md text-white">   
                  </div>
                  
                  <div class="row form-group">
                   <p data-aos="fade-up" data-aos-delay="100"><a href="modificar.html" class="btn btn-primary btn-pill"> Regresar</a></p>
                 </div>

              </form>
            </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">2875 Plaza Tecnológico, Nogales, Sonora, México.</p>

              <p class="mb-0 font-weight-bold">Celular</p>
              <p class="mb-4"><a href="https://api.whatsapp.com/send?phone=526319990907">+52 631 999 0907</a></p>

              <p class="mb-0 font-weight-bold">Correo de contacto</p>
              <p class="mb-0"><a href="#">karlaUTN@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Más información</h3>
              <p>Para hacer una cita o reservación debes llenar todos los campos indicados a continuación para poder atenderte mejor. Una vez realizada tu reserva nos estaremos comunicando contigo para confirmar la misma.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
    

    <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/hero_bg_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Hasta 30% de descuento</h2>
            <p class="mb-0 text-white lead">Tiempo limitado, solo por el mes de Junio, agenda una cita con nosotros y pregunta por nuestros servicios</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="contact.html" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Contáctanos</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Nosotros</h2>
                <ul class="list-unstyled">
                  <li><a href="contact.html">Citas</a></li>
                  <li><a href="services.html">Servicios</a></li>
                  <li><a href="blog-single.html">Testimonios</a></li>
                  <li><a href="contact.html">Contáctanos</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Productos</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Champús y acondicionadores.</a></li>
                  <li><a href="#">Crema de calidad.</a></li>
                  <li><a href="#">Productos de estilismo y sueros.</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Información</h2>
                <ul class="list-unstyled">
                  <li><a href="politicas.html">Política de Cookies</a></li>
                  <li><a href="politicas.html">Política de privacidad</a></li>
                  <li><a href="about.html">NogalesBeauty</a></li>
                  <li><a href="contact.html">Contáctanos</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Síguenos en...</h2>
                  <ul>
                      <li> <a href="https://www.facebook.com/profile.php?id=100005123372743"> <span class= "icon-facebook"></span></a>  </li>
                      <li> <a href="https://www.instagram.com/capi._.99/"> <span class= "icon-instagram"></span></a>  </li>
                      <li> <a href="https://twitter.com/explore"> <span class= "icon-twitter"></span></a>  </li>
                      <li> <a href="https://api.whatsapp.com/send?phone=526319990907"> <span class= "icon-whatsapp"></span></a>  </li>                    </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Agenda con nosotros</h2>
            <p>Dicen que la felicidad no se puede comprar, pero todos mis clientes salen con una sonrisa del salón.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="login.html" class="btn btn-primary btn-pill">Agenda</a></p>

          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados |  Hecha <i class="icon-heart text-danger" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank" >ColorLib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["in touch with us"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>
</html>