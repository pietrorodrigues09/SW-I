<?php
    // function msg($periodo){
    //     if ($periodo == "manhã") {
    //         echo "Bom Dia";
    //     } else {
    //         if ($periodo == "tarde") {
    //             echo "Boa Tarde";
    //         } else {
    //            if ($periodo == "noite") {
    //             echo "Boa Noite";
    //            } else {
    //             echo "INVÁLIDO";
    //            }
               
    //         }           
    //     }
    
    // }
    // msg('abacaxi')
    function msg($periodo){
        switch ($periodo) {
        case 'manhã':
            echo "Bom Dia";
            break;

        case 'tarde':
            echo "Boa Tarde";
            break;

        case 'noite':
            echo "Boa Noite";
            break;
        
        default:
            echo "Inválido";
            break;
        }
    }
    msg('manhã')
    

?>