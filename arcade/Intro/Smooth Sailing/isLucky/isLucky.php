<?php

function isLucky($n) {
    if(strlen($n) % 2 == 0) {
        $sumPrimary = 0;
        $sumSecond = 0;
        $limit = strlen($n) / 2;
        $primaryHalf = str_split(substr($n, 0, $limit));
        $secondHalf = str_split(substr($n, -$limit));
		
        foreach($primaryHalf as $number) {
            $sumPrimary += intval($number);
        }
        foreach($secondHalf as $number) {
            $sumSecond += intval($number);
        }
        if($sumPrimary == $sumSecond) {
            return true;
        }
        return false;
    } 
    return false;
}
