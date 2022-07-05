<?php
    $to = "nghernandez@ngcomputers.com.ar";

    $subject = "Mensaje Web";
    $message = "Nombre: " . $_POST["nombre"] . "\n";
    $message .= "Teléfono: " . $_POST["telefono"] . "\n";
    $message .= "Dirección: " . $_POST["direccion"] . "\n";
    $message .= "Mensaje:\n" . $_POST["mensaje"];
    $headers = "From: " . $_POST["email"];
    $returnURL = "https://golden.ngcomputers.com.ar#contact";
    $failURL = "https://golden.ngcomputers.com.ar/error.html";

    if ( mail($to, $subject, $message, $headers) ) {
        header('Location: '.$returnURL);
        die();
     } else {
        header('Location: '.$failURL);
        die();
     }
?>
