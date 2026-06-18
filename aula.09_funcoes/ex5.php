<?php

    $temperaturas = [24.5, 22.0, 25.5, 21.0];

    function calcularMediaTemperatura($temperaturas){
        $qtde = count($temperaturas);
        $soma = array_sum($temperaturas);
        $div = $soma / $qtde ;

        echo $div;
    }

    calcularMediaTemperatura($temperaturas);
?>