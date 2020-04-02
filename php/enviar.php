<?php
$destino = "infoplenumsoftmarina@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre:" . $nombre . "\nAsunto:" . $asunto . "\nCorreo:" . $email . "\nTeléfono:" . $telefono . "\nMensaje:" . $mensaje;
if (mail ($destino, "Contacto", $contenido)){
echo "<script type=\"text/javascript\">alert('Se ha enviado el mensaje'); window.location='../index.html';</script>";
}else{
echo "<script type=\"text/javascript\">alert('Hubo un problema al enviar el mensaje'); window.location='../index.html';</script>";

}


?>