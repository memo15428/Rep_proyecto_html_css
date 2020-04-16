<?php
    $destino = "miguel.mogollon@geofault.com";
    $nombre = $_POST["nombres"];
    $correo = $_POST["correos"];
    $mensaje = $_POST["mensajes"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino,"Proyecto",$contenido);
    header("Location:gracias.html");
?>