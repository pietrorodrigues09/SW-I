<?php
    $cores = ["Rosa","Marrom","Gelo"];
    array_push($cores,"Laranja");
    array_shift($cores);

    foreach ($cores as $valor) {
    echo "$valor <br>";
}
?>