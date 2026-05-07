<?php
$produtos = [
    [
        "nome" => "Anel",
        "preco" => 7.5,
        "categoria" => "Acessório"
    ],
    [
        "nome" => "Calça",
        "preco" => 249.99,
        "categoria" => "Vestuário"
    ],
    [
        "nome" => "Tênis",
        "preco" => 499.99,
        "categoria" => "Esportivo"
    ],
    [
        "nome" => "Fone",
        "preco" => 20.99,
        "categoria" => "Eletrônico"
    ]
];

$cores_categorias = [
    "Eletrônico" => "#5969ff",
    "Acessório" => "#b61b5c",
    "Vestuário" => "#125891",
    "Esportivo" => "#2baa0c",
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Tabela de produtos</title>
    <style>
        table {
            border: 1px solid black;
            background-color: black;
            border-radius: 5px;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        }

        table th{
            background-color: white;
        }
    </style>
</head>

<body>
    <h1>Exercício 03 - Tabela de produtos</h1>
    <table>
        <tr>
            <th>Produto</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
        <?php
        foreach ($produtos as $produto) {
            $categoriaAtual = $produto['categoria'];
            $corFundo = $cores_categorias[$categoriaAtual];
            echo "<tr style='background-color: $corFundo !important;'>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>