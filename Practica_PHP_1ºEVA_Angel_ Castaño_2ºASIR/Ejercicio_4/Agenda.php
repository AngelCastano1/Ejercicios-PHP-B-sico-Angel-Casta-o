<?php

    $nombre = $_POST["nombre"];
    $trabajo = $_POST["trabajo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccicon"]; 
    $otras = $_POST["otras"];

    $linea = $nombre . " " . $trabajo . " " . $telefono . " " . $direccion . " " . $otras . "\n";


    $archivo = fopen("agenda.txt", "a");
    fwrite($archivo, $linea);
    fclose($archivo);


    echo "<h2>Contacto guardado correctamente</h2>";
    echo "<p>Nombre: $nombre<br>";
    echo "Trabajo: $trabajo<br>";
    echo "Teléfono: $telefono<br>";
    echo "Dirección: $direccion<br>";
    echo "Otras: $otras</p>";

    echo '<a href="form4.html">Volver al formulario</a>';
?>
