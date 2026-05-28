<?php

$notas = [10,7,9,6];
$qtde = count($notas);
$valor = 0;
for ($i=0; $i <= $qtde-1 ; $i++) { 
    $valor = $valor + $notas[$i]; 
}
$media = $valor/$qtde;
echo $media;    
?>