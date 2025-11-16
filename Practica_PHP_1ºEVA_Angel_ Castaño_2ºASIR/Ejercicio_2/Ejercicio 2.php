<?php
    echo "<h1>JUEGO DE DADOS</h1>";
    echo "<h2>JUGADOR 1</h2>";

    $sumaLinea1 = 0;
    $sumaLinea2 = 0;

    // Jugador 1
    for ($i = 0; $i < 5; $i++){
        $dadoFila1 = rand(1,6);
        echo "<img src='./img/$dadoFila1.jpg' width='100px'>";
        $sumaLinea1 += $dadoFila1; 
    }

    echo "<h2>JUGADOR 2</h2>";

    // Jugador 2
    for ($i = 0; $i < 5; $i++){
        $dadoFila2 = rand(1,6);
        echo "<img src='./img/$dadoFila2.jpg' width='100px'>";
        $sumaLinea2 += $dadoFila2; 
    }

    if ($sumaLinea1 > $sumaLinea2){
        echo "<p>En conjunto, ha ganado el Jugador 1</p>"; 
    } elseif ($sumaLinea2 > $sumaLinea1){
        echo "<p>En conjunto, ha ganado el Jugador 2</p>";
    } else {
        echo "<p>Empate</p>";
    }
?>

