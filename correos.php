<?php
      
      $destinatario = 'estudiohndya@gmail.com';


        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $telefno = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $header = "Enviado desde la Pagina Estudio Juridico";
        $mensajeCompleto = $mensaje . "\nAtentamente: " . $name;
              
        
       mail($destinatario, $asunto, $mensajeCompleto, $header);
       echo "<script>alert('correo enviado exitosamente')</script>";
       echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
