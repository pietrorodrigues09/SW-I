<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <?php
        function msg(){
            echo "Mensagem de boas vindas!!  <br>";
        }
      
        for ($i=0; $i < 10; $i++) { 
            msg();
        }
    ?>
</body>
</html>