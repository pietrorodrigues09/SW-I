<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@gmail.com
    //senha: 1234
    

    if ($email == 'adm@gmail.com' && $senha == '1234') {
        //vamos para a área restrita
        //echo 'vamos para a área restrita';
        $nome = "PietoRodrigues";

        header('Location: restrita.php?nome='.$nome);
    } else {
        //volta para o forms
        //echo 'volta para o forms';
        header('Location: erro.php');
    }
    
?>