<?php
$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];





function classificarAlunos($notas) {

    $aprovados = 0;
    $reprovado = 0;
    $recuperacao = 0;

    foreach ($notas as $indice =>$valor) {
        if ($valor >= 7) {
             $aprovados++;
             $status = "Aprovado";
        } elseif ($valor >= 5) {
            $recuperacao++;
            $status = "Recuperação";
        } else {
            $reprovado++;
            $status = "Reprovado";
        }
         echo "Aluno " . ($indice + 1) . ", Nota: $valor, Situação: $status <br>";
    }
    $media = array_sum($notas) / count($notas);
    if ($media > 7) {
        echo "Turma com bom desempenho";
    } else {
        echo"Turma deixou a desejar";
    }
    

    echo "<hr>";
    echo "Resumo da turma: <br>";
    echo 'Quantidades de alunos aprovados: ' .$aprovados. "<br>" ;
    echo 'Quantidades de alunos em recuperação: ' .$recuperacao. "<br>" ;
    echo 'Quantidades de alunos reprovados: ' .$reprovado. "<br>" ;
    echo 'Média da turma '.$media;
    return [
    'aprovados' => $aprovados,
    'recuperacao' => $recuperacao,
    'reprovados' => $reprovados,
    'media' => $media
     ];

}


classificarAlunos($notas);
?>