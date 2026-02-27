<?php
    $x = 4.3;
    $y = 3.5;
    $z = "9.9";
    $n1 = (int) $x + $y;
    echo   $n1;
    echo  "<br>";
    $n2 = (int) ($x + $y);
    echo $n2;
    echo  "<br>";
    
    $n3 = (float) ($y + $z);
    echo  $n3;
    echo "<br>";
    
?>

<?php
   // $a = "Casal 20";
   // $b = 10;
   // $c = $a + $b;
   // echo $c
?>

<?php
    $pre = "hiper";
    echo "${pre}texto";
?>

<?php
    $x = “P”;
    $y = “H”;
    $z = "$x$y$x";
    echo $z
?>