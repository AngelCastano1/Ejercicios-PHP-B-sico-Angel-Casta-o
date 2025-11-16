<?php
    $nombreBuscado = $_GET["nombre"];
    $archivo = fopen("agenda.txt", "r");
    $encontrado = false;

    echo "<h2>Resultado de búsqueda</h2>";

    while (!feof($archivo)) {
        $linea = fgets($archivo);
        $datos = explode(" ", $linea);

        if (trim($datos[0]) == $nombreBuscado) {
            echo "<p>Contacto: " . $linea;
            $encontrado = true;
            break;
        }
    }
    fclose($archivo);

    if (!$encontrado) {
        echo "<p>Contacto no encontrado.</p>";
    }
    print "<br>";
    echo '<a href="form4.html">Volver a la agenda</a>';
?>
