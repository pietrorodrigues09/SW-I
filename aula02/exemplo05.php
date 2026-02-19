<?php
    $dia = "sabado";
    switch($dia){
        case"segunda":
                echo"Inicio da semana!";
                break;
        case"sexta":
                echo"Fim de semana chegando!";
                break;
        case"sabado" || "domingo":
            echo"Fim de semana!";
            break;
        default:
                echo"Dia normal.";
    } 
?>