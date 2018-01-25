<?php

function makeArrayConsecutive2($statues) {
    $need = 0;
    sort($statues);
    for($i = 0; $i < count($statues) - 1; $i++) {
        $diff = $statues[$i + 1] - $statues[$i];
        if($diff > 1) {
            $need += $diff - 1;
        }
    }
    return $need;
}
