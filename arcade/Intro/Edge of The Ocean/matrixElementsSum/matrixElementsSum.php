<?php

function matrixElementsSum($matrix) {
    $linhas = count($matrix);
    $colunas = (count($matrix, 1) - $linhas) / $linhas;
    $soma = 0;
    for($j = 0; $j < $colunas; $j++) {
        for($i = 0; $i < $linhas; $i++) {
            if($matrix[$i][$j] == 0) {
                break;
            } else {
                $soma += $matrix[$i][$j];
            }
        }
    }
    return $soma;
}
