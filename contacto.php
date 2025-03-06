<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Configuración para el correo
    $to = "tucorreo@dominio.com"; // Cambia por tu correo electrónico
    $subject = "Nuevo mensaje desde la landing page";
    $message = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
    $headers = "From: no-reply@tusitio.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
