<?php 
      

$destino = $_POST['email'];
$servicio = "servicio";

$comentario ="

       Nombre: $_POST[nombre]
       Email: $_POST[email]
       Telefono: $_POST[telefono]
       Direccion: $_POST[direccion]
       Empresa: $_POST[empresa]
       Servicio: $_POST[servicio]


";

$headers = 'From:'.$_POST['email']."\r\n".
    
           'Reply-To:'.$_POST['email']."\r\n".

           'X-Mailer:PHP/'. phpversion();

         mail($destino,$servicio,$comentario,$headers);
         

         echo "Se envio el mensaje";  


?>