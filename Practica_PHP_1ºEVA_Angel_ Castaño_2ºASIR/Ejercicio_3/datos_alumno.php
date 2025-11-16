<?php
    $nombre = $_POST["nombre"];
    $telef = $_POST["telef"];
    $enseñanza = $_POST["enseñanza"];
    $modo = $_POST["modo"];

    if ($_POST["matriculado"] == "on") {
        $matriculado = "está matriculado";
    } else {
        $matriculado = "no está matriculado";
    }

    $texto = "El alumno $nombre, con teléfono $telef, $matriculado en un $enseñanza.";

    if ($modo == "pantalla") {
        echo "<p>$texto</p>";
    } else {
        $archivo = fopen("datos.txt", "a");
        fwrite($archivo, $texto . "\n");
        fclose($archivo);
        echo "<p>Datos guardados correctamente.</p>";
        echo '<a href="mostrar_datos.php">Mostrar archivo</a>';
    }
?>

