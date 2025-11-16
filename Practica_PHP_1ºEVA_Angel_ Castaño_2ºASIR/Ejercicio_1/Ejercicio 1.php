<?php

    $ancho = $_POST["ancho"];
    $alto = $_POST["alto"];

    if ($ancho > 0 && $ancho <= 100 && $alto > 0 && $alto <= 100) {
        echo "Alto: $alto<br>";
        echo "Ancho: $ancho<br><br>";

        for ($i = 0; $i < $alto; $i++) {
            for ($j = 0; $j < $ancho; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    } else {
        echo "Los valores deben estar entre 1 y 100.";
    }

?>
