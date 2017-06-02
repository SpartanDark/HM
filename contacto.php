<?php

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $para = "correo@microsrreo.com";//Aqui va el correo del destinatario
        $asunto = "Nuevo comentario";
        $mensaje = "
        <table border='0' cellspacing='3' cellpadding='2'>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
        <td width='80%' align='left'>$nombre</td>
        <tr>
        <td align='left' bgcolor='#f0efef'><strong>E-mail:</strong></td>
        <td align='left'>$email</td>
        </tr>
        <tr>
        <td width='30%' align='left' bgcolor='#f0efef'><strong>Asunto:</strong></td>
        <td width='70%' align='left'>$asunto</td>
        </tr>
        <tr>
        <td align='left' bgcolor='#f0efef'><strong>Comentario:</strong></td>
        <td align='left'>$mensaje</td>
        </tr>
        </table>
        ";

        $headers = "From: #nombre <$email>\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if(mail($para, $asunto, $mensaje, $headers)){
            echo '<script type="text/javascript"> alert("Su mensaje se ha enviado correctamente");
            window.location.assign("index.html"); </script>';
        }else{
            echo '<script type="text/javascript"> alert("El comentario no pudo ser enviado, int&eacute;ntelo m&aacute;s tarde");
            window.location.assign("index.html"); </script>';
        }

    
?>