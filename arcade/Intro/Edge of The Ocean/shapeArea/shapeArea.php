<?php 

function shapeArea($n) {
  $eixo = (2 * $n) - 1;
  $somaQuadrado = $eixo * $eixo;
  $area = ($n * $n) * 2;
  return $area - $eixo;
}
