<?php
    $to = "comercial@goldenguards.com.ar";

    $subject = "Mensaje Web";
    $message = "Nombre: " . $_POST["nombre"] . "\n";
    $message .= "Telefono: " . $_POST["telefono"] . "\n";
    $message .= "Direccion: " . $_POST["direccion"] . "\n";
    $message .= "Mensaje:\n" . $_POST["mensaje"];
    $headers = "From: " . $_POST["email"];
    $returnURL = "https://goldenguards.com.ar#contact";
    $failURL = "https://goldenguards.com.ar/error.html";

    if ( mail($to, $subject, $message, $headers) ) {
        header('Location: '.$returnURL);
        die();
     } else {
        header('Location: '.$failURL);
        die();
     }
?>
