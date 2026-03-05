<?php
//Exercicio 14
    $a = 4;
    $b = 8;
    $r = (($a==$b) || ($a+$b==12));
    echo $r;
//Resultado: verdadeiro 
?>

<?php 
//Exercício 15
    $x = 4;
    $y = 8;
    $z = (($x==$y) && ($x+$y==12));
    echo $z;
//Resultado : falso
?>

<?php
//Exercício 16
    $a = 5;
    $b = 10;
    $r = (($a<=$b) XOR (2*$a==$b));
    echo $r;
?>