<?php include 'header.php';?>

<!-- Latest compiled and minified CSS -->


    <div id="contenido2-contacto">




        <div id="col-1-contacto">
            <h2 id="contactanos">CONT&Aacute;CTANOS</h2>
        </div>


    <div id="col-2-contacto">







           <?php
    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese servicio</span>';
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "info@axioscomunicacion.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto']; //Asunto
            $cuerpo = $_POST['mensaje']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

            if(mail($dest,$asunto,$cuerpo,$headers)){
                $result = '<div class="result_ok"><script type="text/javascript"> alert ("Tu mensaje se envio correctamente.");

                </script>Email enviado correctamente




                </div>';


                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
?>


<script src='funciones.js'></script>
<link rel='stylesheet' href='css/estilos.css'>

 <form class='contacto' method='POST' action=''>
            <div><label>Nombre</label><input  type='text' class='nombre' name='nombre' value='<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>'><?php if(isset($errors)){ echo $errors[1]; } ?></div>
            <div><label>Correo</label><input type='text' class='email' name='email' value='<?php if(isset($_POST['email'])){ $_POST['email']; } ?>'><?php if(isset($errors)){ echo $errors[2]; } ?></div>
            <div><label >¿Qué estás buscando?</label><input type='text' class='asunto' name='asunto' value='<?php if(isset($_POST['asunto'])){ $_POST['asunto']; } ?>'><?php if(isset($errors)){ echo $errors[3]; } ?></div>
            <div><label>Mensaje</label><textarea  style="  height: 150px"rows='6' class='mensaje' name='mensaje'><?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></textarea><?php if(isset($errors)){ echo $errors[4]; } ?></div>
            <div><input type='submit' value='Enviar Mensaje' class='boton' name='boton'></div>
            <?php if(isset($result)) { echo $result; } ?>
        </form>


     <div class="clearfix"></div>

         </div>

    </div>


             <div class="clearfix"></div>

<?php include 'footer.php';?>


<script>
      var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
      });
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

         <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->






        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>



    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true




      });


    });
    </script>
    <script type="text/javascript"></script>



    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>

    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>

  </body>

</html>
