<?php

function centuryFromYear($year) {
    $century = substr($year, 0, strlen($year) - 2);
    $end = substr($year, -2);
    if($end == "00" || $end == "0") {
        return intval($century);
    }
    return intval($century) + 1;
}