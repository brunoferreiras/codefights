<?php

function commonCharacterCount($s1, $s2) {
    $s1Array = str_split($s1);
    $s2Array = str_split($s2);
    $cont = 0;
    foreach($s1Array as $s1Char) {
        foreach($s2Array as $key => $s2Char) {
            if($s2Char == $s1Char) {
                $cont++;
                unset($s2Array[$key]);
                break;
            }            
        }
    }
    return $cont;
}
