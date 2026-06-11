<?php
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
        $tempoUso = $capacidadeBateria / $consumoPorMinuto;
        return $tempoUso;
    }

    $retorno = calcularAutonomia(600, 7);
    $fim = round($retorno,5);
    echo $fim
?>