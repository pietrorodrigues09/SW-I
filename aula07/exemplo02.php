<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2 - Tabela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabela de Alunos</h1>
    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
        <?php
            for ($i = 1; $i <= 2; $i++){
                echo "<tr>";
                echo "<td>Linha $i Coluna 1</td>";
                echo "<td>Linha $i Coluna 2</td>";
                echo "<td>Linha $i Coluna 3</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>