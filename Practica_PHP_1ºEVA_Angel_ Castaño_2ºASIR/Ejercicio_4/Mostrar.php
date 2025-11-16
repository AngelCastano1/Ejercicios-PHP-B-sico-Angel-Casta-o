<?php
    $archivo = "agenda.txt";
    $contenido = file_get_contents($archivo);
    
    echo  "<pre>" .$contenido . "</pre>";
?>