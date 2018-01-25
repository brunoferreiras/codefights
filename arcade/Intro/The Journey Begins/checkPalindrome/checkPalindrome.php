<?php

function checkPalindrome($inputString) {
    $reverse = strrev($inputString);

    if ($inputString == $reverse) {
        return true;
    } 
    else {
        return false;
    }
}
