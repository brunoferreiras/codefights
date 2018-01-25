<?php

function reverseParentheses($s) {
    while (preg_match('/\(([^()]*)\)/', $s, $m)) {
        $s = str_replace($m[0], strrev($m[1]), $s);
    }
    return $s;
}
