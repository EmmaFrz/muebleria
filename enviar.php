<?php
 $mensaje="Nueva consulta desde el sitio"."\r\n";
 $mensaje.= "\nNombre: ". $_POST['nombre']."\r\n";
 $mensaje.= "\nEmail: ". $_POST['email']."\r\n";
 $mensaje.= "\nTelefono: ". $_POST['telefono']."\r\n";
 $mensaje.= "\nMensaje: \n".$_POST['mensaje']."\r\n";
 $destino= "livingtotal@gmail.com";
 $remitente = $_POST['email'];
 mail($destino,"Consulta desde la web",$mensaje,"FROM: $remitente");
			
header("Location:index.html");
?>
