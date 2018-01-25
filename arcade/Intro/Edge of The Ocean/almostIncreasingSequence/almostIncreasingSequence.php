<?php 

function almostIncreasingSequence($sequence) {
    $errors = 0;

    for ($i = 0; $i < count($sequence) - 1; $i++) {
        if ($sequence[$i] >= $sequence[$i + 1]) {
            $errors++;
            $exist = isset($sequence[$i + 2]);
            if ($exist && ($sequence[$i] >= $sequence[$i + 2]) && ($sequence[$i - 1] >= $sequence[$i + 1])) {
                return false;
            }
        }
    }

    return $errors <= 1;
}
