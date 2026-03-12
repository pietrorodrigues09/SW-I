<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];
        //echo "O nome é: $nome"
        $ano_atual = date('d D');
        //echo $ano_atual;
        $ano = $ano_atual - $idade;
    ?>

    <p>O nome digitado é:  <?php echo $nome; ?></p>
    <p>A idade digitada é:  <?php echo $email; ?></p>
    <p>O email digitado é:  <?php echo $idade; ?></p>
    <p>O ano de nascimento é  <?php echo $ano; ?></p>
</body>
</html>