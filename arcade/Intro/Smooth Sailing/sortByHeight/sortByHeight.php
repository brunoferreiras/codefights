<?php

function sortByHeight($a) {
    $heights = [];
    foreach($a as $height) {
        if($height != -1) {
            $heights[] = $height;
        }
    }
    sort($heights);
    for($i = 0; $i < count($a); $i++) {
        if($a[$i] != -1) {
            $a[$i] = $heights[0];
            array_shift($heights);
        }
    }
    return $a;
}
