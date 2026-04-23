<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5 - Tabela sem gambiarra</title>
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
            for ($linha = 1; $linha <= 2; $linha++){
                echo "<tr>";
                for ($coluna = 1;$coluna <= 3; $coluna++){
                    echo "<td>Linha $linha Coluna $coluna</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>