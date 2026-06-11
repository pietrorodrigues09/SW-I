<?php
    function verificarAcesso($senhaDigitada){
        if ($senhaDigitada = 123456) {
            echo "Acessoa Válido";
        } else {
            echo "Acesso Negado";
        }  
    }

    verificarAcesso(123456);
    echo"<br>";
    verificarAcesso(1234567)
?>