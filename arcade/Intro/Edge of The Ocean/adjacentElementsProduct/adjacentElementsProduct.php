<?php

function adjacentElementsProduct($inputArray) {
    $largestProduct = -1000;
    for($i = 0; $i < count($inputArray) - 1; $i++) {
        $product = $inputArray[$i] * $inputArray[$i + 1];
        if($product > $largestProduct) {
            $largestProduct = $product;
        }
    }
    return $largestProduct;
}
